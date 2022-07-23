<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-BWVNQV4SYD"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
          gtag('config', 'G-BWVNQV4SYD');
        </script>

<script>

    document.addEventListener("DOMContentLoaded", init, false);

    function init()
    {
        document.nobody = document.getElementById("nobodyhere");
    }


    function toggleMute()
    {
        var muted = document.nobody.muted;
        muted = !muted;
        document.nobody.muted=muted;

        btn = document.getElementById("dotdotdot");

        if (btn.innerText === "🔊")
        {
            btn.innerText = "🔇";
        }
        else
        {
            btn.innerText= "🔊";
        }
    }
</script>        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" type="text/css" href="/rsrc/general.css">
        <title>hi</title>
        <meta property="og:description" content="sappho.io">
        <meta property="og:type" content="website">
        <meta property="og:url" content="https://sappho.io">
        <meta property="og:title" content="...?">
        <meta property="og:creator" content="&>">
        <meta property="twitter:description" content="sappho.io">
        <meta property="twitter:card" content="website">
        <meta property="twitter:title" content="...?">
        <meta property="twitter:creator" content="&>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    </head>
    <body style="font-size: 1.5vmax; text-align:center">

        <div class="navbar">
            <a href="/" class="active">Home</a>
            <a href="/spaceship">Spaceship Servers</a>
            <a href="/contact">Contact</a>
            <a href="/donate">Donate</a>
            <a href="https://github.com/sapphonie">Github</a>
        </div>
        <div class="nobody">
           <video autoplay muted loop playsinline id="nobodyhere">
                <source src="nobodyhere.webm" type="video/webm">
                <source src="nobodyhere.mp4" type="video/mp4">
           </video>
        </div>


    <div class="maincontent">
        <br>
        <button class="dotdotdot" id="dotdotdot" onclick="toggleMute();">🔇</button>

        <h2>hi. i'm stephanie "<span class="rainbow-name">sappho</span>" lenzo.<br>i am an amateur software developer and systems engineer.
        <div class="contributions">
        <h3>a sampling of things i've worked on include:</h3>
        <ul>
            <li><a href="/spaceship/">Spaceship Servers</a>, a collection of competitive focused team fortress 2 game servers</li>
            <li><a href="https://github.com/Spaceship-Servers/sappho.io">This website!</a></li>
            <li><a href="https://github.com/sapphonie/StAC-tf2">StAC</a>, an anticheat <a href="https://github.com/alliedmodders/sourcemod/">sourcemod</a> server plugin written in <a href="https://github.com/alliedmodders/sourcepawn">sourcepawn</a> for team fortress 2</li>
            <li><a href="https://openfortress.fun">Open Fortress</a>, a Quake like/afps TF2-based Source Mod. I am an anticheat developer and systems engineer.</li>
            <li><a href="https://tf2classic.com">Team Fortress 2 Classic</a>, an "old school TF2" TF2-based Source Mod. I am an anticheat developer.</li>
            <li><a href="https://github.com/sapphonie/tf2-WriteTempEnts">"tf2 WriteTempEnts"</a>, a small reverse engineering project involving team fortress 2's <span style="font-family: monospace">CBaseClient::WriteTempEntities</span> function, written in sourcepawn</li>
            <li><a href="https://github.com/sapphonie/SM-GetMem">SM-GetMem</a>, a sourcemod "extension" (C++ server plugin) to get the memory usage of a running server</li>
            <li><a href="https://github.com/sapphonie/fail2ban-sshd-aggressive-ufw-log">"fail2ban sshd aggressive ufw log"</a>, a small set of configs for <a href="https://help.ubuntu.com/community/UFW">UncomplicatedFireWall</a> and <a href="https://www.fail2ban.org/wiki/index.php/Main_Page">Fail2Ban</a>, to automatically ban users attempting to bruteforce entry to a linux server
            <li><a href="https://github.com/sapphonie/mysql-backup">mysql-backup</a>, a simple bash script intended to be run daily thru crontab to automatically backup a MySQL server to a designated directory

        </ul>
        <h3>other projects i've contributed to in the past include:</h3>
        <ul>
            <li><a href="https://creators.tf/">Creators.TF</a>, now defunct. Was one of the largest team fortress 2 community game server projects. i was a lead sysadmin and core developer.</li>
            <li><a href="https://twitter.com/tf2league">Team Fortress Competitive League</a>, now defunct. Was a team fortress 2 competitive league. i was a head administrator and sourcemod developer.</li>
            <li><a href="https://rgl.gg/">Recharge Gaming League</a>, one of the largest team fortress 2 competitive leagues. i was an anticheat administrator, systems engineer, and sourcemod developer.</li>
        </ul>
    </div>
        <h3>to reach me, please click the "contact" button at the top of this page.

    </body>
</html>
