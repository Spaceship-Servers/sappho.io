<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:18
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e72691c3c0_92011647',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6224c88ddba26122aaa85202e4565941b7312846' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_add.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e72691c3c0_92011647 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['permission_addban']->value) {?>
    Access Denied!
<?php } else { ?>
    <div id="msg-green" style="display:none;">
        <i class="fas fa-check fa-2x"></i>
        <b>Ban Added</b><br />
        The new ban has been added to the system.<br /><br />
        <i>Redirecting back to bans page</i>
    </div>

    <div id="add-group1">
        <h3>Add Ban</h3>
        For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
        <table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Nickname",'message'=>"Type the nickname of the person that you are banning."),$_smarty_tpl ) );?>
Nickname
                    </div>
                </td>
                <td>
                    <div align="left">
                        <input type="hidden" id="fromsub" value="" />
                        <input type="text" TABINDEX=1 class="textbox" id="nickname" name="nickname" style="width: 169px" />
                    </div>
                    <div id="nick.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Ban Type",'message'=>"Choose whether to ban by Steam ID or IP address."),$_smarty_tpl ) );?>
Ban Type
                    </div>
                </td>
                <td>
                    <div align="left">
                        <select id="type" name="type" TABINDEX=2 class="select" style="width: 196px">
                            <option value="0">Steam ID</option>
                            <option value="1">IP Address</option>
                        </select>
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Steam ID / Community ID",'message'=>"The Steam ID or Community ID of the person to ban."),$_smarty_tpl ) );?>
Steam ID / Community ID
                    </div>
                </td>
                <td>
                    <div align="left">
                        <input type="text" TABINDEX=3 class="textbox" id="steam" name="steam" style="width: 169px" />
                    </div>
                    <div id="steam.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"IP Address",'message'=>"Type the IP address of the person you want to ban."),$_smarty_tpl ) );?>
IP Address
                    </div>
                </td>
                <td>
                    <div align="left">
                        <input type="text" TABINDEX=3 class="textbox" id="ip" name="ip" style="width: 169px" />
                    </div>
                    <div id="ip.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Ban Reason",'message'=>"Explain in detail, why this ban is being made."),$_smarty_tpl ) );?>
Ban Reason
                    </div>
                </td>
                <td>
                    <div align="left">
                        <select id="listReason" name="listReason" TABINDEX=4 class="select" onChange="changeReason(this[this.selectedIndex].value);">
                            <option value="" selected> -- Select Reason -- </option>
                            <optgroup label="Hacking">
                                <option value="Aimbot">Aimbot</option>
                                <option value="Antirecoil">Antirecoil</option>
                                <option value="Wallhack">Wallhack</option>
                                <option value="Spinhack">Spinhack</option>
                                <option value="Multi-Hack">Multi-Hack</option>
                                <option value="No Smoke">No Smoke</option>
                                <option value="No Flash">No Flash</option>
                            </optgroup>
                            <optgroup label="Behavior">
                                <option value="Team Killing">Team Killing</option>
                                <option value="Team Flashing">Team Flashing</option>
                                <option value="Spamming Mic/Chat">Spamming Mic/Chat</option>
                                <option value="Inappropriate Spray">Inappropriate Spray</option>
                                <option value="Inappropriate Language">Inappropriate Language</option>
                                <option value="Inappropriate Name">Inappropriate Name</option>
                                <option value="Ignoring Admins">Ignoring Admins</option>
                                <option value="Team Stacking">Team Stacking</option>
                            </optgroup>
                            <?php if ($_smarty_tpl->tpl_vars['customreason']->value) {?>
                                <optgroup label="Custom">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customreason']->value, 'creason');
$_smarty_tpl->tpl_vars['creason']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['creason']->value) {
$_smarty_tpl->tpl_vars['creason']->do_else = false;
?>
                                        <option value="<?php echo $_smarty_tpl->tpl_vars['creason']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['creason']->value;?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </optgroup>
                            <?php }?>
                            <option value="other">Other Reason</option>
                        </select>
                        <div id="dreason" style="display:none;">
                            <textarea class="textbox" TABINDEX=4 cols="30" rows="5" id="txtReason" name="txtReason"></textarea>
                        </div>
                    </div>
                    <div id="reason.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Ban Length",'message'=>"Select how long you want to ban this person for."),$_smarty_tpl ) );?>
Ban Length
                    </div>
                </td>
                <td>
                    <div align="left">
                        <select id="banlength" TABINDEX=5 class="select" style="width: 196px">
                            <option value="0">Permanent</option>
                            <optgroup label="minutes">
                                <option value="1">1 minute</option>
                                <option value="5">5 minutes</option>
                                <option value="10">10 minutes</option>
                                <option value="15">15 minutes</option>
                                <option value="30">30 minutes</option>
                                <option value="45">45 minutes</option>
                            </optgroup>
                            <optgroup label="hours">
                                <option value="60">1 hour</option>
                                <option value="120">2 hours</option>
                                <option value="180">3 hours</option>
                                <option value="240">4 hours</option>
                                <option value="480">8 hours</option>
                                <option value="720">12 hours</option>
                            </optgroup>
                            <optgroup label="days">
                                <option value="1440">1 day</option>
                                <option value="2880">2 days</option>
                                <option value="4320">3 days</option>
                                <option value="5760">4 days</option>
                                <option value="7200">5 days</option>
                                <option value="8640">6 days</option>
                            </optgroup>
                            <optgroup label="weeks">
                                <option value="10080">1 week</option>
                                <option value="20160">2 weeks</option>
                                <option value="30240">3 weeks</option>
                            </optgroup>
                            <optgroup label="months">
                                <option value="43200">1 month</option>
                                <option value="86400">2 months</option>
                                <option value="129600">3 months</option>
                                <option value="259200">6 months</option>
                                <option value="518400">12 months</option>
                            </optgroup>
                        </select>
                    </div>
                    <div id="length.msg" class="badentry"></div>
                </td>
            </tr>


            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Upload Demo",'message'=>"Click here to upload a demo with this ban submission."),$_smarty_tpl ) );?>
Upload Demo
                    </div>
                </td>
                <td>
                    <div align="left">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Upload a demo",'onclick'=>"childWindow=open('pages/admin.uploaddemo.php','upload','resizable=no,width=300,height=130');",'class'=>"save",'id'=>"udemo",'submit'=>false),$_smarty_tpl ) );?>

                    </div>
                    <div id="demo.msg" style="color:#CC0000;"></div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Add Ban",'onclick'=>"ProcessBan();",'class'=>"ok",'id'=>"aban",'submit'=>false),$_smarty_tpl ) );?>

                    &nbsp;
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"aback"),$_smarty_tpl ) );?>

                </td>
            </tr>
        </table>
    </div>
<?php }
}
}
