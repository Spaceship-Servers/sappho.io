<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:20
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_settings_features.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e72824ee49_81701315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42667124d2b41dd8262c2a12fde325297f352207' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_settings_features.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e72824ee49_81701315 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <input type="hidden" name="settingsGroup" value="features" />
    <table width="99%" border="0" style="border-collapse:collapse;" id="group.features" cellpadding="3">
        <tr>
            <td valign="top" colspan="2"><h3>Ban Features</h3>For more information or help regarding a certain subject move your mouse over the question mark.<br /><br /></td>
        </tr>
        <tr>
            <td valign="top" width="35%"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Public Bans",'message'=>"Check this box to enable the entire ban list to be publically downloaded and shared."),$_smarty_tpl ) );?>
Make Export Bans Public</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" name="export_public" id="export_public" />
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable KickIt",'message'=>"Check this box to kick a player when a ban is posted."),$_smarty_tpl ) );?>
Enable KickIt</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" name="enable_kickit" id="enable_kickit" />
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Group Banning",'message'=>"Check this box, if you want to enable banning of whole steam community groups."),$_smarty_tpl ) );?>
Enable Group Banning</div></td>
            <td>
                <div align="left">
                    <?php if ($_smarty_tpl->tpl_vars['steamapi']->value) {?>
                        <input type="checkbox" name="enable_groupbanning" id="enable_groupbanning" />
                    <?php } else { ?>
                        <input type="checkbox" name="enable_groupbanning" id="enable_groupbanning" disabled />
                        <br/>You haven't set a valid steamapi key in the config
                    <?php }?>
                </div>
                <div id="enable_groupbanning.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Friend Banning",'message'=>"Check this box, if you want to enable banning all steam community friends of a player."),$_smarty_tpl ) );?>
Enable Friends Banning</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" name="enable_friendsbanning" id="enable_friendsbanning" />
                </div>
                <div id="enable_friendsbanning.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Admin Rehashing",'message'=>"Check this box, if you want to enable the admin rehashing everytime an admin/group has been changed."),$_smarty_tpl ) );?>
Enable Admin Rehashing</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" name="enable_adminrehashing" id="enable_adminrehashing" />
                </div>
                <div id="enable_adminrehashing.msg" class="badentry"></div>
            </td>
        </tr>


        <!-- added for steam login option mod -->

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Normal Login",'message'=>"Check this box, if you want to enable the Normal login option on the login form."),$_smarty_tpl ) );?>
Enable Normal Login</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" name="enable_steamlogin" id="enable_steamlogin" />
                </div>
                <div id="enable_steamlogin.msg" class="badentry"></div>
            </td>
        </tr>

        <!-- end steam login option mod -->


        <!-- public comments -->

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Public Comments",'message'=>"Check this box, if you want to make admin comments on bans viewable by everyone."),$_smarty_tpl ) );?>
Enable Public Comments</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" name="enable_publiccomments" id="enable_publiccomments" />
                </div>
                <div id="enable_publiccomments.msg" class="badentry"></div>
            </td>
        </tr>

        <!-- end public comments -->


        <tr>
            <td colspan="2" align="center">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Save Changes",'class'=>"ok",'id'=>"fsettings",'submit'=>true),$_smarty_tpl ) );?>

                &nbsp;
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'class'=>"cancel",'id'=>"fback"),$_smarty_tpl ) );?>

            </td>
        </tr>
    </table>
</form>
<?php }
}
