<?php /* Smarty version 2.6.31, created on 2021-10-21 21:25:21
         compiled from page_admin_bans_groups.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help_icon', 'page_admin_bans_groups.tpl', 15, false),array('function', 'sb_button', 'page_admin_bans_groups.tpl', 41, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_addban']): ?>
    Access Denied!
<?php else: ?>
    <?php if (! $this->_tpl_vars['groupbanning_enabled']): ?>
        This feature is disabled! Only follow links!
    <?php else: ?>
        <h3>Add Group Ban</h3>
        <?php if (! $this->_tpl_vars['list_steam_groups']): ?>
            Here you can add a ban for a whole steam community group.<br />
            e.g. <code>http://steamcommunity.com/groups/interwavestudios</code><br /><br />
            <table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="top" width="35%">
                        <div class="rowdesc">
                            <?php echo smarty_function_help_icon(array('title' => 'Group Link','message' => "Type the link to a steam community group."), $this);?>
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
                            <?php echo smarty_function_help_icon(array('title' => 'Group Ban Reason','message' => "Type the reason, why you are going to ban this steam community group."), $this);?>
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
                        <?php echo smarty_function_sb_button(array('text' => 'Add Group Ban','onclick' => "ProcessGroupBan();",'class' => 'ok','id' => 'agban','submit' => false), $this);?>

                        &nbsp;
                        <?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'aback'), $this);?>

                    </td>
                </tr>
            </table>
        <?php else: ?>
            All groups the player <?php echo $this->_tpl_vars['player_name']; ?>
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
                                <?php echo smarty_function_help_icon(array('title' => 'Group Ban Reason','message' => "Type the reason, why you are going to ban this steam community group."), $this);?>
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
            <script type="text/javascript">$('tickswitch').value = 0;xajax_GetGroups('<?php echo $this->_tpl_vars['list_steam_groups']; ?>
');</script>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>