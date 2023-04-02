<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:18
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_groups.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e7269698b6_14085429',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a71f85fa056bcb98cf94979bfb6c21d3ad8fc1ba' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_groups.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e7269698b6_14085429 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['permission_addban']->value) {?>
    Access Denied!
<?php } else { ?>
    <?php if (!$_smarty_tpl->tpl_vars['groupbanning_enabled']->value) {?>
        This feature is disabled! Only follow links!
    <?php } else { ?>
        <h3>Add Group Ban</h3>
        <?php if (!$_smarty_tpl->tpl_vars['list_steam_groups']->value) {?>
            Here you can add a ban for a whole steam community group.<br />
            e.g. <code>http://steamcommunity.com/groups/interwavestudios</code><br /><br />
            <table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="top" width="35%">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Group Link",'message'=>"Type the link to a steam community group."),$_smarty_tpl ) );?>
Group Link
                        </div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="text" TABINDEX=1 class="textbox" id="groupurl" name="groupurl" style="width: 229px" />
                        </div>
                        <div id="groupurl.msg" class="badentry"></div>
                    </td>
                </tr>
                <tr>
                    <td valign="top" width="35%">
                        <div class="rowdesc">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Group Ban Reason",'message'=>"Type the reason, why you are going to ban this steam community group."),$_smarty_tpl ) );?>
Group Ban Reason
                        </div>
                    </td>
                    <td>
                        <div align="left">
                            <textarea class="textbox" TABINDEX=2 cols="30" rows="5" id="groupreason" name="groupreason" /></textarea>
                        </div>
                        <div id="groupreason.msg" class="badentry"></div>
                    </td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Add Group Ban",'onclick'=>"ProcessGroupBan();",'class'=>"ok",'id'=>"agban",'submit'=>false),$_smarty_tpl ) );?>

                        &nbsp;
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"aback"),$_smarty_tpl ) );?>

                    </td>
                </tr>
            </table>
        <?php } else { ?>
            All groups the player <?php echo $_smarty_tpl->tpl_vars['player_name']->value;?>
 is member of are listed here.<br />
            Choose the steam groups you want to ban.<br /><br />
            <div id="steamGroupsText" name="steamGroupsText">Loading the groups...</div>
            <div id="steamGroups" name="steamGroups" style="display:none;">
                <table id="steamGroupsTable" name="steamGroupsTable" border="0" width="500px">
                    <tr>
                        <td height="16" class="listtable_1" style="padding:0px;width:3px;" align="center"><div class="ok" style="height:16px;width:16px;cursor:pointer;" id="tickswitch" name="tickswitch" onclick="TickSelectAll();"></div></td>
                        <td height="16" class="listtable_top" align="center"><b>Group</b></td>
                    </tr>
                </table>
                &nbsp;&nbsp;L&nbsp;&nbsp;<a href="#" onclick="TickSelectAll();return false;" title="Select All" name="tickswitchlink" id="tickswitchlink">Select All</a><br /><br />
                <table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                    <tr>
                        <td valign="top" width="35%">
                            <div class="rowdesc">
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Group Ban Reason",'message'=>"Type the reason, why you are going to ban this steam community group."),$_smarty_tpl ) );?>
Group Ban Reason
                            </div>
                        </td>
                        <td>
                            <div align="left">
                                <textarea class="submit-fields" TABINDEX=2 cols="30" rows="5" id="groupreason" name="groupreason" /></textarea>
                            </div>
                            <div id="groupreason.msg" class="badentry"></div>
                        </td>
                    </tr>
                </table>
                <input type="button" class="btn ok" onclick="CheckGroupBan();" name="gban" id="gban" onmouseover="ButtonOver('gban');" onmouseout="ButtonOver('gban');" value="Add Group Ban">
            </div>
            <div id="steamGroupStatus" name="steamGroupStatus" width="100%"></div>
            <?php echo '<script'; ?>
 type="text/javascript">$('tickswitch').value = 0;xajax_GetGroups('<?php echo $_smarty_tpl->tpl_vars['list_steam_groups']->value;?>
');<?php echo '</script'; ?>
>
        <?php }?>
    <?php }
}
}
}
