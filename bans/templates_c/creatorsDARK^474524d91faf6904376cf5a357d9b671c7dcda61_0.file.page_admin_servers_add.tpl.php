<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:52:02
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_servers_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f0b2570934_21988780',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '474524d91faf6904376cf5a357d9b671c7dcda61' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_servers_add.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f0b2570934_21988780 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tabcontent" id="Add new server">
    <?php if (!$_smarty_tpl->tpl_vars['permission_addserver']->value) {?>
        Access Denied
    <?php } else { ?>
        <div id="add-group">
            <h3>Server Details</h3>
            For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
            <input type="hidden" name="insert_type" value="add">
            <table width="90%" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="top" width="35%">
                        <div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Server Address",'message'=>"This is the IP address to your server. You can also type a domain, if you have one setup."),$_smarty_tpl ) );?>
Server IP/Domain</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="text" TABINDEX=1 class="textbox" id="address" name="address" value="<?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
" style="width: 203px" />
                        </div>
                        <div id="address.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Server Port",'message'=>"This is the port that the server is running off. <br /><br /><i>Default: 27015</i>"),$_smarty_tpl ) );?>
Server Port</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="text" TABINDEX=2 class="textbox" id="port" name="port" value="<?php if ($_smarty_tpl->tpl_vars['port']->value) {
echo $_smarty_tpl->tpl_vars['port']->value;
} else {
echo 27015;
}?>" style="width: 203px" />
                        </div>
                        <div id="port.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Rcon Password",'message'=>"This is your servers RCON password. This can be found in your server.cfg file next to <i>rcon_password</i>.<br /><br />This will be used to allow admins to administrate the server though the web interface."),$_smarty_tpl ) );?>
RCON Password</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="password" TABINDEX=3 class="textbox" id="rcon" name="rcon" value="<?php echo $_smarty_tpl->tpl_vars['rcon']->value;?>
" style="width: 203px" />
                        </div>
                        <div id="rcon.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Rcon Password",'message'=>"Please re-type your rcon password to avoid 'typos'"),$_smarty_tpl ) );?>
RCON Password (Confirm)</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="password" TABINDEX=4 class="textbox" id="rcon2" name="rcon2" value="<?php echo $_smarty_tpl->tpl_vars['rcon']->value;?>
" style="width: 203px" />
                        </div>
                        <div id="rcon2.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Server Mod",'message'=>"Select the mod that your server is currently running."),$_smarty_tpl ) );?>
Server MOD </div>
                    </td>
                    <td>
                        <div align="left" id="admingroup">
                            <select name="mod" TABINDEX=5 onchange="" id="mod" class="select">
                                <?php if (!$_smarty_tpl->tpl_vars['edit_server']->value) {?>
                                    <option value="-2">Please Select...</option>
                                <?php }?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['modlist']->value, 'mod');
$_smarty_tpl->tpl_vars['mod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mod']->value) {
$_smarty_tpl->tpl_vars['mod']->do_else = false;
?>
                                    <option value='<?php echo $_smarty_tpl->tpl_vars['mod']->value['mid'];?>
'><?php echo $_smarty_tpl->tpl_vars['mod']->value['name'];?>
</option>
                                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </select>
                        </div>
                        <div id="mod.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enabled",'message'=>"Enables the server to be shown on the public servers list."),$_smarty_tpl ) );?>
Enabled</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="checkbox" id="enabled" name="enabled" checked="checked" />
                        </div>
                        <div id="enabled.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Server Groups",'message'=>"Choose the groups to add this server to. Server groups are used for adding admins to specific sets of servers."),$_smarty_tpl ) );?>
Server Groups </div>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grouplist']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                    <tr>
                        <td valign="middle">
                            <div align="right"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
 </div>
                        </td>
                        <td>
                            <div align="left">
                                <input type="checkbox" value="<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
" id="g_<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
" name="groups[]" />
                            </div>
                        </td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <tr id="nsgroup" valign="top" class="badentry">
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['edit_server']->value) {?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>$_smarty_tpl->tpl_vars['submit_text']->value,'onclick'=>"process_edit_server();",'class'=>"ok",'id'=>"aserver",'submit'=>false),$_smarty_tpl ) );?>

                        <?php } else { ?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>$_smarty_tpl->tpl_vars['submit_text']->value,'onclick'=>"process_add_server();",'class'=>"ok",'id'=>"aserver",'submit'=>false),$_smarty_tpl ) );?>

                        <?php }?>
                        &nbsp;
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"back",'submit'=>false),$_smarty_tpl ) );?>

                    </td>
                </tr>
            </table>
        </div>
    <?php }?>
</div>
</div>
<?php }
}
