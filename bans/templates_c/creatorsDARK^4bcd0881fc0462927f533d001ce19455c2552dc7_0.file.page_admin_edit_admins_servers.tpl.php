<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:52:35
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_edit_admins_servers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f0d3313ea4_97738842',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4bcd0881fc0462927f533d001ce19455c2552dc7' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_edit_admins_servers.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f0d3313ea4_97738842 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div id="admin-page-content">
        <div id="add-group">
            <h3>Admin Server Access</h3>
            Please select the servers and/or groups of servers you want this admin to have access to.<br /><br />
            <table width="90%" border="0" cellspacing="0" cellpadding="4" align="center">
                <?php if ($_smarty_tpl->tpl_vars['row_count']->value < 1) {?>
                    <tr>
                        <td colspan="3" class=""><b><i>You need to add a server or a server group, before you can setup admin server permissions</i></b></td>
                    </tr>
                <?php } else { ?>
                    <tr>
                        <td colspan="3" class="tablerow4"><b><i>Server Groups</i></b></td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_list']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                        <tr>
                            <td colspan="2" class="tablerow1"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</td>
                            <td align="center" class="tablerow1"><input type="checkbox" id="group_<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
" name="group[]" value="g<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
" onclick="" /></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <tr>
                        <td colspan="3" class="tablerow4"><b><i>Servers</i></b></td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_list']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                        <tr class="tablerow1">
                            <td colspan="2" class="tablerow1" id="host_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">Please Wait...</td>
                            <td align="center" class="tablerow1">
                                <input type="checkbox" name="servers[]" id="server_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" value="s<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" onclick=""/>
                            </td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td align="center">
                        <?php if ($_smarty_tpl->tpl_vars['row_count']->value > 0) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Save Changes",'class'=>"ok",'id'=>"editadminserver",'submit'=>true),$_smarty_tpl ) );?>

                            &nbsp;
                        <?php }?>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"aback"),$_smarty_tpl ) );?>

                    </td>
                </tr>
            </table>
            <?php echo '<script'; ?>
>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['assigned_servers']->value, 'asrv');
$_smarty_tpl->tpl_vars['asrv']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['asrv']->value) {
$_smarty_tpl->tpl_vars['asrv']->do_else = false;
?>
                if($('server_<?php echo $_smarty_tpl->tpl_vars['asrv']->value[0];?>
'))$('server_<?php echo $_smarty_tpl->tpl_vars['asrv']->value[0];?>
').checked = true;
                if($('group_<?php echo $_smarty_tpl->tpl_vars['asrv']->value[1];?>
'))$('group_<?php echo $_smarty_tpl->tpl_vars['asrv']->value[1];?>
').checked = true;
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_list']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                xajax_ServerHostPlayers(<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
, "id", "host_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
");
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php echo '</script'; ?>
>
        </div>
    </div>
</form>
<?php }
}
