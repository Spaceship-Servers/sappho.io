<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:59:17
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_edit_admins_group.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f265d0bc28_62668511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd685e98164af658a299f83f4e997a042a7d9d10c' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_edit_admins_group.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f265d0bc28_62668511 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div id="admin-page-content">
        <div id="add-group">
            <h3>Admin Groups</h3>
            For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
            Choose the new groups that you want <b><?php echo $_smarty_tpl->tpl_vars['group_admin_name']->value;?>
</b> to appear in.<br /><br />
            <table width="90%" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="middle"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Web Group",'message'=>"Choose the group you want this admin to appear in for web permissions"),$_smarty_tpl ) );?>
Web Admin Group</div></td>
                    <td>
                        <div align="left" id="wadmingroup">
                            <select name="wg" id="wg" class="select">
                                <option value="-1">No Group</option>
                                <optgroup label="Groups" style="font-weight:bold;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['web_lst']->value, 'wg');
$_smarty_tpl->tpl_vars['wg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['wg']->value) {
$_smarty_tpl->tpl_vars['wg']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['wg']->value['gid'];?>
"<?php if ($_smarty_tpl->tpl_vars['wg']->value['gid'] == $_smarty_tpl->tpl_vars['group_admin_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['wg']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </optgroup>
                            </select>
                        </div>
                        <div id="wgroup.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr id="nsgroup" valign="top" style="height:5px;overflow:hidden;">
                </tr>

                <tr>
                    <td valign="middle"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Server Group",'message'=>"Choose the group you want this admin to appear in for server admin permissions"),$_smarty_tpl ) );?>
Server Admin Group </div></td>
                    <td><div align="left" id="wadmingroup">
                            <select name="sg" id="sg" class="select">
                                <option value="-1">No Group</option>

                                <optgroup label="Groups" style="font-weight:bold;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_lst']->value, 'sg');
$_smarty_tpl->tpl_vars['sg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sg']->value) {
$_smarty_tpl->tpl_vars['sg']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['sg']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['sg']->value['id'] == $_smarty_tpl->tpl_vars['server_admin_group_id']->value) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['sg']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </optgroup>
                            </select>
                        </div>
                        <div id="sgroup.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Save Changes",'class'=>"ok",'id'=>"agroups",'submit'=>true),$_smarty_tpl ) );?>

                        &nbsp;
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"aback"),$_smarty_tpl ) );?>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>
<?php }
}
