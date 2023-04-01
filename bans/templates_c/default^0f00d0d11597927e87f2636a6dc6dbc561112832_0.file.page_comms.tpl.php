<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:16:33
  from '/var/www/sappho.io/bans/themes/default/page_comms.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e861c7de67_11584560',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f00d0d11597927e87f2636a6dc6dbc561112832' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/default/page_comms.tpl',
      1 => 1678850778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e861c7de67_11584560 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/sappho.io/bans/includes/vendor/smarty/smarty/libs/plugins/modifier.count.php','function'=>'smarty_modifier_count',),));
if ($_smarty_tpl->tpl_vars['comment']->value) {?>
    <h3><?php echo $_smarty_tpl->tpl_vars['commenttype']->value;?>
 Comment</h3>
    <table width="90%" align="center" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
        <tr>
            <td valign="top"><div class="rowdesc"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Comment Text",'message'=>"Type the text you would like to say."),$_smarty_tpl ) );?>
Comment</div></td>
        </tr>
        <tr>
            <td><div align="left">
                    <textarea rows="10" cols="60" class="submit-fields" style="width:500px;" id="commenttext" name="commenttext" <?php if (!$_smarty_tpl->tpl_vars['canedit']->value) {?>disabled<?php }?>><?php echo $_smarty_tpl->tpl_vars['commenttext']->value;?>
</textarea>
                </div>
                <div id="commenttext.msg" class="badentry"></div></td>
        </tr>
        <tr>
            <td>
                <input type="hidden" name="bid" id="bid" value="<?php echo $_smarty_tpl->tpl_vars['comment']->value;?>
">
                <input type="hidden" name="ctype" id="ctype" value="<?php echo $_smarty_tpl->tpl_vars['ctype']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['cid']->value != '') {?>
                    <input type="hidden" name="cid" id="cid" value="<?php echo $_smarty_tpl->tpl_vars['cid']->value;?>
">
                <?php } else { ?>
                    <input type="hidden" name="cid" id="cid" value="-1">
                <?php }?>
                <input type="hidden" name="page" id="page" value="<?php echo $_smarty_tpl->tpl_vars['page']->value;?>
">
                <?php if ($_smarty_tpl->tpl_vars['canedit']->value) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>((string)$_smarty_tpl->tpl_vars['commenttype']->value)." Comment",'onclick'=>"ProcessComment();",'class'=>"ok",'id'=>"acom",'submit'=>false),$_smarty_tpl ) );?>
&nbsp;
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"aback"),$_smarty_tpl ) );?>

                <?php }?>
            </td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['othercomments']->value, 'com');
$_smarty_tpl->tpl_vars['com']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['com']->value) {
$_smarty_tpl->tpl_vars['com']->do_else = false;
?>
            <tr>
                <td colspan='3'>
                    <hr>
                </td>
            </tr>
            <tr>
                <td>
                    <b><?php echo $_smarty_tpl->tpl_vars['com']->value['comname'];?>
</b></td><td align=\"right\"><b><?php echo $_smarty_tpl->tpl_vars['com']->value['added'];?>
</b>
                </td>
            </tr>
            <tr>
                <td colspan='2'>
                    <?php echo $_smarty_tpl->tpl_vars['com']->value['commenttxt'];?>

                </td>
            </tr>
            <?php if ($_smarty_tpl->tpl_vars['com']->value['editname'] != '') {?>
                <tr>
                    <td colspan='3'>
                        <span style='font-size:6pt;color:grey;'>last edit <?php echo $_smarty_tpl->tpl_vars['com']->value['edittime'];?>
 by <?php echo $_smarty_tpl->tpl_vars['com']->value['editname'];?>
</span>
                    </td>
                </tr>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
<?php } else { ?>
    <h3 align="left">Communications Blocklist Overview - <i>Total Blocks: <?php echo $_smarty_tpl->tpl_vars['total_bans']->value;?>
</i></h3>
    <br />
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_template'][0], array( array('file'=>'admin.comms.search'),$_smarty_tpl ) );?>

    <br />
    <div id="banlist-nav">
        <?php echo $_smarty_tpl->tpl_vars['ban_nav']->value;?>

    </div>
    <a href="index.php?p=commslist&hideinactive=<?php if ($_smarty_tpl->tpl_vars['hidetext']->value == 'Hide') {?>true<?php } else { ?>false<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['searchlink']->value);?>
" title="<?php echo $_smarty_tpl->tpl_vars['hidetext']->value;?>
 inactive"><?php echo $_smarty_tpl->tpl_vars['hidetext']->value;?>
 inactive</a>
    <div id="banlist">
        <table width="100%" cellspacing="0" cellpadding="0" align="center" class="listtable">
            <tr>
                <td width="8%" height="16" class="listtable_top" align="center"><b>MOD/Type</b></td>
                <td width="14%" height="16" class="listtable_top" align="center"><b>Date</b></td>
                <td height="16" class="listtable_top"><b>Player</b></td>
                <?php if (!$_smarty_tpl->tpl_vars['hideadminname']->value) {?>
                    <td width="12%" height="16" class="listtable_top"><b>Admin</b></td>
                <?php }?>
                <td width="16%" height="16" class="listtable_top" align="center"><b>Length</b></td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ban_list']->value, 'ban', false, NULL, 'banlist', array (
));
$_smarty_tpl->tpl_vars['ban']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['ban']->value) {
$_smarty_tpl->tpl_vars['ban']->do_else = false;
?>
                <tr class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'"
                        <?php if ($_smarty_tpl->tpl_vars['ban']->value['server_id'] != 0) {?>
                            onclick="xajax_ServerHostPlayers(<?php echo $_smarty_tpl->tpl_vars['ban']->value['server_id'];?>
, 'id', 'host_<?php echo $_smarty_tpl->tpl_vars['ban']->value['ban_id'];?>
');"
                        <?php }?>
                >
                    <td height="16" align="center" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['ban']->value['mod_icon'];?>
</td>
                    <td height="16" align="center" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['ban']->value['ban_date'];?>
</td>
                    <td height="16" class="listtable_1">
                        <div style="float:left;">
                            <?php if (empty($_smarty_tpl->tpl_vars['ban']->value['player'])) {?>
                                <i><font color="#677882">no nickname present</font></i>
                            <?php } else { ?>
                                <?php echo stripslashes(htmlspecialchars((string)$_smarty_tpl->tpl_vars['ban']->value['player'], ENT_QUOTES, 'UTF-8', true));?>

                            <?php }?>
                        </div>
                        <div style="float:right;">
                            <?php if ($_smarty_tpl->tpl_vars['view_comments']->value && $_smarty_tpl->tpl_vars['ban']->value['commentdata'] != "None" && smarty_modifier_count($_smarty_tpl->tpl_vars['ban']->value['commentdata']) > 0) {?>
                                <?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['ban']->value['commentdata']);?>
&thinsp;<i class="fas fa-clipboard-list fa-lg"></i>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['view_bans']->value) {?>
                                <?php echo $_smarty_tpl->tpl_vars['ban']->value['counts'];?>

                            <?php }?>
                        </div>
                    </td>
                    <?php if (!$_smarty_tpl->tpl_vars['hideadminname']->value) {?>
                        <td height="16" class="listtable_1">
                            <?php if (!empty($_smarty_tpl->tpl_vars['ban']->value['admin'])) {?>
                                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ban']->value['admin'], ENT_QUOTES, 'UTF-8', true);?>

                            <?php } else { ?>
                                <i><font color="#677882">Admin deleted</font></i>
                            <?php }?>
                        </td>
                    <?php }?>
                    <td height="16" align="center" class="<?php echo $_smarty_tpl->tpl_vars['ban']->value['class'];?>
"><?php echo $_smarty_tpl->tpl_vars['ban']->value['banlength'];?>
</td>
                </tr>
                <!-- ###############[ Start Sliding Panel ]################## -->
                <tr>
                    <td colspan="7" align="center">
                        <div class="opener">
                            <table width="100%" cellspacing="0" cellpadding="0" class="listtable">
                                <tr>
                                    <?php if ($_smarty_tpl->tpl_vars['view_bans']->value) {?>
                                    <td height="16" align="left" class="listtable_top" colspan="3">
                                        <?php } else { ?>
                                    <td height="16" align="left" class="listtable_top" colspan="2">
                                        <?php }?>
                                        <b>Block Details</b>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Player</td>
                                    <td height="16" class="listtable_1">
                                        <?php if (empty($_smarty_tpl->tpl_vars['ban']->value['player'])) {?>
                                            <i><font color="#677882">no nickname present</font></i>
                                        <?php } else { ?>
                                            <?php echo stripslashes(htmlspecialchars((string)$_smarty_tpl->tpl_vars['ban']->value['player'], ENT_QUOTES, 'UTF-8', true));?>

                                        <?php }?>
                                    </td>
                                    <!-- ###############[ Start Admin Controls ]################## -->
                                    <?php if ($_smarty_tpl->tpl_vars['view_bans']->value) {?>
                                        <td width="30%" rowspan="<?php if ((isset($_smarty_tpl->tpl_vars['ban']->value['unbanned']))) {?>13<?php } else { ?>11<?php }?>" class="listtable_2 opener">
                                            <div class="ban-edit">
                                                <ul>
                                                    <?php if ((isset($_smarty_tpl->tpl_vars['ban']->value['unbanned'])) && $_smarty_tpl->tpl_vars['ban']->value['reban_link'] != false) {?>
                                                        <li><?php echo $_smarty_tpl->tpl_vars['ban']->value['reban_link'];?>
</li>
                                                    <?php }?>
                                                    <li><?php echo $_smarty_tpl->tpl_vars['ban']->value['addcomment'];?>
</li>
                                                    <?php if (($_smarty_tpl->tpl_vars['ban']->value['view_edit'] && (!(isset($_smarty_tpl->tpl_vars['ban']->value['unbanned'])) || !$_smarty_tpl->tpl_vars['ban']->value['unbanned']))) {?>
                                                        <li><?php echo $_smarty_tpl->tpl_vars['ban']->value['edit_link'];?>
</li>
                                                    <?php }?>
                                                    <?php if (($_smarty_tpl->tpl_vars['ban']->value['unbanned'] == false && $_smarty_tpl->tpl_vars['ban']->value['view_unban'])) {?>
                                                        <li><?php echo $_smarty_tpl->tpl_vars['ban']->value['unban_link'];?>
</li>
                                                    <?php }?>
                                                    <?php if ($_smarty_tpl->tpl_vars['ban']->value['view_delete']) {?>
                                                        <li><?php echo $_smarty_tpl->tpl_vars['ban']->value['delete_link'];?>
</li>
                                                    <?php }?>
                                                </ul>
                                            </div>
                                        </td>
                                    <?php }?>
                                    <!-- ###############[ End Admin Controls ]##################### -->
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Steam ID</td>
                                    <td height="16" class="listtable_1">
                                        <?php if (empty($_smarty_tpl->tpl_vars['ban']->value['steamid'])) {?>
                                            <i><font color="#677882">No Steam ID present</font></i>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['ban']->value['steamid'];?>

                                        <?php }?>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Steam3 ID</td>
                                    <td height="16" class="listtable_1">
                                        <?php if (empty($_smarty_tpl->tpl_vars['ban']->value['steamid'])) {?>
                                            <i><font color="#677882">No Steam3 ID present</font></i>
                                        <?php } else { ?>
                                            <a href="http://steamcommunity.com/profiles/<?php echo $_smarty_tpl->tpl_vars['ban']->value['steamid3'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ban']->value['steamid3'];?>
</a>
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Steam Community</td>
                                    <td height="16" class="listtable_1">
                                        <?php if (empty($_smarty_tpl->tpl_vars['ban']->value['steamid'])) {?>
                                            <i><font color="#677882">No Steam Community ID present</font></i>
                                        <?php } else { ?>
                                            <a href="http://steamcommunity.com/profiles/<?php echo $_smarty_tpl->tpl_vars['ban']->value['communityid'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['ban']->value['communityid'];?>
</a>
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Invoked on</td>
                                    <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['ban']->value['ban_date'];?>
</td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Block length</td>
                                    <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['ban']->value['banlength'];?>
</td>
                                </tr>
                                <?php if ((isset($_smarty_tpl->tpl_vars['ban']->value['unbanned']))) {?>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Unblock reason</td>
                                        <td height="16" class="listtable_1">
                                            <?php if (!(isset($_smarty_tpl->tpl_vars['ban']->value['ureason'])) || $_smarty_tpl->tpl_vars['ban']->value['ureason'] == '') {?>
                                                <i><font color="#677882">no reason present</font></i>
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['ban']->value['ureason'];?>

                                            <?php }?>
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Unblocked by Admin</td>
                                        <td height="16" class="listtable_1">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['ban']->value['removedby'])) {?>
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ban']->value['removedby'], ENT_QUOTES, 'UTF-8', true);?>

                                            <?php } else { ?>
                                                <i><font color="#677882">Admin deleted.</font></i>
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php }?>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Expires on</td>
                                    <td height="16" class="listtable_1">
                                        <?php if ($_smarty_tpl->tpl_vars['ban']->value['expires'] == "never") {?>
                                            <i><font color="#677882">Not applicable.</font></i>
                                        <?php } else { ?>
                                            <?php echo $_smarty_tpl->tpl_vars['ban']->value['expires'];?>

                                        <?php }?>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Reason</td>
                                    <td height="16" class="listtable_1"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ban']->value['reason'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                                </tr>
                                <?php if (!$_smarty_tpl->tpl_vars['hideadminname']->value) {?>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Blocked by Admin</td>
                                        <td height="16" class="listtable_1">
                                            <?php if (!empty($_smarty_tpl->tpl_vars['ban']->value['admin'])) {?>
                                                <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['ban']->value['admin'], ENT_QUOTES, 'UTF-8', true);?>

                                            <?php } else { ?>
                                                <i><font color="#677882">Admin deleted.</font></i>
                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php }?>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Blocked from</td>
                                    <td height="16" class="listtable_1" <?php if ($_smarty_tpl->tpl_vars['ban']->value['server_id'] != 0) {?>id="host_<?php echo $_smarty_tpl->tpl_vars['ban']->value['ban_id'];?>
"<?php }?>>
                                        <?php if ($_smarty_tpl->tpl_vars['ban']->value['server_id'] == 0) {?>
                                            Web Ban
                                        <?php } else { ?>
                                            Please Wait...
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Total Blocks</td>
                                    <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['ban']->value['prevoff_link'];?>
</td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['view_comments']->value) {?>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Comments</td>
                                        <td height="60" class="listtable_1" colspan="2">
                                            <?php if ($_smarty_tpl->tpl_vars['ban']->value['commentdata'] != "None") {?>
                                                <table width="100%" border="0">
                                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ban']->value['commentdata'], 'commenta');
$_smarty_tpl->tpl_vars['commenta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['commenta']->value) {
$_smarty_tpl->tpl_vars['commenta']->do_else = false;
?>
                                                        <?php if ($_smarty_tpl->tpl_vars['commenta']->value['morecom']) {?>
                                                            <tr>
                                                                <td colspan='3'>
                                                                    <hr>
                                                                </td>
                                                            </tr>
                                                        <?php }?>
                                                        <tr>
                                                            <td>
                                                                <?php if (!empty($_smarty_tpl->tpl_vars['commenta']->value['comname'])) {?>
                                                                    <b><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['commenta']->value['comname'], ENT_QUOTES, 'UTF-8', true);?>
</b>
                                                                <?php } else { ?>
                                                                    <i><font color="#677882">Admin deleted</font></i>
                                                                <?php }?>
                                                            </td>
                                                            <td align="right">
                                                                <b><?php echo $_smarty_tpl->tpl_vars['commenta']->value['added'];?>
</b>
                                                            </td>
                                                            <?php if ($_smarty_tpl->tpl_vars['commenta']->value['editcomlink'] != '') {?>
                                                                <td align="right">
                                                                    <?php echo $_smarty_tpl->tpl_vars['commenta']->value['editcomlink'];?>
 <?php echo $_smarty_tpl->tpl_vars['commenta']->value['delcomlink'];?>

                                                                </td>
                                                            <?php }?>
                                                        </tr>
                                                        <tr>
                                                            <td colspan='3'>
                                                                <?php echo $_smarty_tpl->tpl_vars['commenta']->value['commenttxt'];?>

                                                            </td>
                                                        </tr>
                                                        <?php if (!empty($_smarty_tpl->tpl_vars['commenta']->value['edittime'])) {?>
                                                            <tr>
                                                                <td colspan='3'>
                                                                    <span style="font-size:6pt;color:grey;">last edit <?php echo $_smarty_tpl->tpl_vars['commenta']->value['edittime'];?>
 by <?php if (!empty($_smarty_tpl->tpl_vars['commenta']->value['editname'])) {
echo $_smarty_tpl->tpl_vars['commenta']->value['editname'];
} else { ?><i><font color="#677882">Admin deleted</font></i><?php }?></span>
                                                                </td>
                                                            </tr>
                                                        <?php }?>
                                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                                </table>
                                            <?php }?>
                                            <?php if ($_smarty_tpl->tpl_vars['ban']->value['commentdata'] == "None") {?>
                                                <?php echo $_smarty_tpl->tpl_vars['ban']->value['commentdata'];?>

                                            <?php }?>
                                        </td>
                                    </tr>
                                <?php }?>
                            </table>
                        </div>
                    </td>
                </tr>
                <!-- ###############[ End Sliding Panel ]################## -->
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </table><div align="right" style="margin-top: 3px; font-size:7pt">SourceComms plugin &#038;	integration to SourceBans made by <a href="https://github.com/ppalex7" target="_blank">Alex</a></div>
    </div>

    <?php echo '<script'; ?>
 type="text/javascript">window.addEvent('domready', function(){
            InitAccordion('tr.opener', 'div.opener', 'mainwrapper');
            
            <?php if ($_smarty_tpl->tpl_vars['view_bans']->value) {?>
            $('tickswitch').value=0;
            <?php }?>
            
        });
    <?php echo '</script'; ?>
>

<?php }
}
}
