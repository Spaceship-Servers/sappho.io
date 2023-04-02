<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:26
  from '/var/www/sappho.io/bans/themes/default/core/admin_tabs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e72e3c34a3_68010250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a031b973541a47a8ac133f6b272e124604887d0d' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/default/core/admin_tabs.tpl',
      1 => 1678850778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e72e3c34a3_68010250 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="admin-page-menu">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tabs']->value, 'tab');
$_smarty_tpl->tpl_vars['tab']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['tab']->value) {
$_smarty_tpl->tpl_vars['tab']->do_else = false;
?>
        <a onclick="openTab(this, '<?php echo $_smarty_tpl->tpl_vars['tab']->value['name'];?>
');"><?php echo $_smarty_tpl->tpl_vars['tab']->value['name'];?>
</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <a href="javascript:history.go(-1);">Back</a>
</div>
<?php }
}
