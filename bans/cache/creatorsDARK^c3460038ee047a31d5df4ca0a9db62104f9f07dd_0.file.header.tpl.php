<?php
/* Smarty version 3.1.44, created on 2022-05-14 19:55:59
  from '/var/www/sappho.io/bans/themes/creatorsDARK/core/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6280418f55e384_47313378',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c3460038ee047a31d5df4ca0a9db62104f9f07dd' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/core/header.tpl',
      1 => 1634755132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280418f55e384_47313378 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <link rel="Shortcut Icon" href="themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/images/favicon.ico" />
        <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/fontawesome-all.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/sourcebans.js"><?php echo '</script'; ?>
>
        <link href="themes/<?php echo $_smarty_tpl->tpl_vars['theme']->value;?>
/css/main.css" rel="stylesheet" type="text/css" />
        <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/mootools.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="./scripts/contextMenoo.js"><?php echo '</script'; ?>
>
        <?php echo $_smarty_tpl->tpl_vars['xajax']->value;?>

    </head>
    <body>
        <div id="header">
            <div id="head-logo">
                <a href="index.php">
                    <img src="images/<?php echo $_smarty_tpl->tpl_vars['logo']->value;?>
" border="0" alt="SourceBans Logo" />
                </a>
            </div>
            <div id="search">
                
                <form method="get" action="index.php">
                    <input type="hidden" name="p" value="banlist" />
                    <input class="searchbox" alt="Search Bans" name="searchText" type="text" onfocus="this.value='';" onblur="if (this.value=='') {this.value=' Search Bans...';}" value=" Search Bans..." />
                    <input type="submit" name="Submit" value="Search" style="cursor:pointer;" class="button" />
                </form>
                <form method="get" action="index.php">
                    <input type="hidden" name="p" value="commslist" />
                    <input class="searchbox" alt="Search Comms" name="searchText" type="text" onfocus="this.value='';" onblur="if (this.value=='') {this.value=' Search Comms...';}" value=" Search Comms... " />
                    <input type="submit" name="Submit" value="Search" style="cursor:pointer;" class="button" />
                </form>
                
            </div>
        </div>
<?php }
}
