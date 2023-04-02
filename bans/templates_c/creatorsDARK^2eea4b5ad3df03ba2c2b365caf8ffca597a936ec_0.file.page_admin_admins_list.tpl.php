<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:52:25
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_admins_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f0c98ea9b6_15189425',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2eea4b5ad3df03ba2c2b365caf8ffca597a936ec' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_admins_list.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f0c98ea9b6_15189425 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="admin-page-content">
    <div class="tabcontent" id="List admins">
        <?php if (!$_smarty_tpl->tpl_vars['permission_listadmin']->value) {?>
            Access Denied
        <?php } else { ?>
            <h3>Admins (<span id="admincount"><?php echo $_smarty_tpl->tpl_vars['admin_count']->value;?>
</span>)</h3>
            Click on an admin to see more detailed information and actions to perform on them.<br /><br />

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_template'][0], array( array('file'=>"admin.admins.search"),$_smarty_tpl ) );?>


            <div id="banlist-nav">
                <?php echo $_smarty_tpl->tpl_vars['admin_nav']->value;?>

            </div>
            <div id="banlist">
                <table width="99%" cellspacing="0" cellpadding="0" align="center">
                    <tr>
                        <td width="34%" class="listtable_top"><b>Name</b></td>
                        <td width="33%" class="listtable_top"><b>Server Admin Group </b></td>
                        <td width="33%" class="listtable_top"><b>Web Admin Group</b></td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admins']->value, 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
                        <tr onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'" class="tbl_out opener">
                            <td class="listtable_1" style="padding:3px;"><?php echo $_smarty_tpl->tpl_vars['admin']->value['user'];?>
 (<a href="./index.php?p=banlist&advSearch=<?php echo $_smarty_tpl->tpl_vars['admin']->value['aid'];?>
&advType=admin" title="Show bans"><?php echo $_smarty_tpl->tpl_vars['admin']->value['bancount'];?>
 bans</a> | <a href="./index.php?p=banlist&advSearch=<?php echo $_smarty_tpl->tpl_vars['admin']->value['aid'];?>
&advType=nodemo" title="Show bans without demo"><?php echo $_smarty_tpl->tpl_vars['admin']->value['nodemocount'];?>
 w.d.</a>)</td>
                            <td class="listtable_1" style="padding:3px;"><?php echo $_smarty_tpl->tpl_vars['admin']->value['server_group'];?>
</td>
                            <td class="listtable_1" style="padding:3px;"><?php echo $_smarty_tpl->tpl_vars['admin']->value['web_group'];?>
</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <div class="opener" align="center" border="1">
                                    <table width="100%" cellspacing="0" cellpadding="3" bgcolor="#eaebeb">
                                        <tr>
                                            <td align="left" colspan="3" class="front-module-header">
                                                <b>Admin Details of <?php echo $_smarty_tpl->tpl_vars['admin']->value['user'];?>
</b>
                                            </td>
                                        </tr>
                                        <tr align="left">
                                            <td width="35%" class="front-module-line"><b>Server Admin Permissions</b></td>
                                            <td width="35%" class="front-module-line"><b>Web Admin Permissions</b></td>
                                            <td width="30%" valign="top" class="front-module-line"><b>Action</b></td>
                                        </tr>
                                        <tr align="left">
                                            <td valign="top">
                                                <span style='font-size:10px;color:#1b75d1;'>Server Permissions</span>
                                                <br/>
                                                <?php if ($_smarty_tpl->tpl_vars['admin']->value['server_flag_string']) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin']->value['server_flag_string'], 'permission');
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
                                            <td valign="top">
                                                <span style='font-size:10px;color:#1b75d1;'>Web Permissions</span>
                                                <br/>
                                                <?php if ($_smarty_tpl->tpl_vars['admin']->value['web_flag_string']) {?>
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin']->value['web_flag_string'], 'permission');
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
                                            <td width="30%" valign="top">
                                                <div class="ban-edit">
                                                    <ul>
                                                        <?php if ($_smarty_tpl->tpl_vars['permission_editadmin']->value) {?>
                                                            <li>
                                                                <a href="index.php?p=admin&c=admins&o=editdetails&id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['aid'];?>
"><i class="fas fa-clipboard-list fa-lg"></i> Edit Details</a>
                                                            </li>
                                                            <li>
                                                                <a href="index.php?p=admin&c=admins&o=editpermissions&id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['aid'];?>
"><i class="fas fa-subscript fa-lg"></i> Edit Permissions</a>
                                                            </li>
                                                            <li>
                                                                <a href="index.php?p=admin&c=admins&o=editservers&id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['aid'];?>
"><i class="fas fa-server fa-lg"></i> Edit Server Access</a>
                                                            </li>
                                                            <li>
                                                                <a href="index.php?p=admin&c=admins&o=editgroup&id=<?php echo $_smarty_tpl->tpl_vars['admin']->value['aid'];?>
"><i class="fas fa-users fa-lg"></i> Edit Groups</a>
                                                            </li>
                                                        <?php }?>
                                                        <?php if ($_smarty_tpl->tpl_vars['permission_deleteadmin']->value) {?>
                                                            <li>
                                                                <a href="#" onclick="RemoveAdmin(<?php echo $_smarty_tpl->tpl_vars['admin']->value['aid'];?>
, '<?php echo $_smarty_tpl->tpl_vars['admin']->value['user'];?>
');"><i class="fas fa-trash fa-lg"></i> Delete Admin</a>
                                                            </li>
                                                        <?php }?>
                                                    </ul>
                                                </div>
                                                <div class="front-module-line" style="padding:3px;">Immunity Level: <b><?php echo $_smarty_tpl->tpl_vars['admin']->value['immunity'];?>
</b></div>
                                                <div class="front-module-line" style="padding:3px;">Last Visited: <b><small><?php echo $_smarty_tpl->tpl_vars['admin']->value['lastvisit'];?>
</small></b></div>
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
            </div>
            <?php echo '<script'; ?>
 type="text/javascript">InitAccordion('tr.opener', 'div.opener', 'mainwrapper');<?php echo '</script'; ?>
>
        <?php }?>
    </div>
<?php }
}
