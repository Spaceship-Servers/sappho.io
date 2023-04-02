<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:06:26
  from '/var/www/sappho.io/bans/themes/creatorsDARK/core/title.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e60221ba08_07193344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'de130cce81243e146d5b3966ab81d44cd104f4ca' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/core/title.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e60221ba08_07193344 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="dialog-placement" style="vertical-align:middle;display:none;opacity:0;text-align:center;width:892px;margin:0 auto;position:fixed !important;position:absolute;overflow:hidden;top:10px;left:100px;">
    <table width="460px" id="dialog-holder" class="dialog-holder" border="0" cellspacing="0" cellpadding="0" >
        <tbody width="460px">
        <tr>
            <td class="box-content">
                <h2 align="left" id="dialog-title" class="ok"></h2>
                <div class="dialog-content" align="left">
                    <div class="dialog-body">
                        <div class="clearfix">
                            <div style="float: left; margin-right: 15px;" id="dialog-icon" class="icon-info">&nbsp;</div>
                            <div style="width:360px;float: right; padding-bottom: 5px; font-size: 11px;" id="dialog-content-text"></div>
                        </div>
                    </div>
                    <div class="dialog-control" id="dialog-control">
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<br/>
<div id="content_title">
    <b><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</b>
</div>
<div id="breadcrumb">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value, 'crumb');
$_smarty_tpl->tpl_vars['crumb']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->value) {
$_smarty_tpl->tpl_vars['crumb']->do_else = false;
?>
        &raquo; <a href="<?php echo $_smarty_tpl->tpl_vars['crumb']->value['url'];?>
"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['title'];?>
</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>
<div id="content">
<?php }
}
