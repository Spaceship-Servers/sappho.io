<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:52:20
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_servers_adminlist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f0c4252a68_59770071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e42b72c8f20582b7290defb6d0f0f68df62b99f' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_servers_adminlist.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f0c4252a68_59770071 (Smarty_Internal_Template $_smarty_tpl) {
?><h3>Admins on this server (<?php echo $_smarty_tpl->tpl_vars['admin_count']->value;?>
)</h3>
<table width="100%" cellpadding="1" cellspacing="1" class="listtable">
    <tr >
        <td width="50%" height='16' class="listtable_top"><strong>Admin Name</strong></td>
        <td width="50%" height='16' class="listtable_top"><strong>Admin SteamID</strong></td>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_list']->value, 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
        <?php if ($_smarty_tpl->tpl_vars['admin']->value['user']) {?>
            <tr class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
                <td class="listtable_1<?php if ($_smarty_tpl->tpl_vars['admin']->value['ingame']) {?>_unbanned<?php }?>" style="border-bottom: solid 1px #ccc" height="16"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['admin']->value['user'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td class="listtable_1<?php if ($_smarty_tpl->tpl_vars['admin']->value['ingame']) {?>_unbanned<?php }?>" style="border-bottom: solid 1px #ccc" height="16"><?php echo $_smarty_tpl->tpl_vars['admin']->value['authid'];?>
</td>
            </tr>
            <tr align="left">
                <td colspan="7" align="center">
                    <div class="opener">
                        <?php if ($_smarty_tpl->tpl_vars['admin']->value['ingame']) {?>
                            <table width="80%" cellspacing="0" cellpadding="0" class="listtable">
                                <tr>
                                    <td height="16" align="left" class="listtable_top" colspan="5">
                                        <b>Admin Details Ingame</b>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="30%" height="16" class="listtable_1">Name</td>
                                    <td width="20%" height="16" class="listtable_1">Steam ID</td>
                                    <td width="20%" height="16" class="listtable_1">IP</td>
                                </tr>
                                <tr align="left">
                                    <td height="16" class="listtable_1">
                                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['admin']->value['iname'], ENT_QUOTES, 'UTF-8', true);?>

                                    </td>
                                    <td height="16" class="listtable_1">
                                        <?php echo $_smarty_tpl->tpl_vars['admin']->value['authid'];?>

                                    </td>
                                    <td height="16" class="listtable_1">
                                        <?php echo $_smarty_tpl->tpl_vars['admin']->value['iip'];?>

                                    </td>
                                </tr>
                            </table>
                        <?php }?>
                    </div>
                </td>
            </tr>
        <?php }?>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php echo '<script'; ?>
>InitAccordion('tr.opener', 'div.opener', 'mainwrapper');<?php echo '</script'; ?>
>
<?php }
}
