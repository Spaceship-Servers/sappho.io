<!DOCTYPE html>
    <head>
        <link rel="stylesheet" type="text/css" href="/rsrc/general.css">
        <script>
            function get_input_id()
            {
                var uploadField = document.getElementById("fileupload");
                
                uploadField.onchange = function()
                {
                    var size = this.files[0].size;
                    // 64 MB max
                    if (size > (64 * 1000 * 1000))
                    {
                        var size_mb = Number(parseFloat(size/1000/1000).toFixed(2));
                        alert("File is too big! Max size is 64MB. Your file was " + size_mb + "MB.");
                        this.value = "";
                    };
                };
            }
        </script>
    </head>
    <body onload="get_input_id()">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="64000000"> 
            <input type="file" name="map" id="fileupload" accept=".bsp">
            <input type="submit" value="Submit">
        </form>
        <?php
            // YOU NEED PHP 8.1 TO USE XXHASH JSYK

            // User just got here
            if (!$_FILES)
            {
                echo "<p style=\"font-size:2vmin;\">Upload any TF2 map file, up to 64MB.\n";
                echo "<p style=\"font-size:2vmin;\">To use this as a FastDL for a TF2 server, put the following in your server.cfg:\n";
                echo "<pre>sv_downloadurl \"https://sappho.io/files/tf/\"</pre>";
                die();
            }

            $tmpname    = $_FILES['map']['tmp_name'];
            // this needs sanitized.
            $realname   = $_FILES['map']['name'];

            $uri = "sappho.io/files/tf/maps/";

            // just get rid of bullshit characters. i dont care about i18n
            $sanitized = preg_replace('/([^a-zA-Z0-9\-\._])|(\.{2,})/','', $realname);
            $sanitized = preg_replace('/(\.{2,})/','', $sanitized);
            $realname  = basename($sanitized);

            echo "<pre>\n";

                // User clicked submit without selecting a file
                if (!$realname)
                {
                    echo "You have to upload a file.\n";
                    die();
                }

                // Prevent super long file names
                if (strlen($realname) > 32)
                {
                    echo "File name too long. Try again.\n";
                    die();
                }

                $mapsize = $_FILES['map']['size'];
                $humansize  = sprintf("%.02f MB", $mapsize/1000/1000);

                // size check just in case user bypasses the client ones
                if ($mapsize > (64 * 1000 * 1000))
                {
                    echo "File is too big. Max size is 64MB. Your file was " . $humansize . ". Try again.\n";
                    die();
                }

                
                echo "map name:  $realname\n";
                echo "file size: $humansize\n\n";

                // Don't let users upload default tf2 maps
                $defaultfiles = file_get_contents("/var/www/sappho.io/files/tf/maps/defaultmaps.txt");

                // uh oh, it's a default tf2 map!
                if (strpos($defaultfiles, $realname) !== false)
                {
                    echo "This is a default TF2 map. Try again.";
                    die();
                }


                // xxhash: https://github.com/Cyan4973/xxHash
                // Super speedy hashing algo. NOT CRYPTOGRAPHICALLY SAFE FTR
                // I want xxh3 (it's faster) but until debian updates xxhash to 8.1 it ain't happening
                // I also wanted to iterate over all files every time something is uploaded but that's expensive, yo
                $uploadhash = hash_file("xxh64", $tmpname, false);

                /*
                    crontab:
                        * * * * * ionice -c idle nice -19 chrt -i 0 bash /opt/scripts/xxh.sh

                    /opt/scripts/xxh.sh:

                        #!/bin/bash

                        mapdir=/var/www/sappho.io/files/tf/maps

                        find ${mapdir} -mmin -1 | grep .bsp &> /dev/null
                        if [ $? -ne 0 ]; then
                            echo nothing changed headass
                            exit 0
                        fi

                        for file in *.bsp; do
                            echo "Processing $file file..";
                            xxhsum "${mapdir}"/"$file" >> "${mapdir}"/hashes.tmp
                            sleep 0.1
                        done

                        true > "${mapdir}"/hashes.txt
                        mv "${mapdir}"/hashes.tmp "${mapdir}"/hashes.txt

                        # xxhsum /var/www/sappho.io/files/tf/maps/* > /var/www/sappho.io/files/tf/maps/hashes.tmp; sync; sleep 1; mv /var/www/sappho.io/files/tf/maps/hashes.tmp /var/www/sappho.io/files/tf/maps/hashes.txt
                */
                $hashes = file_get_contents("/var/www/sappho.io/files/tf/maps/hashes.txt");

                // we found another identical file!
                if (strpos($hashes, $uploadhash) !== false)
                {
                    echo "Another identical file exists. Try again.";
                    die();
                }

                // read first 5 bytes
                $magicvbsp = file_get_contents($tmpname, false, NULL, 0, 4);
                // https://developer.valvesoftware.com/wiki/Source_BSP_File_Format
                // VBSP header is "VBSP"    = \x56\x42\x53\x50
                if ($magicvbsp !== "\x56\x42\x53\x50")
                {
                    echo "This isn't a valid BSP file. Try again.\n";
                    die();
                }

                // Version is 20 for tf2 = \x14
                $bspversion= file_get_contents($tmpname, false, NULL, 4, 1);

                // funny easter egg
                if ($bspversion !== "\x14")
                {
                    echo "...wrong game. Try again!";
                    die();
                }

                // get the offset to where our entity lump *should* be
                $lilendian_lump = file_get_contents($tmpname, false, NULL, 8, 4);
                // turn it to a proper hex string
                $hexoff = bin2hex($lilendian_lump);
                // This is ugly, this is disgusting, I'm going to kill you, give me 200 dollars
                // Swap the endianness
                $swapoff = $hexoff[6] . $hexoff[7] . $hexoff[4] . $hexoff[5] . $hexoff[2] . $hexoff[3] . $hexoff[0] . $hexoff[1];


                $entoff_string = file_get_contents($tmpname, false, NULL, hexdec($swapoff), 32);
                
                // All bspzip compressed maps should have this string
                $lzmapos        = strpos($entoff_string, "LZMA");
                // NON bspzip compressed maps should have this string instead
                // (this is entity lump 0 so worldspawn should always be first)
                $worldmaxpos    = strpos($entoff_string, "world_maxs");

                // didn't find a lzma string, map isn't compressed
                if ($lzmapos === false)
                {
                    // didn't find a skybox string either?!
                    if ($worldmaxpos === false)
                    {
                        echo "This isn't a valid TF2 map. Try again.\n";
                        die();
                    }
                    if ($mapsize > (32 * 1000 * 1000))
                    {
                        echo "Please for the love of god, pack your map with bspzip's -compress flag.\n";
                        echo "If you don't know what that is, try using compilepal.\n";
                        echo "If you aren't the creator of this map, try poking whoever did.\n";
                        echo "Accepting this map anyway.\n";
                    }
                }
                echo "\n";

                $finaldir = "/var/www/" . $uri . $realname;
                if (move_uploaded_file($tmpname, $finaldir))
                {
                    echo "Your map has been uploaded to the server. The url is:\n";
                    echo "https://" . $uri . $realname . "\n";
                }
        ?>
        </pre>
    </body>
</html>


