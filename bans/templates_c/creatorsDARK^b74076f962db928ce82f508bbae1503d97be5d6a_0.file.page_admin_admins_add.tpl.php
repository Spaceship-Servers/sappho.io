<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:52:25
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_admins_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f0c99053e5_20766921',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b74076f962db928ce82f508bbae1503d97be5d6a' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_admins_add.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f0c99053e5_20766921 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tabcontent" id="Add new admin">
    <?php if (!$_smarty_tpl->tpl_vars['permission_addadmin']->value) {?>
        Access Denied!
    <?php } else { ?>
        <div id="msg-green" style="display:none;">
            <i class="fas fa-check fa-2x"></i>
            <b>Admin Added</b>
            <br />
            The new admin has been successfully added to the system.<br /><br />
            <i>Redirecting back to admins page</i>
        </div>


        <div id="add-group">
            <h3>Admin Details</h3>
            For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
            <table width="90%" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="top" width="35%">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Admin Login",'message'=>"This is the username the admin will use to login-to their admin panel. Also this will identify the admin on any bans they make."),$_smarty_tpl ) );?>
Admin Login
                        </div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="text" TABINDEX=1 class="textbox" style="width: 200px" id="adminname" name="adminname" />
                        </div>
                        <div id="name.msg" class="badentry"></div>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Steam ID",'message'=>"This is the admins 'STEAM' id. This must be set so that admins can use their admin rights ingame."),$_smarty_tpl ) );?>
Admin Steam ID
                        </div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="text" TABINDEX=2 value="STEAM_0:" class="textbox" style="width: 200px" id="steam" name="steam" />
                        </div>
                        <div id="steam.msg" class="badentry"></div>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Admin Email",'message'=>"Set the admins e-mail address. This will be used for sending out any automated messages from the system and changing of forgotten passwords. This is only required, if you set webpanel permissions."),$_smarty_tpl ) );?>
Admin Email
                        </div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="text" TABINDEX=3 class="textbox" style="width: 200px" id="email" name="email" />
                        </div>
                        <div id="email.msg" class="badentry"></div>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Password",'message'=>"The password the admin will need to access the admin panel. This is only required, if you set webpanel permissions."),$_smarty_tpl ) );?>
Admin Password
                        </div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="password" TABINDEX=4 class="textbox" style="width: 200px" id="password" name="password" />
                        </div>
                        <div id="password.msg" class="badentry"></div>
                    </td>
                    <td align="left">
                        <button onclick="xajax_generatePassword();" class="tip" title="::Generate random password">
                            <i class="fas fa-sync fa-lg"></i>
                        </button>
                        <button onclick="$('password').type='text'" class="tip" title="::Show password">
                            <i class="fas fa-eye fa-lg"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td valign="top">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Password",'message'=>"Type the password again to confirm."),$_smarty_tpl ) );?>
Admin Password (confirm)
                        </div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="password" TABINDEX=5 class="textbox" style="width: 200px" id="password2" name="password2" />
                        </div>
                        <div id="password2.msg" class="badentry"></div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="35%">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Server Admin Password",'message'=>"If this box is checked, you will need to specify this password in the game server before you can use your admin rights."),$_smarty_tpl ) );?>
Server Password <small>(<a href="http://wiki.alliedmods.net/Adding_Admins_%28SourceMod%29#Passwords" title="SourceMod Password Info" target="_blank">More</a>)</small>
                        </div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="checkbox" id="a_useserverpass" name="a_useserverpass" TABINDEX=6 onclick="$('a_serverpass').disabled = !$(this).checked;" /> <input type="password" TABINDEX=7 class="textbox" style="width: 176px" name="a_serverpass" id="a_serverpass" disabled="disabled" />
                        </div>
                        <div id="a_serverpass.msg" class="badentry"></div>
                    </td>
                </tr>
            </table>


            <br />


            <h3>Admin Access</h3>
            <table width="90%" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="top" width="35%">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Server",'message'=>"<b>Server: </b><br>Choose the server, or server group that this admin will be able to administer."),$_smarty_tpl ) );?>
Server Access
                        </div>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td colspan="2">
                        <table width="90%" border="0" cellspacing="0" cellpadding="4" align="center">
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group_list']->value, 'group');
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
?>
                                <tr>
                                    <td colspan="2" class="tablerow4"><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
<b><i>(Group)</i></b></td>
                                    <td align="center" class="tablerow4"><input type="checkbox" id="group[]" name="group[]" value="g<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
" /></td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_list']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                                <tr class="tablerow1">
                                    <td colspan="2" class="tablerow1" id="sa<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
"><i>Retrieving Hostname... <?php echo $_smarty_tpl->tpl_vars['server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['server']->value['port'];?>
</i></td>
                                    <td align="center" class="tablerow1">
                                        <input type="checkbox" name="servers[]" id="servers[]" value="s<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" />
                                    </td>
                                </tr>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </table>
                    </td>
                </tr>
            </table>



            <br />



            <h3>Admin Permissions</h3>
            <table width="90%" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="top" width="35%">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Admin Group",'message'=>"<b>Custom Permisions: </b><br>Select this to choose custom permissions for this admin.<br><br><b>New Group: </b><br>Select this to choose custom permissions and then save the permissions as a new group.<br><br><b>Groups: </b><br>Select a pre-made group to add the admin to."),$_smarty_tpl ) );?>
Server Admin Group
                        </div>
                    </td>
                    <td>
                        <div align="left" id="admingroup">
                            <select TABINDEX=8 onchange="update_server()" name="serverg" id="serverg" class="select" style="width: 225px">
                                <option value="-2">Please Select...</option>
                                <option value="-3">No Permissions</option>
                                <option value="c">Custom Permissions</option>
                                <option value="n">New Admin Group</option>
                                <optgroup label="Groups" style="font-weight:bold;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_admin_group_list']->value, 'server_wg');
$_smarty_tpl->tpl_vars['server_wg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server_wg']->value) {
$_smarty_tpl->tpl_vars['server_wg']->do_else = false;
?>
                                        <option value='<?php echo $_smarty_tpl->tpl_vars['server_wg']->value['id'];?>
'><?php echo $_smarty_tpl->tpl_vars['server_wg']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </optgroup>
                            </select>
                        </div>
                        <div id="server.msg" class="badentry"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="serverperm" valign="top" style="height:5px;overflow:hidden;"></td>
                </tr>
                <tr>
                    <td valign="top">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Admin Group",'message'=>"<b>Custom Permisions: </b><br>Select this to choose custom permissions for this admin.<br><br><b>New Group: </b><br>Select this to choose custom permissions and then save the permissions as a new group.<br><br><b>Groups: </b><br>Select a pre-made group to add the admin to."),$_smarty_tpl ) );?>
Web Admin Group
                        </div>
                    </td>
                    <td>
                        <div align="left" id="webgroup">
                            <select TABINDEX=9 onchange="update_web()" name="webg" id="webg" class="select" style="width: 225px">
                                <option value="-2">Please Select...</option>
                                <option value="-3">No Permissions</option>
                                <option value="c">Custom Permissions</option>
                                <option value="n">New Admin Group</option>
                                <optgroup label="Groups" style="font-weight:bold;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_group_list']->value, 'server_g');
$_smarty_tpl->tpl_vars['server_g']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server_g']->value) {
$_smarty_tpl->tpl_vars['server_g']->do_else = false;
?>
                                        <option value='<?php echo $_smarty_tpl->tpl_vars['server_g']->value['gid'];?>
'><?php echo $_smarty_tpl->tpl_vars['server_g']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </optgroup>
                            </select>
                        </div>
                        <div id="web.msg" class="badentry"></div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" id="webperm" valign="top" style="height:5px;overflow:hidden;"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Add Admin",'onclick'=>"ProcessAddAdmin();",'class'=>"ok",'id'=>"aadmin",'submit'=>false),$_smarty_tpl ) );?>

                        &nbsp;
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"aback"),$_smarty_tpl ) );?>

                    </td>
                </tr>
            </table>
            <?php echo $_smarty_tpl->tpl_vars['server_script']->value;?>

        </div>
    <?php }?>
</div>
<?php }
}
