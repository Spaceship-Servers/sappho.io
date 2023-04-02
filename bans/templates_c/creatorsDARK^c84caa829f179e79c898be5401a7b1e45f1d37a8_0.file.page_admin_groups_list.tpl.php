<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:53:35
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_groups_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f10f81dab6_78302882',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c84caa829f179e79c898be5401a7b1e45f1d37a8' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_groups_list.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f10f81dab6_78302882 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['permission_listgroups']->value) {?>
    Access Denied!
<?php } else { ?>
    <h3>Groups</h3>
    Click on a group to view its permissions. <br /><br />

    <!-- Web Admin Groups -->
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4">
                <table width="100%" cellpadding="0" cellspacing="0" class="front-module-header" class="listtable">
                    <tr>
                        <td align="left">Web Admin Groups</td>
                        <td align="right">Total: <?php echo $_smarty_tpl->tpl_vars['web_group_count']->value;?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['web_group_list']->value, 'group', false, NULL, 'web_group', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_web_group']->value['index']++;
?>
            <tr id="gid_<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
" class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
                <td class="listtable_1" height='16'><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</td>
                <td class="listtable_1" height='16'><?php echo $_smarty_tpl->tpl_vars['web_admins']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_web_group']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_web_group']->value['index'] : null)];?>
</td>
                <td class="listtable_1" height='16'>
                    <?php if ($_smarty_tpl->tpl_vars['permission_editgroup']->value) {?>
                        <a href="index.php?p=admin&c=groups&o=edit&type=web&id=<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
">Edit</a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['permission_deletegroup']->value) {?>
                        - <a href="#" onclick="RemoveGroup(<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
, '<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
', 'web');">Delete</a>
                    <?php }?>
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
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value['permissions']) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['permissions'], 'permission');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>
                                            &bull; <?php echo $_smarty_tpl->tpl_vars['permission']->value;?>
 <br/>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>
                                        <i>None</i>
                                    <?php }?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Members</td>
                                <td height="16" class="listtable_1">
                                    <table width="100%" cellspacing="0" cellpadding="0" class="listtable">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['web_admins_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_web_group']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_web_group']->value['index'] : null)], 'web_admin');
$_smarty_tpl->tpl_vars['web_admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['web_admin']->value) {
$_smarty_tpl->tpl_vars['web_admin']->do_else = false;
?>
                                            <tr>
                                                <td width="60%" height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['web_admin']->value['user'];?>
</td>
                                                <?php if ($_smarty_tpl->tpl_vars['permission_editadmin']->value) {?>
                                                    <td width="20%" height="16" class="listtable_1"><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $_smarty_tpl->tpl_vars['web_admin']->value['aid'];?>
" title="Edit Groups">Edit</a></td>
                                                    <td width="20%" height="16" class="listtable_1"><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $_smarty_tpl->tpl_vars['web_admin']->value['aid'];?>
&wg=" title="Remove From Group">Remove</a></td>
                                                <?php }?>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <br /><br />

    <!-- Server Admin Groups -->
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4">
                <table width="100%" cellpadding="0" cellspacing="0" class="front-module-header" class="listtable">
                    <tr>
                        <td align="left">Server Admin Groups</td>
                        <td align="right">Total: <?php echo $_smarty_tpl->tpl_vars['server_admin_group_count']->value;?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_group_list']->value, 'group', false, NULL, 'server_admin_group', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_server_admin_group']->value['index']++;
?>
            <tr id="gid_<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
" class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.setProperty('class', 'tbl_hover')">
                <td class="listtable_1" height='16'><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</td>
                <td class="listtable_1" height='16'><?php echo $_smarty_tpl->tpl_vars['server_admins']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_server_admin_group']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_server_admin_group']->value['index'] : null)];?>
</td>
                <td class="listtable_1" height='16'>
                    <?php if ($_smarty_tpl->tpl_vars['permission_editgroup']->value) {?>
                        <a href="index.php?p=admin&c=groups&o=edit&type=srv&id=<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
">Edit</a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['permission_deletegroup']->value) {?>
                        - <a href="#" onclick="RemoveGroup(<?php echo $_smarty_tpl->tpl_vars['group']->value['id'];?>
, '<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
', 'srv');">Delete</a>
                    <?php }?>
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
                                    <?php if ($_smarty_tpl->tpl_vars['group']->value['permissions']) {?>
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['group']->value['permissions'], 'permission');
$_smarty_tpl->tpl_vars['permission']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['permission']->value) {
$_smarty_tpl->tpl_vars['permission']->do_else = false;
?>
                                            &bull; <?php echo $_smarty_tpl->tpl_vars['permission']->value;?>
 <br/>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    <?php } else { ?>-
                                        <i>None</i>
                                    <?php }?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Members</td>
                                <td height="16" class="listtable_1">
                                    <table width="100%" cellspacing="0" cellpadding="0" class="listtable">
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_admins_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_server_admin_group']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_server_admin_group']->value['index'] : null)], 'server_admin');
$_smarty_tpl->tpl_vars['server_admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server_admin']->value) {
$_smarty_tpl->tpl_vars['server_admin']->do_else = false;
?>
                                            <tr>
                                                <td width="60%" height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['server_admin']->value['user'];?>
</td>
                                                <?php if ($_smarty_tpl->tpl_vars['permission_editadmin']->value) {?>
                                                    <td width="20%" height="16" class="listtable_1"><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $_smarty_tpl->tpl_vars['server_admin']->value['aid'];?>
" title="Edit Groups">Edit</a></td>
                                                    <td width="20%" height="16" class="listtable_1"><a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $_smarty_tpl->tpl_vars['server_admin']->value['aid'];?>
&sg=" title="Remove From Group">Remove</a></td>
                                                <?php }?>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_overrides_list']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_server_admin_group']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_server_admin_group']->value['index'] : null)], 'override');
$_smarty_tpl->tpl_vars['override']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['override']->value) {
$_smarty_tpl->tpl_vars['override']->do_else = false;
?>
                                            <tr>
                                                <td width="60%" height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['override']->value['type'];?>
</td>
                                                <td width="60%" height="16" class="listtable_1"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['override']->value['name']);?>
</td>
                                                <td width="60%" height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['override']->value['access'];?>
</td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
    <br /><br />


    <!-- Server Groups -->
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td colspan="4">
                <table width="100%" cellpadding="0" cellspacing="0" class="front-module-header">
                    <tr>
                        <td align="left">Server Groups</td>
                        <td align="right">Total: <?php echo $_smarty_tpl->tpl_vars['server_group_count']->value;?>
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_list']->value, 'group', false, NULL, 'server_group', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['group']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_server_group']->value['index']++;
?>
            <tr id="gid_<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
" class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.setProperty('class', 'tbl_hover')">
                <td class="listtable_1" height='16'><?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
</td>
                <td class="listtable_1" height='16'><?php echo $_smarty_tpl->tpl_vars['server_counts']->value[(isset($_smarty_tpl->tpl_vars['__smarty_foreach_server_group']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_server_group']->value['index'] : null)];?>
</td>
                <td class="listtable_1" height='16'>
                    <?php if ($_smarty_tpl->tpl_vars['permission_editgroup']->value) {?>
                        <a href="index.php?p=admin&c=groups&o=edit&type=server&id=<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
">Edit</a>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['permission_deletegroup']->value) {?>
                        - <a href="#" onclick="RemoveGroup(<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
, '<?php echo $_smarty_tpl->tpl_vars['group']->value['name'];?>
', 'server');">Delete</a>
                    <?php }?>
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
                                <td height="16" class="listtable_1" id="servers_<?php echo $_smarty_tpl->tpl_vars['group']->value['gid'];?>
">
                                    Please Wait!
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php }
}
}
