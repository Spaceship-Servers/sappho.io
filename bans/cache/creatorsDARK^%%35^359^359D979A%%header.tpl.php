<?php /* Smarty version 2.6.31, created on 2021-10-20 16:04:24
         compiled from core/header.tpl */ ?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $this->_tpl_vars['title']; ?>
</title>
        <link rel="Shortcut Icon" href="themes/<?php echo $this->_tpl_vars['theme']; ?>
/images/favicon.ico" />
        <script type="text/javascript" src="./scripts/fontawesome-all.min.js"></script>
        <script type="text/javascript" src="./scripts/sourcebans.js"></script>
        <link href="themes/<?php echo $this->_tpl_vars['theme']; ?>
/css/main.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="./scripts/mootools.js"></script>
        <script type="text/javascript" src="./scripts/contextMenoo.js"></script>
        <?php echo $this->_tpl_vars['xajax']; ?>

    </head>
    <body>
        <div id="header">
            <div id="head-logo">
                <a href="index.php">
                    <img src="images/<?php echo $this->_tpl_vars['logo']; ?>
" border="0" alt="SourceBans Logo" />
                </a>
            </div>
            <div id="search">
                <?php echo '
                <form method="get" action="index.php">
                    <input type="hidden" name="p" value="banlist" />
                    <input class="searchbox" alt="Search Bans" name="searchText" type="text" onfocus="this.value=\'\';" onblur="if (this.value==\'\') {this.value=\' Search Bans...\';}" value=" Search Bans..." />
                    <input type="submit" name="Submit" value="Search" style="cursor:pointer;" class="button" />
                </form>
                <form method="get" action="index.php">
                    <input type="hidden" name="p" value="commslist" />
                    <input class="searchbox" alt="Search Comms" name="searchText" type="text" onfocus="this.value=\'\';" onblur="if (this.value==\'\') {this.value=\' Search Comms...\';}" value=" Search Comms... " />
                    <input type="submit" name="Submit" value="Search" style="cursor:pointer;" class="button" />
                </form>
                '; ?>

            </div>
        </div>