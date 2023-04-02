<?php
/* Smarty version 4.3.1, created on 2023-04-01 09:02:58
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_edit_admins_details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f342d89f75_95296018',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a48197c07536ffc1c6dc2a4d8c6fb543a8c0a54' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_edit_admins_details.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f342d89f75_95296018 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <div id="admin-page-content">

        <div id="add-group">
            <h3>Admin Details</h3>
            <table width="90%" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="top" width="35%"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Admin Login",'message'=>"This is the username the admin will use to login-to their admin panel. Also this will identify the admin on any bans they make."),$_smarty_tpl ) );?>
Admin Login </div></td>
                    <td><div align="left">
                            <input type="text" class="textbox" id="adminname" name="adminname" value="<?php echo $_smarty_tpl->tpl_vars['user']->value;?>
" />
                        </div>
                        <div id="adminname.msg" class="badentry"></div></td>
                </tr>
                <tr>
                    <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Steam ID",'message'=>"This is the admins 'STEAM' id. This must be set so that admins can use their admin rights ingame."),$_smarty_tpl ) );?>
Admin STEAM ID </div></td>
                    <td><div align="left">
                            <input type="text" class="textbox" id="steam" name="steam" value="<?php echo $_smarty_tpl->tpl_vars['authid']->value;?>
" />
                        </div><div id="steam.msg" class="badentry"></div></td>
                </tr>
                <tr>
                    <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Admin Email",'message'=>"Set the admins e-mail address. This will be used for sending out any automated messages from the system, and for use when you forget your password."),$_smarty_tpl ) );?>
Admin Email </div></td>
                    <td><div align="left">
                            <input type="text" class="textbox" id="email" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" />
                        </div>
                        <div id="email.msg" class="badentry"></div></td>
                </tr>

                <?php if ($_smarty_tpl->tpl_vars['change_pass']->value) {?>
                    <tr>
                        <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Password",'message'=>"The password the admin will need to access the admin panel."),$_smarty_tpl ) );?>
Admin Password </div></td>
                        <td><div align="left">
                                <input type="password" class="textbox" id="password" name="password" />
                            </div>
                            <div id="password.msg" class="badentry"></div></td>
                    </tr>
                    <tr>
                        <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Password",'message'=>"Type your password again to confirm."),$_smarty_tpl ) );?>
Admin Password (confirm) </div></td>
                        <td><div align="left">
                                <input type="password" class="textbox" id="password2" name="password2" />
                            </div>
                            <div id="password2.msg" class="badentry"></div></td>
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
                                <input type="checkbox" id="a_useserverpass" name="a_useserverpass"<?php if ($_smarty_tpl->tpl_vars['a_spass']->value) {?> checked="checked"<?php }?> TABINDEX=6 onclick="$('a_serverpass').disabled = !$(this).checked;" /> <input type="password" TABINDEX=7 class="textbox" name="a_serverpass" id="a_serverpass"<?php if (!$_smarty_tpl->tpl_vars['a_spass']->value) {?> disabled="disabled"<?php }?> />
                            </div>
                            <div id="a_serverpass.msg" class="badentry"></div>
                        </td>
                    </tr>

                <?php }?>

                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Save Changes",'class'=>"ok",'id'=>"editmod",'submit'=>true),$_smarty_tpl ) );?>

                        &nbsp;
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"back",'submit'=>false),$_smarty_tpl ) );?>

                    </td>
                </tr>
            </table>
        </div></div></form>
<?php }
}
