<?php
/* Smarty version 4.3.1, created on 2023-04-01 09:06:22
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_mods_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f40e8a6ee7_18554254',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ec096bfa1747653058e4f78a02cecbb93b82a81' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_mods_list.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f40e8a6ee7_18554254 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['permission_listmods']->value) {?>
    Access Denied!
<?php } else { ?>
    <h3>Server Mods (<?php echo $_smarty_tpl->tpl_vars['mod_count']->value;?>
)</h3>
    <table width="100%" cellspacing="0" cellpadding="0" align="center" class="listtable">
        <tr>
            <td width="50%" height='16' class="listtable_top"><strong>Name</strong></td>
            <td width="25%" height='16' class="listtable_top"><strong>Mod Folder</strong></td>
            <td width="10%" height='16' class="listtable_top"><strong>Mod icon</strong></td>
            <td width="2%" height='16' class="listtable_top"><strong><span title="SteamID Universe (X of STEAM_X:Y:Z)">SU</span></strong></td>
            <?php if ($_smarty_tpl->tpl_vars['permission_editmods']->value || $_smarty_tpl->tpl_vars['permission_deletemods']->value) {?>
                <td height='16' class="listtable_top"><strong>Action</strong></td>
            <?php }?>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['mod_list']->value, 'mod', false, NULL, 'gaben', array (
));
$_smarty_tpl->tpl_vars['mod']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['mod']->value) {
$_smarty_tpl->tpl_vars['mod']->do_else = false;
?>
            <tr id="mid_<?php echo $_smarty_tpl->tpl_vars['mod']->value['mid'];?>
">
                <td class="listtable_1" height='16'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value['name']);?>
</td>
                <td class="listtable_1" height='16'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value['modfolder']);?>
</td>
                <td class="listtable_1" height='16'><img src="images/games/<?php echo $_smarty_tpl->tpl_vars['mod']->value['icon'];?>
" width="16"></td>
                <td class="listtable_1" height='16'><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['mod']->value['steam_universe']);?>
</td>
                <?php if ($_smarty_tpl->tpl_vars['permission_editmods']->value || $_smarty_tpl->tpl_vars['permission_deletemods']->value) {?>
                    <td class="listtable_1" height='16'>
                        <?php if ($_smarty_tpl->tpl_vars['permission_editmods']->value) {?>
                            <a href="index.php?p=admin&c=mods&o=edit&id=<?php echo $_smarty_tpl->tpl_vars['mod']->value['mid'];?>
">Edit</a> -
                        <?php }?>
                        <?php if ($_smarty_tpl->tpl_vars['permission_deletemods']->value) {?>
                            <a href="#" onclick="RemoveMod('<?php echo htmlspecialchars(preg_replace("%(?<!\\\\)'%", "\'", (string)$_smarty_tpl->tpl_vars['mod']->value['name']));?>
', '<?php echo $_smarty_tpl->tpl_vars['mod']->value['mid'];?>
');">Delete</a>
                        <?php }?>
                    </td>
                <?php }?>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php }
}
}
