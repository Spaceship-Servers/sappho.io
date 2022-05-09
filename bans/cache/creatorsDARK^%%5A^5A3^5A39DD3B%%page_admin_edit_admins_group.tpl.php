<?php /* Smarty version 2.6.31, created on 2021-11-02 18:43:11
         compiled from page_admin_edit_admins_group.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help_icon', 'page_admin_edit_admins_group.tpl', 9, false),array('function', 'sb_button', 'page_admin_edit_admins_group.tpl', 48, false),)), $this); ?>
<form action="" method="post">
    <div id="admin-page-content">
        <div id="add-group">
            <h3>Admin Groups</h3>
            For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
            Choose the new groups that you want <b><?php echo $this->_tpl_vars['group_admin_name']; ?>
</b> to appear in.<br /><br />
            <table width="90%" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="middle"><div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Web Group','message' => 'Choose the group you want this admin to appear in for web permissions'), $this);?>
Web Admin Group</div></td>
                    <td>
                        <div align="left" id="wadmingroup">
                            <select name="wg" id="wg" class="select">
                                <option value="-1">No Group</option>
                                <optgroup label="Groups" style="font-weight:bold;">
                                    <?php $_from = $this->_tpl_vars['web_lst']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['wg']):
?>
                                        <option value="<?php echo $this->_tpl_vars['wg']['gid']; ?>
"<?php if ($this->_tpl_vars['wg']['gid'] == $this->_tpl_vars['group_admin_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['wg']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </optgroup>
                            </select>
                        </div>
                        <div id="wgroup.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr id="nsgroup" valign="top" style="height:5px;overflow:hidden;">
                </tr>

                <tr>
                    <td valign="middle"><div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Server Group','message' => 'Choose the group you want this admin to appear in for server admin permissions'), $this);?>
Server Admin Group </div></td>
                    <td><div align="left" id="wadmingroup">
                            <select name="sg" id="sg" class="select">
                                <option value="-1">No Group</option>

                                <optgroup label="Groups" style="font-weight:bold;">
                                    <?php $_from = $this->_tpl_vars['group_lst']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sg']):
?>
                                        <option value="<?php echo $this->_tpl_vars['sg']['id']; ?>
"<?php if ($this->_tpl_vars['sg']['id'] == $this->_tpl_vars['server_admin_group_id']): ?> selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['sg']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </optgroup>
                            </select>
                        </div>
                        <div id="sgroup.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php echo smarty_function_sb_button(array('text' => 'Save Changes','class' => 'ok','id' => 'agroups','submit' => true), $this);?>

                        &nbsp;
                        <?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'aback'), $this);?>

                    </td>
                </tr>
            </table>
        </div>
    </div>
</form>