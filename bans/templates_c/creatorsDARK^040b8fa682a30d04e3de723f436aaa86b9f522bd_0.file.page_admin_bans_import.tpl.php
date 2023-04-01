<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:18
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_import.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e726965b34_47496044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040b8fa682a30d04e3de723f436aaa86b9f522bd' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_import.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e726965b34_47496044 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['permission_import']->value) {?>
    Access Denied!
<?php } else { ?>
    <h3>Import Bans</h3>
    For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="importBans" />
        <table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
            <tr>
                <td valign="top" width="25%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"File",'message'=>"Select the banned_users.cfg or banned_ip.cfg file to upload and add bans."),$_smarty_tpl ) );?>
File
                    </div>
                </td>
                <td>
                    <div align="left">
                        <input type="file" TABINDEX=1 class="file" id="importFile" name="importFile" />
                    </div>
                    <div id="file.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Get Names",'message'=>"Check this box, if you want to get the names of the players from their steam community profile. (just works with banned_users.cfg)"),$_smarty_tpl ) );?>
Get Names</div></td>
                <td>
                    <div align="left">
                        <input type="checkbox" name="friendsname" id="friendsname" />
                    </div>
                    <div id="friendsname.msg" class="badentry"></div>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Import",'class'=>"ok",'id'=>"iban",'submit'=>true),$_smarty_tpl ) );?>

                    &nbsp;
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"iback"),$_smarty_tpl ) );?>

                </td>
            </tr>
        </table>
    </form>
    <?php if (!$_smarty_tpl->tpl_vars['extreq']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript">
            $('friendsname').disabled = true;
        <?php echo '</script'; ?>
>
    <?php }
}
}
}
