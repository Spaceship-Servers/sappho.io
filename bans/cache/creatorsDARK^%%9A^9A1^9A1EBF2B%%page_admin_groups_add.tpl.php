<?php /* Smarty version 2.6.31, created on 2022-04-26 05:36:13
         compiled from page_admin_groups_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help_icon', 'page_admin_groups_add.tpl', 10, false),array('function', 'sb_button', 'page_admin_groups_add.tpl', 44, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_addgroup']): ?>
    Access Denied!
<?php else: ?>
    <div id="add-group">
        <h3>New Group</h3>
        <table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo smarty_function_help_icon(array('title' => 'Group Name','message' => "Type the name of the new group you want to create."), $this);?>
Group Name
                    </div>
                </td>
                <td>
                    <div align="left">
                        <input type="text" TABINDEX=1 class="textbox" id="groupname" name="groupname" />
                    </div>
                    <div id="name.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <div class="rowdesc">
                        <?php echo smarty_function_help_icon(array('title' => 'Group Type','message' => "This defines the type of group you are about to create. This helps identify and catagorize the groups list."), $this);?>
Group Type
                    </div>
                </td>
                <td>
                    <div align="left">
                        <select onchange="UpdateGroupPermissionCheckBoxes()" TABINDEX=2 class="select" name="grouptype" id="grouptype">
                            <option value="0">Please Select...</option>
                            <option value="1">Web Admin Group</option>
                            <option value="2">Server Admin Group</option>
                            <option value="3">Server Group</option>
                        </select>
                    </div>
                    <div id="type.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" id="perms" valign="top" style="height:5px;overflow:hidden;"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <?php echo smarty_function_sb_button(array('text' => 'Save Changes','onclick' => "ProcessGroup();",'class' => 'ok','id' => 'agroup','submit' => false), $this);?>

                    &nbsp;
                    <?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'back','submit' => false), $this);?>

                </td>
            </tr>
        </table>
    </div>
<?php endif; ?>