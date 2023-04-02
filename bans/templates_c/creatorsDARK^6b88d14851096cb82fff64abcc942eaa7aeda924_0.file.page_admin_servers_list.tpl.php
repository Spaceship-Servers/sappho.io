<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:52:02
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_servers_list.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f0b2567392_73824317',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b88d14851096cb82fff64abcc942eaa7aeda924' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_servers_list.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f0b2567392_73824317 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="admin-page-content">
    <div class="tabcontent" id="List servers">
        <?php if (!$_smarty_tpl->tpl_vars['permission_list']->value) {?>
            Access Denied
        <?php } else { ?>
            <h3>Servers (<span id="srvcount"><?php echo $_smarty_tpl->tpl_vars['server_count']->value;?>
</span>)</h3>

            <table width="100%" cellpadding="1">
                <tr>
                    <td class="front-module-header" width="3%" height='16'><strong>ID</strong></td>
                    <td class="front-module-header" width="54%" height='16'><strong>Hostname</strong></td>
                    <td class="front-module-header" width="6%" height='16'><strong>Players</strong></td>
                    <td class="front-module-header" width="5%" height='16'><strong>Mod</strong></td>
                    <td class="front-module-header" height='16'><strong>Action</strong></td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_list']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
                    <?php echo '<script'; ?>
>xajax_ServerHostPlayers(<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
);<?php echo '</script'; ?>
>
                    <tr id="sid_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" <?php if ($_smarty_tpl->tpl_vars['server']->value['enabled'] == 0) {?>style="background-color:#eaeaea" title="Disabled"<?php }?>>
                        <td style="border-bottom: solid 1px #ccc" height='16'><?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
</td>
                        <td style="border-bottom: solid 1px #ccc" height='16' id="host_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
"><i>Querying Server Data...</i></td>
                        <td style="border-bottom: solid 1px #ccc" height='16' id="players_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">N/A</td>
                        <td style="border-bottom: solid 1px #ccc" height='16'><img width="16px" height="16px" src="images/games/<?php echo $_smarty_tpl->tpl_vars['server']->value['icon'];?>
"></td>
                        <td style="border-bottom: solid 1px #ccc" height='16'>
                            <?php if ($_smarty_tpl->tpl_vars['server']->value['rcon_access']) {?>
                                <a href="index.php?p=admin&c=servers&o=rcon&id=<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">RCON</a> -
                            <?php }?>

                            <a href="index.php?p=admin&c=servers&o=admincheck&id=<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">Admins</a>

                            <?php if ($_smarty_tpl->tpl_vars['permission_editserver']->value) {?>
                                - <a href="index.php?p=admin&c=servers&o=edit&id=<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">Edit</a>
                            <?php }?>

                            <?php if ($_smarty_tpl->tpl_vars['pemission_delserver']->value) {?>
                                - <a href="#" onclick="RemoveServer(<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
, '<?php echo $_smarty_tpl->tpl_vars['server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['server']->value['port'];?>
');">Delete</a>
                            <?php }?>
                        </td>
                    </tr>

                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>
            <?php if ($_smarty_tpl->tpl_vars['permission_addserver']->value) {?>
                <br />
                <div class="rowdesc">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Upload Map Image",'message'=>"Click here to upload a screenshot of a map. Use the mapname as filename."),$_smarty_tpl ) );?>
Upload Map Image
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Upload Map Image",'onclick'=>"childWindow=open('pages/admin.uploadmapimg.php','upload','resizable=yes,width=300,height=130');",'class'=>"save",'id'=>"upload"),$_smarty_tpl ) );?>

                </div>
                <div id="mapimg.msg" style="color:#CC0000;"></div>
            <?php }?>
        <?php }?>
    </div>
<?php }
}
