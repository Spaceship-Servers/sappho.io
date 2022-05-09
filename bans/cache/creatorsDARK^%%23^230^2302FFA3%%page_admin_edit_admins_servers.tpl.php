<?php /* Smarty version 2.6.31, created on 2021-11-02 18:42:50
         compiled from page_admin_edit_admins_servers.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'page_admin_edit_admins_servers.tpl', 37, false),)), $this); ?>
<form action="" method="post">
    <div id="admin-page-content">
        <div id="add-group">
            <h3>Admin Server Access</h3>
            Please select the servers and/or groups of servers you want this admin to have access to.<br /><br />
            <table width="90%" border="0" cellspacing="0" cellpadding="4" align="center">
                <?php if ($this->_tpl_vars['row_count'] < 1): ?>
                    <tr>
                        <td colspan="3" class=""><b><i>You need to add a server or a server group, before you can setup admin server permissions</i></b></td>
                    </tr>
                <?php else: ?>
                    <tr>
                        <td colspan="3" class="tablerow4"><b><i>Server Groups</i></b></td>
                    </tr>
                    <?php $_from = ($this->_tpl_vars['group_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
                        <tr>
                            <td colspan="2" class="tablerow1"><?php echo $this->_tpl_vars['group']['name']; ?>
</td>
                            <td align="center" class="tablerow1"><input type="checkbox" id="group_<?php echo $this->_tpl_vars['group']['gid']; ?>
" name="group[]" value="g<?php echo $this->_tpl_vars['group']['gid']; ?>
" onclick="" /></td>
                        </tr>
                    <?php endforeach; endif; unset($_from); ?>
                    <tr>
                        <td colspan="3" class="tablerow4"><b><i>Servers</i></b></td>
                    </tr>
                    <?php $_from = ($this->_tpl_vars['server_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server']):
?>
                        <tr class="tablerow1">
                            <td colspan="2" class="tablerow1" id="host_<?php echo $this->_tpl_vars['server']['sid']; ?>
">Please Wait...</td>
                            <td align="center" class="tablerow1">
                                <input type="checkbox" name="servers[]" id="server_<?php echo $this->_tpl_vars['server']['sid']; ?>
" value="s<?php echo $this->_tpl_vars['server']['sid']; ?>
" onclick=""/>
                            </td>
                        </tr>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
                <tr><td>&nbsp;</td></tr>
                <tr>
                    <td align="center">
                        <?php if ($this->_tpl_vars['row_count'] > 0): ?>
                            <?php echo smarty_function_sb_button(array('text' => 'Save Changes','class' => 'ok','id' => 'editadminserver','submit' => true), $this);?>

                            &nbsp;
                        <?php endif; ?>
                        <?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'aback'), $this);?>

                    </td>
                </tr>
            </table>
            <script>
                <?php $_from = ($this->_tpl_vars['assigned_servers']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['asrv']):
?>
                if($('server_<?php echo $this->_tpl_vars['asrv']['0']; ?>
'))$('server_<?php echo $this->_tpl_vars['asrv']['0']; ?>
').checked = true;
                if($('group_<?php echo $this->_tpl_vars['asrv'][1]; ?>
'))$('group_<?php echo $this->_tpl_vars['asrv'][1]; ?>
').checked = true;
                <?php endforeach; endif; unset($_from); ?>
                <?php $_from = ($this->_tpl_vars['server_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server']):
?>
                xajax_ServerHostPlayers(<?php echo $this->_tpl_vars['server']['sid']; ?>
, "id", "host_<?php echo $this->_tpl_vars['server']['sid']; ?>
");
                <?php endforeach; endif; unset($_from); ?>
            </script>
        </div>
    </div>
</form>