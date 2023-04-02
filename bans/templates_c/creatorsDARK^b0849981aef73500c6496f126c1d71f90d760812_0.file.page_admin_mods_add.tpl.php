<?php
/* Smarty version 4.3.1, created on 2023-04-01 09:06:22
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_mods_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f40e8ac992_40088831',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0849981aef73500c6496f126c1d71f90d760812' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_mods_add.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f40e8ac992_40088831 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['permission_add']->value) {?>
    Access Denied!
<?php } else { ?>
    <div id="add-group1">
        <h3>Add Mod</h3>
        For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
        <table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Mod Name",'message'=>"Type the name of the mod you are adding."),$_smarty_tpl ) );?>
Mod Name
                    </div>
                </td>
                <td>
                    <div align="left">
                        <input type="hidden" id="fromsub" value="" />
                        <input type="text" TABINDEX=1 class="textbox" id="name" name="name" />
                    </div>
                    <div id="name.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Folder Name",'message'=>"Type the name of this mods folder. For example, Counter-Strike: Source's mod folder is 'cstrike'"),$_smarty_tpl ) );?>
Mod Folder
                    </div>
                </td>
                <td>
                    <div align="left">
                        <input type="text" TABINDEX=2 class="textbox" id="folder" name="folder" />
                    </div>
                    <div id="folder.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Steam Universe Number",'message'=>"(STEAM_<b>X</b>:Y:Z) Some games display the steamid differently than others. Type the first number in the SteamID (<b>X</b>) depending on how it's rendered by this mod. (Default: 0)."),$_smarty_tpl ) );?>
Steam Universe Number</div></td>
                <td>
                    <div align="left">
                        <input type="text" TABINDEX=3 class="textbox" id="steam_universe" name="steam_universe" value="0" />
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Mod Enabled",'message'=>"Select if this mod is enabled and assignable to bans and servers."),$_smarty_tpl ) );?>
Enabled</div></td>
                <td>
                    <div align="left">
                        <input type="checkbox" TABINDEX=4 id="enabled" name="enabled" value="1" checked="checked" />
                    </div>
                </td>
            </tr>
            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Upload Icon",'message'=>"Click here to upload an icon to associate with this mod."),$_smarty_tpl ) );?>
Upload Icon
                    </div>
                </td>
                <td>
                    <div align="left">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Upload Mod Icon",'onclick'=>"childWindow=open('pages/admin.uploadicon.php','upload','resizable=yes,width=300,height=130');",'class'=>"save",'id'=>"upload"),$_smarty_tpl ) );?>

                    </div>
                    <div id="icon.msg" style="color:#CC0000;"></div>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Add Mod",'onclick'=>"ProcessMod();",'class'=>"ok",'id'=>"amod"),$_smarty_tpl ) );?>
&nbsp;
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"aback"),$_smarty_tpl ) );?>

                </td>
            </tr>
        </table>
    </div>
<?php }
}
}
