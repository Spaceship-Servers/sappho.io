<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:18
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_submissions_archiv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e726961616_16755236',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '040e91cc777e03e253a84f714ef682ba2cdf3655' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_submissions_archiv.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e726961616_16755236 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['permissions_submissions']->value) {?>
    Access Denied!
<?php } else { ?>
    <h3 style="margin-top:0px;">Ban Submissions Archive (<span id="subcountarchiv"><?php echo $_smarty_tpl->tpl_vars['submission_count_archiv']->value;?>
</span>)</h3>
    Click a player's nickname to view information about their submission<br /><br />
    <div id="banlist-nav">
        <?php echo $_smarty_tpl->tpl_vars['asubmission_nav']->value;?>

    </div>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr  class="tbl_out">
            <td width="40%" height='16' class="listtable_top"><strong>Nickname</strong></td>
            <td width="20%" height='16' class="listtable_top"><strong>SteamID</strong></td>
            <td width="25%" height='16' class="listtable_top"><strong>Action</strong></td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['submission_list_archiv']->value, 'sub');
$_smarty_tpl->tpl_vars['sub']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['sub']->value) {
$_smarty_tpl->tpl_vars['sub']->do_else = false;
?>
            <tr id="asid_<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
" class="opener4 tbl_out" <?php if ($_smarty_tpl->tpl_vars['sub']->value['hostname'] == '') {?>onclick="xajax_ServerHostPlayers('<?php echo $_smarty_tpl->tpl_vars['sub']->value['server'];?>
', 'id', 'suba<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
');"<?php }?> onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
                <td style="border-bottom: solid 1px #ccc" height='16'><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</td>
                <td style="border-bottom: solid 1px #ccc" height='16'><?php if ($_smarty_tpl->tpl_vars['sub']->value['SteamId'] != '') {
echo $_smarty_tpl->tpl_vars['sub']->value['SteamId'];
} else {
echo $_smarty_tpl->tpl_vars['sub']->value['sip'];
}?></td>
                <td style="border-bottom: solid 1px #ccc" height='16'>
                    <?php if ($_smarty_tpl->tpl_vars['sub']->value['archiv'] != "2" && $_smarty_tpl->tpl_vars['sub']->value['archiv'] != "3") {?>
                        <a href="#" onclick="xajax_SetupBan(<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
);">Ban</a> -
                        <?php if ($_smarty_tpl->tpl_vars['permissions_editsub']->value) {?>
                            <a href="#" onclick="RemoveSubmission(<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
, '<?php echo stripslashes($_smarty_tpl->tpl_vars['sub']->value['name']);?>
', '2');">Restore</a> -
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['permissions_editsub']->value) {?>
                        <a href="#" onclick="RemoveSubmission(<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
, '<?php echo stripslashes($_smarty_tpl->tpl_vars['sub']->value['name']);?>
', '0');">Delete</a> -
                    <?php }?>
                    <a href="index.php?p=admin&c=bans&o=email&type=s&id=<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
">Contact</a>
                </td>
            </tr>
            <tr id="asid_<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
a">
                <td colspan="3">
                    <div class="opener4" width="100%" align="center">
                        <table width="90%" cellspacing="0" cellpadding="0" class="listtable">
                            <tr>
                                <td height="16" align="left" class="listtable_top" colspan="3">
                                    <b>Ban Details</b>
                                </td>
                            </tr>
                            <tr align="left">
                                <td height="16" align="left" class="listtable_1" colspan="2">
                                    <b>Archived because <?php echo $_smarty_tpl->tpl_vars['sub']->value['archive'];?>
</b>
                                </td>
                                <td width="30%" rowspan="11" class="listtable_2">
                                    <div class="ban-edit">
                                        <ul>
                                            <li><?php echo $_smarty_tpl->tpl_vars['sub']->value['demo'];?>
</li>
                                            <li><?php echo $_smarty_tpl->tpl_vars['sub']->value['subaddcomment'];?>
</li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Player</td>
                                <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['sub']->value['name'];?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Submitted</td>
                                <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['sub']->value['submitted'];?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">SteamID</td>
                                <td height="16" class="listtable_1">
                                    <?php if ($_smarty_tpl->tpl_vars['sub']->value['SteamId'] == '') {?>
                                        <i><font color="#677882">no steamid present</font></i>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['sub']->value['SteamId'];?>

                                    <?php }?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">IP</td>
                                <td height="16" class="listtable_1">
                                    <?php if ($_smarty_tpl->tpl_vars['sub']->value['sip'] == '') {?>
                                        <i><font color="#677882">no ip address present</font></i>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['sub']->value['sip'];?>

                                    <?php }?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Reason</td>
                                <td height="" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['sub']->value['reason'];?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Server</td>
                                <td height="" class="listtable_1" id="suba<?php echo $_smarty_tpl->tpl_vars['sub']->value['subid'];?>
"><?php if ($_smarty_tpl->tpl_vars['sub']->value['hostname'] == '') {?><i>Retrieving Hostname</i><?php } else {
echo $_smarty_tpl->tpl_vars['sub']->value['hostname'];
}?></td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">MOD</td>
                                <td height="" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['sub']->value['mod'];?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Submitter Name</td>
                                <td height="" class="listtable_1">
                                    <?php if ($_smarty_tpl->tpl_vars['sub']->value['subname'] == '') {?>
                                        <i><font color="#677882">no name present</font></i>
                                    <?php } else { ?>
                                        <?php echo $_smarty_tpl->tpl_vars['sub']->value['subname'];?>

                                    <?php }?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Submitter IP</td>
                                <td height="" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['sub']->value['ip'];?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Archived by</td>
                                <td height="" class="listtable_1">
                                    <?php if (!empty($_smarty_tpl->tpl_vars['sub']->value['archivedby'])) {?>
                                        <?php echo $_smarty_tpl->tpl_vars['sub']->value['archivedby'];?>

                                    <?php } else { ?>
                                        <i><font color="#677882">Admin deleted.</font></i>
                                    <?php }?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Comments</td>
                                <td height="60" class="listtable_1" colspan="3">
                                    <?php if ($_smarty_tpl->tpl_vars['sub']->value['commentdata'] != "None") {?>
                                        <table width="100%" border="0">
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['sub']->value['commentdata'], 'commenta');
$_smarty_tpl->tpl_vars['commenta']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['commenta']->value) {
$_smarty_tpl->tpl_vars['commenta']->do_else = false;
?>
                                                <?php if ($_smarty_tpl->tpl_vars['commenta']->value['morecom']) {?>
                                                    <tr>
                                                        <td colspan="3">
                                                            <hr />
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
                                                    </td><td align="right"><b><?php echo $_smarty_tpl->tpl_vars['commenta']->value['added'];?>
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
                                                    <td colspan="2" style="word-break: break-all;word-wrap: break-word;">
                                                        <?php echo $_smarty_tpl->tpl_vars['commenta']->value['commenttxt'];?>

                                                    </td>
                                                </tr>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['commenta']->value['edittime'])) {?>
                                                    <tr>
                                                        <td colspan="3">
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
                                    <?php if ($_smarty_tpl->tpl_vars['sub']->value['commentdata'] == "None") {?>
                                        <?php echo $_smarty_tpl->tpl_vars['sub']->value['commentdata'];?>

                                    <?php }?>
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
    <?php echo '<script'; ?>
>InitAccordion('tr.opener4', 'div.opener4', 'mainwrapper');<?php echo '</script'; ?>
>
<?php }
}
}
