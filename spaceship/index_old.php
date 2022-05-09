<!DOCTYPE html>
<html lang="en">
    <head>
        <script data-ad-client="ca-pub-6851524828416089" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="/rsrc/general.css">
        <title>hi</title>
        <link rel="icon" type="image/png" href="/rsrc/milky_way_twimoji_new_round_pride.png">
        <meta property="og:description" content="homepage for spaceship servers">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://sappho.io">
        <meta property="og:image" content="/rsrc/milky_way_twimoji_new_round_pride.png">
        <meta property="og:title" content="spaceship servers">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <div class="navbar">
            <a href="/">Home</a>
            <a href="/spaceship" class="active">Spaceship Servers</a>
            <a href="/contact">Contact</a>
            <a href="/donate">Donate</a>

            <a href="https://github.com/sapphonie">Github</a>
            <a href="https://twitch.tv/sapphonie">Twitch</a>
            <a href="https://twitter.com/sapphonie">Twitter</a>
        </div>

        <div class="navbar" style="background-image: none !important; background-color: transparent !important">
            <a href="/bans">SourceBans</a>
            <a href="/files/tf/maps/">TF2 FastDL</a>
            <a href="/stvdemos/">STV Demos</a>
            <a href="https://discord.gg/Dn4wRu3">Discord</a>
            <a href="https://twitter.com/spaceshipSrvs">Status Twitter</a>
            <a href="/status">Netdata Status</a>

        </div>
        <h2>spaceship servers homepage</h2>
        <h3><span style="color:cyan">keep these servers up -</span> donate to <a href="/donate">the spaceship server fund</a>!</h3>
        <h3>Server status as of
        <span style="color:#ff85d5">
            <?php
            print(date('g:i a T',filemtime('../rsrc/servstat.txt')));
            print '<span style="color:white"> on </span>';
            print(date('m-d-Y',filemtime('../rsrc/servstat.txt')));
            ?>
        </span>
        </h3>

        <div class="centerFlex">
            <div class="twitterTL">
                <iframe src="/rsrc/twitterIframe.html"
                width="250"
                height="400"
                allowtransparency="true"
                frameborder="0">
                </iframe>
            </div>
            <div class="centerTable">
                <div class="serverDiv" style="">
                    <table class="servers">
                        <tbody>
                            <tr>
                                <th>Players</th>
                                <th>Connect Link</th>
                                <th>Server Name</th>
                                <th class="mapHeading">Current Map</th>
                                <th>Locked?</th>
                            </tr>
                            <?php
                            readfile('../rsrc/servstat.txt');
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="discordDiv">
                <iframe
                src="https://discord.com/widget?id=607818715425406986&theme=dark"
                frameborder="0"
                sandbox="allow-popups allow-popups-to-escape-sandbox allow-same-origin allow-scripts"
                width="250"
                height="400"
                allowtransparency="true"
                frameborder="0">
                </iframe>
            </div>
        </div>
        <div class="PleaseDontBlockTheseAdsINeedMoneyToHostTheseServersAndItDoesntGrowOnTrees">
            <div class="leftad">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- leftad -->
                <ins class="adsbygoogle"
                style="display:inline-block;width:600px;height:90px;"
                data-ad-client="ca-pub-6851524828416089"
                data-ad-slot="2817226685"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="rightad">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- rightad -->
                <ins class="adsbygoogle"
                style="display:inline-block;width:600px;height:90px;"
                data-ad-client="ca-pub-6851524828416089"
                data-ad-slot="5094770192"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
            <div class="mobilead">
                <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                <!-- mobile -->
                <ins class="adsbygoogle"
                style="display:inline-block;width:300px;height:90px"
                data-ad-client="ca-pub-6851524828416089"
                data-ad-slot="6478158148"></ins>
                <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
                </script>
            </div>
        </div>
    </body>
</html>
