<?php
/* Smarty version 4.3.0, created on 2023-03-18 03:55:30
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_kickit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_64153632d23542_36240108',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '85e059f5606c5cdb0492b698ffdb3959b17d1127' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_kickit.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64153632d23542_36240108 (Smarty_Internal_Template $_smarty_tpl) {
?><html>
<head>
    <?php echo $_smarty_tpl->tpl_vars['xajax_functions']->value;?>

    <?php echo '<script'; ?>
 type="text/javascript">
        //<![CDATA[
        window.onload = function() {xajax_LoadServers('<?php echo $_smarty_tpl->tpl_vars['check']->value;?>
', '<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
');}
        var srvcount = 0;
        function set_counter(count)
        {
            srvcount += count;
            if(srvcount==<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
 || count=='-1') {
                parent.document.getElementById('dialog-control').innerHTML = "<font color=\"green\" style=\"font-size: 12px;\"><b>Done searching.</b></font>"+parent.document.getElementById('dialog-control').innerHTML;
                parent.document.getElementById('dialog-control').setStyle('display', 'block');
                setTimeout("parent.document.getElementById('dialog-placement').setStyle('display', 'none');",5000);
                setTimeout("window.location='../index.php?p=admin&c=bans'",5000);
            }
        }
        parent.document.getElementById('dialog-control').setStyle('display', 'none');
        //]]>
    <?php echo '</script'; ?>
>
</head>
<body style="
	background-repeat: repeat-x;
	color: #444;
	font-family: Verdana, Arial, Tahoma, Trebuchet MS, Sans-Serif, Georgia, Courier, Times New Roman, Serif;
	font-size: 11px;
	line-height: 135%;
	margin: 5px;
	padding: 0px;
   ">
<div id="container" name="container">
    <h3 style="font-size: 12px;">Searching for the player on all servers...</h3>
    <table border="0">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['servers']->value, 'serv');
$_smarty_tpl->tpl_vars['serv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['serv']->value) {
$_smarty_tpl->tpl_vars['serv']->do_else = false;
?>
        <tr>
            <td><div id="srvip_<?php echo $_smarty_tpl->tpl_vars['serv']->value['num'];?>
"><font size="1"><?php echo $_smarty_tpl->tpl_vars['serv']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['serv']->value['port'];?>
</font></div></td>
            <td>
                <div id="srv_<?php echo $_smarty_tpl->tpl_vars['serv']->value['num'];?>
"><font size="1">Waiting...</font></div>
            </td>
        </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
    if(document.all) {
        parent.document.all["srvkicker"].height = document.all["container"].offsetHeight + 10;
    }
    else {
        parent.document.getElementById("srvkicker").height = document.documentElement.clientHeight;
    }
<?php echo '</script'; ?>
>
</body>
</html><?php }
}
