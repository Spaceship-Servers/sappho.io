<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:26
  from '/var/www/sappho.io/bans/themes/default/page_admin_settings_settings.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e72e3d21f0_86458294',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bd8c9fcdfda4589e544e2d92b27ef74b47ecd64b' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/default/page_admin_settings_settings.tpl',
      1 => 1678850778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e72e3d21f0_86458294 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="" method="post">
    <input type="hidden" name="settingsGroup" value="mainsettings" />
    <table width="99%" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
        <tr>
            <td valign="top" colspan="2"><h3>Main Settings</h3>For more information or help regarding a certain subject move your mouse over the question mark.<br /><br /></td>
        </tr>

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Title",'message'=>"Define the title shown in the title of your browser."),$_smarty_tpl ) );?>
Title </div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=1 class="textbox" id="template_title" name="template_title" value="<?php echo $_smarty_tpl->tpl_vars['config_title']->value;?>
" />
                </div>
            </td>
        </tr>

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Path to logo",'message'=>"Here you can define a new location for the logo, so you can use your own image."),$_smarty_tpl ) );?>
Path to logo </div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=2 class="textbox" id="template_logo" name="template_logo" value="<?php echo $_smarty_tpl->tpl_vars['config_logo']->value;?>
" />
                </div>
            </td>
        </tr>

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Min Password Length",'message'=>"Define the shortest length a password can be."),$_smarty_tpl ) );?>
Min password length </div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=3 class="textbox" id="config_password_minlength" name="config_password_minlength" value="<?php echo $_smarty_tpl->tpl_vars['config_min_password']->value;?>
" />
                </div>
                <div id="minpasslength.msg" class="badentry"></div>
            </td>
        </tr>

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Date format",'message'=>"Here you can change the date format, displayed in the banlist and other pages."),$_smarty_tpl ) );?>
Date format </div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=4 class="textbox" id="config_dateformat" name="config_dateformat" value="<?php echo $_smarty_tpl->tpl_vars['config_dateformat']->value;?>
" />
                    <a href="http://www.php.net/date" target="_blank">See: PHP date()</a>
                </div>
            </td>
        </tr>

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Auth Maxlife",'message'=>"Max lifetime for auth tokens."),$_smarty_tpl ) );?>
Auth Maxlife </div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=4 class="textbox" id="auth_maxlife" name="auth_maxlife" value="<?php echo $_smarty_tpl->tpl_vars['auth_maxlife']->value;?>
" />
                    (in minutes)
                </div>
            </td>
        </tr>

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Auth Maxlife (remember me)",'message'=>"Max lifetime for auth tokens with remember me enabled."),$_smarty_tpl ) );?>
Auth Maxlife (remember me) </div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=4 class="textbox" id="auth_maxlife_remember" name="auth_maxlife_remember" value="<?php echo $_smarty_tpl->tpl_vars['auth_maxlife_remember']->value;?>
" />
                    (in minutes)
                </div>
            </td>
        </tr>

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Auth Maxlife (steam login)",'message'=>"Max lifetime for auth tokens via steam login."),$_smarty_tpl ) );?>
Auth Maxlife (steam login) </div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=4 class="textbox" id="auth_maxlife_steam" name="auth_maxlife_steam" value="<?php echo $_smarty_tpl->tpl_vars['auth_maxlife_steam']->value;?>
" />
                    (in minutes)
                </div>
            </td>
        </tr>

        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Debugmode",'message'=>"Check this box to enable the debugmode permanently."),$_smarty_tpl ) );?>
Debugmode</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=6 name="config_debug" id="config_debug" />
                </div>
            </td>
        </tr>

        <tr>
            <td valign="top" colspan="2"><h3>Dashboard Settings</h3></td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Intro Title",'message'=>"Set the title for the dashboard introduction."),$_smarty_tpl ) );?>
Intro Title </div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=7 class="textbox" id="dash_intro_title" name="dash_intro_title" value="<?php echo $_smarty_tpl->tpl_vars['config_dash_title']->value;?>
" />
                </div>
                <div id="dash.intro.msg" class="badentry"></div></td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Intro Text",'message'=>"Set the text for the dashboard introduction."),$_smarty_tpl ) );?>
Intro Text </div></td>
            <td><div align="left">  </div></td>
        </tr>
        <tr>
            <td valign="top" colspan="2"> <textarea TABINDEX=6 cols="80" rows="20" id="dash_intro_text" name="dash_intro_text"><?php echo $_smarty_tpl->tpl_vars['config_dash_text']->value;?>
</textarea>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Disable Log Popup",'message'=>"Check this box to disable the log info popup and use direct link."),$_smarty_tpl ) );?>
Disable Log Popup</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=8 name="dash_nopopup" id="dash_nopopup" />
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top" colspan="2"><h3>Page Settings</h3></td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Protest Ban",'message'=>"Check this box to enable the protest ban page."),$_smarty_tpl ) );?>
Enable Protest Ban</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=9 name="enable_protest" id="enable_protest" />
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Submit Ban",'message'=>"Check this box to enable the submit ban page."),$_smarty_tpl ) );?>
Enable Submit Ban</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=10 name="enable_submit" id="enable_submit" />
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Enable Commslist",'message'=>"Check this box to enable the commslist page."),$_smarty_tpl ) );?>
Enable Commslist</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=10 name="enable_commslist" id="enable_commslist" />
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Only Send One Email",'message'=>"Check this box to only send the protest notification email to the admin who banned the protesting player."),$_smarty_tpl ) );?>
Only Send One Email</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=9 name="protest_emailonlyinvolved" id="protest_emailonlyinvolved" />
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Default Page",'message'=>"Choose the page that will be the first page people will see."),$_smarty_tpl ) );?>
Default Page</div></td>
            <td>
                <div align="left">
                    <select class="select" TABINDEX=11 class="inputbox" name="default_page" id="default_page">
                        <option value="0">Dashboard</option>
                        <option value="1">Ban List</option>
                        <option value="2">Servers</option>
                        <option value="3">Submit a ban</option>
                        <option value="4">Protest a ban</option>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Clear Cache",'message'=>"Click this button, to clean the cache folder."),$_smarty_tpl ) );?>
Clear Cache</div></td>
            <td>
                <div align="left">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Clear Cache",'onclick'=>"xajax_ClearCache();",'class'=>"cancel",'id'=>"clearcache",'submit'=>false),$_smarty_tpl ) );?>

                </div><div id="clearcache.msg"></div>
            </td>
        </tr>
        <tr>
            <td valign="top" colspan="2"><h3>Banlist Settings</h3></td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Items per page",'message'=>"Choose how many items to show on each page."),$_smarty_tpl ) );?>
Items Per Page </div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=12 class="textbox" id="banlist_bansperpage" name="banlist_bansperpage" value="<?php echo $_smarty_tpl->tpl_vars['config_bans_per_page']->value;?>
" />
                </div>
                <div id="bansperpage.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Hide Admin Name",'message'=>"Check this box, if you want to hide the name of the admin in the baninfo."),$_smarty_tpl ) );?>
Hide Admin Name</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=13 name="banlist_hideadmname" id="banlist_hideadmname" />
                </div>
                <div id="banlist_hideadmname.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"No Country Research",'message'=>"Check this box, if you don't want to display the country out of an IP in the banlist. Use if you encounter display problems."),$_smarty_tpl ) );?>
No Country Research</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=14 name="banlist_nocountryfetch" id="banlist_nocountryfetch" />
                </div>
                <div id="banlist_nocountryfetch.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Hide Player IP",'message'=>"Check this box, if you want to hide the player IP from the public."),$_smarty_tpl ) );?>
Hide Player IP</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=15 name="banlist_hideplayerips" id="banlist_hideplayerips" />
                </div>
                <div id="banlist_hideplayerips.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Custom Banreasons",'message'=>"Type the custom banreasons you want to appear in the dropdown menu."),$_smarty_tpl ) );?>
Custom Banreasons</div></td>
            <td>
                <div align="left">
                    <table width="100%" border="0" style="border-collapse:collapse;" id="custom.reasons" name="custom.reasons">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['bans_customreason']->value, 'creason');
$_smarty_tpl->tpl_vars['creason']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['creason']->value) {
$_smarty_tpl->tpl_vars['creason']->do_else = false;
?>
                            <tr>
                                <td><input type="text" class="textbox" name="bans_customreason[]" id="bans_customreason[]" value="<?php echo $_smarty_tpl->tpl_vars['creason']->value;?>
"/></td>
                            </tr>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        <tr>
                            <td><input type="text" class="textbox" name="bans_customreason[]" id="bans_customreason[]"/></td>
                        </tr>
                        <tr>
                            <td><input type="text" class="textbox" name="bans_customreason[]" id="bans_customreason[]"/></td>
                        </tr>
                    </table>
                    <a href="javascript:void(0)" onclick="MoreFields();" title="Add more fields">[+]</a>
                </div>
                <div id="bans_customreason.msg" class="badentry"></div>
            </td>
        </tr>

        <tr>
            <td valign="top" colspan="2"><h3>Mail Settings</h3></td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc">Host</div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=12 class="textbox" id="mail_host" name="mail_host" value="<?php echo $_smarty_tpl->tpl_vars['config_smtp']->value[0];?>
" />
                </div>
                <div id="mailhost.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc">User</div></td>
            <td>
                <div align="left">
                    <input type="text" TABINDEX=12 class="textbox" id="mail_user" name="mail_user" value="<?php echo $_smarty_tpl->tpl_vars['config_smtp']->value[1];?>
" />
                </div>
                <div id="mail_user.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc">Password</div></td>
            <td>
                <div align="left">
                    <input type="password" TABINDEX=12 class="textbox" id="mail_pass" name="mail_pass" placeholder="***" />
                </div>
                <div id="mail_pass.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc">Port</div></td>
            <td>
                <div align="left">
                    <input type="number" TABINDEX=12 class="textbox" id="mail_port" name="mail_port" value="<?php echo $_smarty_tpl->tpl_vars['config_smtp']->value[2];?>
" />
                </div>
                <div id="mail_port.msg" class="badentry"></div>
            </td>
        </tr>
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Verify peer",'message'=>"Require verification of SSL certificate used."),$_smarty_tpl ) );?>
Cert verify</div></td>
            <td>
                <div align="left">
                    <input type="checkbox" TABINDEX=12 class="textbox" id="mail_verify_peer" name="mail_verify_peer" />
                </div>
                <div id="mail_verify_peer.msg" class="badentry"></div>
            </td>
        </tr>


        <tr>
            <td valign="top" colspan="2">&nbsp;</td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Save Changes",'class'=>"ok",'id'=>"asettings",'submit'=>true),$_smarty_tpl ) );?>

                &nbsp;
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'class'=>"cancel",'id'=>"aback"),$_smarty_tpl ) );?>

            </td>
        </tr>
    </table>
</form>
<?php echo '<script'; ?>
 type="text/javascript" src="./includes/tinymce/tinymce.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 language="javascript" type="text/javascript">
        tinyMCE.init({
            selector: "textarea",
            height: 500,
            theme : "silver",
            plugins : "advlist, autolink, lists, link, image, charmap, print, preview, hr, anchor, pagebreak, searchreplace, wordcount, visualblocks, visualchars, code, fullscreen, insertdatetime, media, nonbreaking, save, table, directionality, emoticons, template, paste, textpattern, imagetools, codesample, toc",
            extended_valid_elements : "a[name|href|target|title|onclick],img[class|src|border=0|alt|title|hspace|vspace|width|height|align|onmouseover|onmouseout|name],hr[class|width|size|noshade],font[face|size|color|style],span[class|align|style]"
        });
    <?php echo '</script'; ?>
>

<?php }
}
