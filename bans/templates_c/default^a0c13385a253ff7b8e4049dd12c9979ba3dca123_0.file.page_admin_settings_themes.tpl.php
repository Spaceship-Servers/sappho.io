<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:26
  from '/var/www/sappho.io/bans/themes/default/page_admin_settings_themes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e72e3db215_72448792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a0c13385a253ff7b8e4049dd12c9979ba3dca123' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/default/page_admin_settings_themes.tpl',
      1 => 1678850778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e72e3db215_72448792 (Smarty_Internal_Template $_smarty_tpl) {
?><h3 align="left">Themes</h3>
<div id="current-theme-holder">
    <h4 class="largetitle">Selected Theme: <span id="theme.name"><?php echo $_smarty_tpl->tpl_vars['theme_name']->value;?>
</span></h4>
    <div id="current-theme-screenshot">
        <?php echo $_smarty_tpl->tpl_vars['theme_screenshot']->value;?>

    </div>
    <div id="current-theme-details">
        <table width="98%" cellspacing="0" cellpadding="3" align="left">
            <tr>
                <td><b>Theme Author:</b></td>
            </tr>
            <tr>
                <td><div id="theme.auth"><?php echo $_smarty_tpl->tpl_vars['theme_author']->value;?>
</div></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><b>Theme Version:</b></td>
            </tr>
            <tr>
                <td><div id="theme.vers"><?php echo $_smarty_tpl->tpl_vars['theme_version']->value;?>
</div></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><b>Theme Link:</b></td>
            </tr>
            <tr>
                <td><div id="theme.link"><a href="<?php echo $_smarty_tpl->tpl_vars['theme_link']->value;?>
" target="_new"><?php echo $_smarty_tpl->tpl_vars['theme_link']->value;?>
</a></div></td>
            </tr>
            <tr>
                <td align="right"><div id="theme.apply"></div></td>
            </tr>
        </table>
    </div>
</div>

<br />
<h4 class="largetitle">Available Themes</h4>
Click a theme below to see details about it.<br /><br />
<div id="theme-list">
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['theme_list']->value, 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
            <li><a href="javascript:void(0);" onclick="javascript:xajax_SelTheme('<?php echo $_smarty_tpl->tpl_vars['theme']->value['dir'];?>
');"><b><?php echo $_smarty_tpl->tpl_vars['theme']->value['name'];?>
</b></a></li>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}
