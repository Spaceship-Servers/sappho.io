<?php /* Smarty version 2.6.31, created on 2021-10-21 21:25:21
         compiled from page_admin_bans_protests_archiv.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'page_admin_bans_protests_archiv.tpl', 139, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_protests']): ?>
    Access Denied!
<?php else: ?>
    <div id="protests">
        <h3 style="margin-top:0px;">Ban Protests Archive (<span id="protcountarchiv"><?php echo $this->_tpl_vars['protest_count_archiv']; ?>
</span>)</h3>
        Click a player's nickname to view information about their ban<br /><br />
        <div id="banlist-nav">
            <?php echo $this->_tpl_vars['aprotest_nav']; ?>

        </div>
        <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td width="40%" height='16' class="listtable_top"><strong>Nickname</strong></td>
                <td width="20%" height='16' class="listtable_top"><strong>SteamID</strong></td>
                <td width="25%" height='16' class="listtable_top"><strong>Action</strong></td>
            </tr>
            <?php $_from = ($this->_tpl_vars['protest_list_archiv']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['protest']):
?>
                <tr id="apid_<?php echo $this->_tpl_vars['protest']['pid']; ?>
" class="opener5 tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
                    <td class="toggler" style="border-bottom: solid 1px #ccc" height='16'><?php if ($this->_tpl_vars['protest']['archiv'] != 2): ?><a href="./index.php?p=banlist<?php if ($this->_tpl_vars['protest']['authid'] != ""): ?>&advSearch=<?php echo $this->_tpl_vars['protest']['authid']; ?>
&advType=steamid<?php else: ?>&advSearch=<?php echo $this->_tpl_vars['protest']['ip']; ?>
&advType=ip<?php endif; ?>" title="Show ban"><?php echo $this->_tpl_vars['protest']['name']; ?>
</a><?php else: ?><i><font color="#677882">ban removed</font></i><?php endif; ?></td>
                    <td style="border-bottom: solid 1px #ccc" height='16'><?php if ($this->_tpl_vars['protest']['authid'] != ""): ?><?php echo $this->_tpl_vars['protest']['authid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['protest']['ip']; ?>
<?php endif; ?></td>
                    <td style="border-bottom: solid 1px #ccc" height='16'>
                        <?php if ($this->_tpl_vars['permission_editban']): ?>
                            <a href="#" onclick="RemoveProtest('<?php echo $this->_tpl_vars['protest']['pid']; ?>
', '<?php if ($this->_tpl_vars['protest']['authid'] != ""): ?><?php echo $this->_tpl_vars['protest']['authid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['protest']['ip']; ?>
<?php endif; ?>', '2');">Restore</a> -
                            <a href="#" onclick="RemoveProtest('<?php echo $this->_tpl_vars['protest']['pid']; ?>
', '<?php if ($this->_tpl_vars['protest']['authid'] != ""): ?><?php echo $this->_tpl_vars['protest']['authid']; ?>
<?php else: ?><?php echo $this->_tpl_vars['protest']['ip']; ?>
<?php endif; ?>', '0');">Delete</a> -
                        <?php endif; ?>
                        <a href="index.php?p=admin&c=bans&o=email&type=p&id=<?php echo $this->_tpl_vars['protest']['pid']; ?>
">Contact</a>
                    </td>
                </tr>
                <tr id="apid_<?php echo $this->_tpl_vars['protest']['pid']; ?>
a" >
                    <td colspan="4" align="center" id="ban_details_<?php echo $this->_tpl_vars['protest']['pid']; ?>
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
                                        <b>Archived because <?php echo $this->_tpl_vars['protest']['archive']; ?>
</b>
                                    </td>
                                    <td width="30%" rowspan="<?php if ($this->_tpl_vars['protest']['archiv'] == '2'): ?>5<?php else: ?>13<?php endif; ?>" class="listtable_2">
                                        <div class="ban-edit">
                                            <ul>
                                                <li><?php echo $this->_tpl_vars['protest']['protaddcomment']; ?>
</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <?php if ($this->_tpl_vars['protest']['archiv'] != 2): ?>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Player</td>
                                        <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['protest']['name']; ?>
</td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">SteamID</td>
                                        <td height="16" class="listtable_1">
                                            <?php if ($this->_tpl_vars['protest']['authid'] == ""): ?>
                                                <i><font color="#677882">no steamid present</font></i>
                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['protest']['authid']; ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">IP address</td>
                                        <td height="16" class="listtable_1">
                                            <?php if ($this->_tpl_vars['protest']['ip'] == 'none' || $this->_tpl_vars['protest']['ip'] == ''): ?>
                                                <i><font color="#677882">no IP address present</font></i>
                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['protest']['ip']; ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Invoked on</td>
                                        <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['protest']['date']; ?>
</td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">End Date</td>
                                        <td height="16" class="listtable_1">
                                            <?php if ($this->_tpl_vars['protest']['ends'] == 'never'): ?>
                                                <i><font color="#677882">Not applicable.</font></i>
                                            <?php else: ?>
                                                <?php echo $this->_tpl_vars['protest']['ends']; ?>

                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Reason</td>
                                        <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['protest']['ban_reason']; ?>
</td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Banned by Admin</td>
                                        <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['protest']['admin']; ?>
</td>
                                    </tr>
                                    <tr align="left">
                                        <td width="20%" height="16" class="listtable_1">Banned from</td>
                                        <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['protest']['server']; ?>
</td>
                                    </tr>
                                <?php endif; ?>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Archived by</td>
                                    <td height="" class="listtable_1">
                                        <?php if (! empty ( $this->_tpl_vars['protest']['archivedby'] )): ?>
                                            <?php echo $this->_tpl_vars['protest']['archivedby']; ?>

                                        <?php else: ?>
                                            <i><font color="#677882">Admin deleted.</font></i>
                                        <?php endif; ?>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Protester IP</td>
                                    <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['protest']['pip']; ?>
</td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Protested on</td>
                                    <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['protest']['datesubmitted']; ?>
</td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Protest message</td>
                                    <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['protest']['reason']; ?>
</td>
                                </tr>
                                <tr align="left">
                                    <td width="20%" height="16" class="listtable_1">Comments</td>
                                    <td height="60" class="listtable_1" colspan="3">
                                        <?php if ($this->_tpl_vars['protest']['commentdata'] != 'None'): ?>
                                            <table width="100%" border="0">
                                                <?php $_from = $this->_tpl_vars['protest']['commentdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['commenta']):
?>
                                                    <?php if ($this->_tpl_vars['commenta']['morecom']): ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                <hr />
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                    <tr>
                                                        <td>
                                                            <?php if (! empty ( $this->_tpl_vars['commenta']['comname'] )): ?>
                                                                <b><?php echo ((is_array($_tmp=$this->_tpl_vars['commenta']['comname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</b>
                                                            <?php else: ?>
                                                                <i><font color="#677882">Admin deleted</font></i>
                                                            <?php endif; ?>
                                                        </td><td align="right"><b><?php echo $this->_tpl_vars['commenta']['added']; ?>
</b>
                                                        </td>
                                                        <?php if ($this->_tpl_vars['commenta']['editcomlink'] != ""): ?>
                                                            <td align="right">
                                                                <?php echo $this->_tpl_vars['commenta']['editcomlink']; ?>
 <?php echo $this->_tpl_vars['commenta']['delcomlink']; ?>

                                                            </td>
                                                        <?php endif; ?>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="word-break: break-all;word-wrap: break-word;">
                                                            <?php echo $this->_tpl_vars['commenta']['commenttxt']; ?>

                                                        </td>
                                                    </tr>
                                                    <?php if (! empty ( $this->_tpl_vars['commenta']['edittime'] )): ?>
                                                        <tr>
                                                            <td colspan="3">
                                                                <span style="font-size:6pt;color:grey;">last edit <?php echo $this->_tpl_vars['commenta']['edittime']; ?>
 by <?php if (! empty ( $this->_tpl_vars['commenta']['editname'] )): ?><?php echo $this->_tpl_vars['commenta']['editname']; ?>
<?php else: ?><i><font color="#677882">Admin deleted</font></i><?php endif; ?></span>
                                                            </td>
                                                        </tr>
                                                    <?php endif; ?>
                                                <?php endforeach; endif; unset($_from); ?>
                                            </table>
                                        <?php endif; ?>
                                        <?php if ($this->_tpl_vars['protest']['commentdata'] == 'None'): ?>
                                            <?php echo $this->_tpl_vars['protest']['commentdata']; ?>

                                        <?php endif; ?>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            <?php endforeach; endif; unset($_from); ?>
        </table>
    </div>
    <script>InitAccordion('tr.opener5', 'div.opener5', 'protests');</script>
<?php endif; ?>