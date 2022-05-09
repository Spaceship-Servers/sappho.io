<?php /* Smarty version 2.6.31, created on 2022-04-26 05:36:13
         compiled from page_admin_groups_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'htmlspecialchars', 'page_admin_groups_list.tpl', 165, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_listgroups']): ?>
    Access Denied!
<?php else: ?>
    <h3>Groups</h3>
    Click on a group to view its permissions. <br /><br />

    <!-- Web Admin Groups -->
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4">
                <table width="100%" cellpadding="0" cellspacing="0" class="front-module-header" class="listtable">
                    <tr>
                        <td align="left">Web Admin Groups</td>
                        <td align="right">Total: <?php echo $this->_tpl_vars['web_group_count']; ?>
</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="40%" height='16' class="listtable_top"><strong>Group Name</strong></td>
            <td width="25%" height='16' class="listtable_top"><strong>Admins in group</strong></td>
            <td width="30%" height='16' class="listtable_top"><strong>Action</strong></td>
        </tr>
        <?php $_from = ($this->_tpl_vars['web_group_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['web_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['web_group']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group']):
        $this->_foreach['web_group']['iteration']++;
?>
            <tr id="gid_<?php echo $this->_tpl_vars['group']['gid']; ?>
" class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
                <td class="listtable_1" height='16'><?php echo $this->_tpl_vars['group']['name']; ?>
</td>
                <td class="listtable_1" height='16'><?php echo $this->_tpl_vars['web_admins'][($this->_foreach['web_group']['iteration']-1)]; ?>
</td>
                <td class="listtable_1" height='16'>
                    <?php if ($this->_tpl_vars['permission_editgroup']): ?>
                        <a href="index.php?p=admin&c=groups&o=edit&type=web&id=<?php echo $this->_tpl_vars['group']['gid']; ?>
">Edit</a>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['permission_deletegroup']): ?>
                        - <a href="#" onclick="RemoveGroup(<?php echo $this->_tpl_vars['group']['gid']; ?>
, '<?php echo $this->_tpl_vars['group']['name']; ?>
', 'web');">Delete</a>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td colspan="7" align="center">
                    <div class="opener">
                        <table width="80%" cellspacing="0" cellpadding="0" class="listtable">
                            <tr>
                                <td height="16" align="left" class="listtable_top" colspan="3">
                                    <b>Group Details</b>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Permissions</td>
                                <td height="16" class="listtable_1">
                                    <span style='font-size:10px;color:#1b75d1;'>Web Permissions</span>
                                    <br/>
                                    <?php if ($this->_tpl_vars['group']['permissions']): ?>
                                        <?php $_from = $this->_tpl_vars['group']['permissions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['permission']):
?>
                                            &bull; <?php echo $this->_tpl_vars['permission']; ?>
 <br/>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php else: ?>
                                        <i>None</i>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Members</td>
                                <td height="16" class="listtable_1">
                                    <table width="100%" cellspacing="0" cellpadding="0" class="listtable">
                                        <?php $_from = $this->_tpl_vars['web_admins_list'][($this->_foreach['web_group']['iteration']-1)]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['web_admin']):
?>
                                            <tr>
                                                <td width="60%" height="16" class="listtable_1"><?php echo $this->_tpl_vars['web_admin']['user']; ?>
</td>
                                                <?php if ($this->_tpl_vars['permission_editadmin']): ?>
                                                    <td width="20%" height="16" class="listtable_1"><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $this->_tpl_vars['web_admin']['aid']; ?>
" title="Edit Groups">Edit</a></td>
                                                    <td width="20%" height="16" class="listtable_1"><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $this->_tpl_vars['web_admin']['aid']; ?>
&wg=" title="Remove From Group">Remove</a></td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <br /><br />

    <!-- Server Admin Groups -->
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4">
                <table width="100%" cellpadding="0" cellspacing="0" class="front-module-header" class="listtable">
                    <tr>
                        <td align="left">Server Admin Groups</td>
                        <td align="right">Total: <?php echo $this->_tpl_vars['server_admin_group_count']; ?>
</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="40%" height='16' class="listtable_top"><strong>Group Name</strong></td>
            <td width="25%" height='16' class="listtable_top"><strong>Admins in group</strong></td>
            <td width="30%" height='16' class="listtable_top"><strong>Action</strong></td>
        </tr>
        <?php $_from = ($this->_tpl_vars['server_group_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['server_admin_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['server_admin_group']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group']):
        $this->_foreach['server_admin_group']['iteration']++;
?>
            <tr id="gid_<?php echo $this->_tpl_vars['group']['id']; ?>
" class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.setProperty('class', 'tbl_hover')">
                <td class="listtable_1" height='16'><?php echo $this->_tpl_vars['group']['name']; ?>
</td>
                <td class="listtable_1" height='16'><?php echo $this->_tpl_vars['server_admins'][($this->_foreach['server_admin_group']['iteration']-1)]; ?>
</td>
                <td class="listtable_1" height='16'>
                    <?php if ($this->_tpl_vars['permission_editgroup']): ?>
                        <a href="index.php?p=admin&c=groups&o=edit&type=srv&id=<?php echo $this->_tpl_vars['group']['id']; ?>
">Edit</a>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['permission_deletegroup']): ?>
                        - <a href="#" onclick="RemoveGroup(<?php echo $this->_tpl_vars['group']['id']; ?>
, '<?php echo $this->_tpl_vars['group']['name']; ?>
', 'srv');">Delete</a>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td colspan="7" align="center">
                    <div class="opener">
                        <table width="80%" cellspacing="0" cellpadding="0" class="listtable">
                            <tr>
                                <td height="16" align="left" class="listtable_top" colspan="3">
                                    <b>Group Details</b>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Permissions</td>
                                <td height="16" class="listtable_1">
                                    <span style='font-size:10px;color:#1b75d1;'>Server Permissions</span>
                                    <br/>
                                    <?php if ($this->_tpl_vars['group']['permissions']): ?>
                                        <?php $_from = $this->_tpl_vars['group']['permissions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['permission']):
?>
                                            &bull; <?php echo $this->_tpl_vars['permission']; ?>
 <br/>
                                        <?php endforeach; endif; unset($_from); ?>
                                    <?php else: ?>-
                                        <i>None</i>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Members</td>
                                <td height="16" class="listtable_1">
                                    <table width="100%" cellspacing="0" cellpadding="0" class="listtable">
                                        <?php $_from = $this->_tpl_vars['server_admins_list'][($this->_foreach['server_admin_group']['iteration']-1)]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server_admin']):
?>
                                            <tr>
                                                <td width="60%" height="16" class="listtable_1"><?php echo $this->_tpl_vars['server_admin']['user']; ?>
</td>
                                                <?php if ($this->_tpl_vars['permission_editadmin']): ?>
                                                    <td width="20%" height="16" class="listtable_1"><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $this->_tpl_vars['server_admin']['aid']; ?>
" title="Edit Groups">Edit</a></td>
                                                    <td width="20%" height="16" class="listtable_1"><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $this->_tpl_vars['server_admin']['aid']; ?>
&sg=" title="Remove From Group">Remove</a></td>
                                                <?php endif; ?>
                                            </tr>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </table>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Overrides</td>
                                <td height="16" class="listtable_1">
                                    <table width="100%" cellspacing="0" cellpadding="0" class="listtable">
                                        <tr>
                                            <td class="listtable_top">Type</td>
                                            <td class="listtable_top">Name</td>
                                            <td class="listtable_top">Access</td>
                                        </tr>
                                        <?php $_from = $this->_tpl_vars['server_overrides_list'][($this->_foreach['server_admin_group']['iteration']-1)]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['override']):
?>
                                            <tr>
                                                <td width="60%" height="16" class="listtable_1"><?php echo $this->_tpl_vars['override']['type']; ?>
</td>
                                                <td width="60%" height="16" class="listtable_1"><?php echo ((is_array($_tmp=$this->_tpl_vars['override']['name'])) ? $this->_run_mod_handler('htmlspecialchars', true, $_tmp) : htmlspecialchars($_tmp)); ?>
</td>
                                                <td width="60%" height="16" class="listtable_1"><?php echo $this->_tpl_vars['override']['access']; ?>
</td>
                                            </tr>
                                        <?php endforeach; endif; unset($_from); ?>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <br /><br />


    <!-- Server Groups -->
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4">
                <table width="100%" cellpadding="0" cellspacing="0" class="front-module-header">
                    <tr>
                        <td align="left">Server Groups</td>
                        <td align="right">Total: <?php echo $this->_tpl_vars['server_group_count']; ?>
</td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="37%" height='16' class="listtable_top"><strong>Group Name</strong></td>
            <td width="25%" height='16' class="listtable_top"><strong>Servers in group</strong></td>
            <td width="30%" height='16' class="listtable_top"><strong>Action</strong></td>
        </tr>
        <?php $_from = ($this->_tpl_vars['server_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['server_group'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['server_group']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['group']):
        $this->_foreach['server_group']['iteration']++;
?>
            <tr id="gid_<?php echo $this->_tpl_vars['group']['gid']; ?>
" class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.setProperty('class', 'tbl_hover')">
                <td class="listtable_1" height='16'><?php echo $this->_tpl_vars['group']['name']; ?>
</td>
                <td class="listtable_1" height='16'><?php echo $this->_tpl_vars['server_counts'][($this->_foreach['server_group']['iteration']-1)]; ?>
</td>
                <td class="listtable_1" height='16'>
                    <?php if ($this->_tpl_vars['permission_editgroup']): ?>
                        <a href="index.php?p=admin&c=groups&o=edit&type=server&id=<?php echo $this->_tpl_vars['group']['gid']; ?>
">Edit</a>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['permission_deletegroup']): ?>
                        - <a href="#" onclick="RemoveGroup(<?php echo $this->_tpl_vars['group']['gid']; ?>
, '<?php echo $this->_tpl_vars['group']['name']; ?>
', 'server');">Delete</a>
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <td colspan="7" align="center">
                    <div class="opener">
                        <table width="80%" cellspacing="0" cellpadding="0" class="listtable">
                            <tr>
                                <td height="16" align="left" class="listtable_top" colspan="3"><b>Servers in this group</b></td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Server Names</td>
                                <td height="16" class="listtable_1" id="servers_<?php echo $this->_tpl_vars['group']['gid']; ?>
">
                                    Please Wait!
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
<?php endif; ?>