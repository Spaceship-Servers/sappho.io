<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:18
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_protests_archiv.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e72693f5c0_84088989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd7f200a3e029536f0e492493f96fa7577c6325a6' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_bans_protests_archiv.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e72693f5c0_84088989 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['permission_protests']->value) {?>
    Access Denied!
<?php } else { ?>
    <div id="protests">
        <h3 style="margin-top:0px;">Ban Protests Archive (<span id="protcountarchiv"><?php echo $_smarty_tpl->tpl_vars['protest_count_archiv']->value;?>
</span>)</h3>
        Click a player's nickname to view information about their ban<br /><br />
        <div id="banlist-nav">
            <?php echo $_smarty_tpl->tpl_vars['aprotest_nav']->value;?>

        </div>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="40%" height='16' class="listtable_top"><strong>Nickname</strong></td>
                <td width="20%" height='16' class="listtable_top"><strong>SteamID</strong></td>
                <td width="25%" height='16' class="listtable_top"><strong>Action</strong></td>
            </tr>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['protest_list_archiv']->value, 'protest');
$_smarty_tpl->tpl_vars['protest']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['protest']->value) {
$_smarty_tpl->tpl_vars['protest']->do_else = false;
?>
                <tr id="apid_<?php echo $_smarty_tpl->tpl_vars['protest']->value['pid'];?>
" class="opener5 tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
                    <td class="toggler" style="border-bottom: solid 1px #ccc" height='16'><?php if ($_smarty_tpl->tpl_vars['protest']->value['archiv'] != 2) {?><a href="./index.php?p=banlist<?php if ($_smarty_tpl->tpl_vars['protest']->value['authid'] != '') {?>&advSearch=<?php echo $_smarty_tpl->tpl_vars['protest']->value['authid'];?>
&advType=steamid<?php } else { ?>&advSearch=<?php echo $_smarty_tpl->tpl_vars['protest']->value['ip'];?>
&advType=ip<?php }?>" title="Show ban"><?php echo $_smarty_tpl->tpl_vars['protest']->value['name'];?>
</a><?php } else { ?><i><font color="#677882">ban removed</font></i><?php }?></td>
                    <td style="border-bottom: solid 1px #ccc" height='16'><?php if ($_smarty_tpl->tpl_vars['protest']->value['authid'] != '') {
echo $_smarty_tpl->tpl_vars['protest']->value['authid'];
} else {
echo $_smarty_tpl->tpl_vars['protest']->value['ip'];
}?></td>
                    <td style="border-bottom: solid 1px #ccc" height='16'>
                        <?php if ($_smarty_tpl->tpl_vars['permission_editban']->value) {?>
                            <a href="#" onclick="RemoveProtest('<?php echo $_smarty_tpl->tpl_vars['protest']->value['pid'];?>
', '<?php if ($_smarty_tpl->tpl_vars['protest']->value['authid'] != '') {
echo $_smarty_tpl->tpl_vars['protest']->value['authid'];
} else {
echo $_smarty_tpl->tpl_vars['protest']->value['ip'];
}?>', '2');">Restore</a> -
                            <a href="#" onclick="RemoveProtest('<?php echo $_smarty_tpl->tpl_vars['protest']->value['pid'];?>
', '<?php if ($_smarty_tpl->tpl_vars['protest']->value['authid'] != '') {
echo $_smarty_tpl->tpl_vars['protest']->value['authid'];
} else {
echo $_smarty_tpl->tpl_vars['protest']->value['ip'];
}?>', '0');">Delete</a> -
                        <?php }?>
                        <a href="index.php?p=admin&c=bans&o=email&type=p&id=<?php echo $_smarty_tpl->tpl_vars['protest']->value['pid'];?>
">Contact</a>
                    </td>
                </tr>
                <tr id="apid_<?php echo $_smarty_tpl->tpl_vars['protest']->value['pid'];?>
a" >
                    <td colspan="4" align="center" id="ban_details_<?php echo $_smarty_tpl->tpl_vars['protest']->value['pid'];?>
">
                        <div class="opener5">
                            <table width="90%" cellspacing="0" cellpadding="0" class="listtable">
                                <tr>
                                    <td height="16" align="left" class="listtable_top" colspan="5">
                                        <b>Bandetails</b>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td height="16" align="left" class="listtable_1" colspan="2">
                                        <b>Archived because <?php echo $_smarty_tpl->tpl_vars['protest']->value['archive'];?>
</b>
                                    </td>
                                    <td width="30%" rowspan="<?php if ($_smarty_tpl->tpl_vars['protest']->value['archiv'] == "2") {?>5<?php } else { ?>13<?php }?>" class="listtable_2">
                                        <div class="ban-edit">
                                            <ul>
                                                <li><?php echo $_smarty_tpl->tpl_vars['protest']->value['protaddcomment'];?>
</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php if ($_smarty_tpl->tpl_vars['protest']->value['archiv'] != 2) {?>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Player</td>
                                        <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['protest']->value['name'];?>
</td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">SteamID</td>
                                        <td height="16" class="listtable_1">
                                            <?php if ($_smarty_tpl->tpl_vars['protest']->value['authid'] == '') {?>
                                                <i><font color="#677882">no steamid present</font></i>
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['protest']->value['authid'];?>

                                            <?php }?>
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">IP address</td>
                                        <td height="16" class="listtable_1">
                                            <?php if ($_smarty_tpl->tpl_vars['protest']->value['ip'] == 'none' || $_smarty_tpl->tpl_vars['protest']->value['ip'] == '') {?>
                                                <i><font color="#677882">no IP address present</font></i>
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['protest']->value['ip'];?>

                                            <?php }?>
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Invoked on</td>
                                        <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['protest']->value['date'];?>
</td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">End Date</td>
                                        <td height="16" class="listtable_1">
                                            <?php if ($_smarty_tpl->tpl_vars['protest']->value['ends'] == 'never') {?>
                                                <i><font color="#677882">Not applicable.</font></i>
                                            <?php } else { ?>
                                                <?php echo $_smarty_tpl->tpl_vars['protest']->value['ends'];?>

                                            <?php }?>
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Reason</td>
                                        <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['protest']->value['ban_reason'];?>
</td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Banned by Admin</td>
                                        <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['protest']->value['admin'];?>
</td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Banned from</td>
                                        <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['protest']->value['server'];?>
</td>
                                    </tr>
                                <?php }?>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Archived by</td>
                                    <td height="" class="listtable_1">
                                        <?php if (!empty($_smarty_tpl->tpl_vars['protest']->value['archivedby'])) {?>
                                            <?php echo $_smarty_tpl->tpl_vars['protest']->value['archivedby'];?>

                                        <?php } else { ?>
                                            <i><font color="#677882">Admin deleted.</font></i>
                                        <?php }?>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Protester IP</td>
                                    <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['protest']->value['pip'];?>
</td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Protested on</td>
                                    <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['protest']->value['datesubmitted'];?>
</td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Protest message</td>
                                    <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['protest']->value['reason'];?>
</td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Comments</td>
                                    <td height="60" class="listtable_1" colspan="3">
                                        <?php if ($_smarty_tpl->tpl_vars['protest']->value['commentdata'] != "None") {?>
                                            <table width="100%" border="0">
                                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['protest']->value['commentdata'], 'commenta');
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
                                        <?php if ($_smarty_tpl->tpl_vars['protest']->value['commentdata'] == "None") {?>
                                            <?php echo $_smarty_tpl->tpl_vars['protest']->value['commentdata'];?>

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
    </div>
    <?php echo '<script'; ?>
>InitAccordion('tr.opener5', 'div.opener5', 'protests');<?php echo '</script'; ?>
>
<?php }
}
}
