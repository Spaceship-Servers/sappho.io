<?php /* Smarty version 2.6.31, created on 2021-10-21 21:25:21
         compiled from page_admin_bans_submissions_archiv.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'page_admin_bans_submissions_archiv.tpl', 23, false),array('modifier', 'escape', 'page_admin_bans_submissions_archiv.tpl', 134, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permissions_submissions']): ?>
    Access Denied!
<?php else: ?>
    <h3 style="margin-top:0px;">Ban Submissions Archive (<span id="subcountarchiv"><?php echo $this->_tpl_vars['submission_count_archiv']; ?>
</span>)</h3>
    Click a player's nickname to view information about their submission<br /><br />
    <div id="banlist-nav">
        <?php echo $this->_tpl_vars['asubmission_nav']; ?>

    </div>
    <table width="100%" cellpadding="0" cellspacing="0">
        <tr  class="tbl_out">
            <td width="40%" height='16' class="listtable_top"><strong>Nickname</strong></td>
            <td width="20%" height='16' class="listtable_top"><strong>SteamID</strong></td>
            <td width="25%" height='16' class="listtable_top"><strong>Action</strong></td>
        </tr>
        <?php $_from = ($this->_tpl_vars['submission_list_archiv']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['sub']):
?>
            <tr id="asid_<?php echo $this->_tpl_vars['sub']['subid']; ?>
" class="opener4 tbl_out" <?php if ($this->_tpl_vars['sub']['hostname'] == ""): ?>onclick="xajax_ServerHostPlayers('<?php echo $this->_tpl_vars['sub']['server']; ?>
', 'id', 'suba<?php echo $this->_tpl_vars['sub']['subid']; ?>
');"<?php endif; ?> onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
                <td style="border-bottom: solid 1px #ccc" height='16'><?php echo $this->_tpl_vars['sub']['name']; ?>
</td>
                <td style="border-bottom: solid 1px #ccc" height='16'><?php if ($this->_tpl_vars['sub']['SteamId'] != ""): ?><?php echo $this->_tpl_vars['sub']['SteamId']; ?>
<?php else: ?><?php echo $this->_tpl_vars['sub']['sip']; ?>
<?php endif; ?></td>
                <td style="border-bottom: solid 1px #ccc" height='16'>
                    <?php if ($this->_tpl_vars['sub']['archiv'] != '2' && $this->_tpl_vars['sub']['archiv'] != '3'): ?>
                        <a href="#" onclick="xajax_SetupBan(<?php echo $this->_tpl_vars['sub']['subid']; ?>
);">Ban</a> -
                        <?php if ($this->_tpl_vars['permissions_editsub']): ?>
                            <a href="#" onclick="RemoveSubmission(<?php echo $this->_tpl_vars['sub']['subid']; ?>
, '<?php echo ((is_array($_tmp=$this->_tpl_vars['sub']['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
', '2');">Restore</a> -
                        <?php endif; ?>
                    <?php endif; ?>
                    <?php if ($this->_tpl_vars['permissions_editsub']): ?>
                        <a href="#" onclick="RemoveSubmission(<?php echo $this->_tpl_vars['sub']['subid']; ?>
, '<?php echo ((is_array($_tmp=$this->_tpl_vars['sub']['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
', '0');">Delete</a> -
                    <?php endif; ?>
                    <a href="index.php?p=admin&c=bans&o=email&type=s&id=<?php echo $this->_tpl_vars['sub']['subid']; ?>
">Contact</a>
                </td>
            </tr>
            <tr id="asid_<?php echo $this->_tpl_vars['sub']['subid']; ?>
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
                                    <b>Archived because <?php echo $this->_tpl_vars['sub']['archive']; ?>
</b>
                                </td>
                                <td width="30%" rowspan="11" class="listtable_2">
                                    <div class="ban-edit">
                                        <ul>
                                            <li><?php echo $this->_tpl_vars['sub']['demo']; ?>
</li>
                                            <li><?php echo $this->_tpl_vars['sub']['subaddcomment']; ?>
</li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Player</td>
                                <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['sub']['name']; ?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Submitted</td>
                                <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['sub']['submitted']; ?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">SteamID</td>
                                <td height="16" class="listtable_1">
                                    <?php if ($this->_tpl_vars['sub']['SteamId'] == ""): ?>
                                        <i><font color="#677882">no steamid present</font></i>
                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['sub']['SteamId']; ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">IP</td>
                                <td height="16" class="listtable_1">
                                    <?php if ($this->_tpl_vars['sub']['sip'] == ""): ?>
                                        <i><font color="#677882">no ip address present</font></i>
                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['sub']['sip']; ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Reason</td>
                                <td height="" class="listtable_1"><?php echo $this->_tpl_vars['sub']['reason']; ?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Server</td>
                                <td height="" class="listtable_1" id="suba<?php echo $this->_tpl_vars['sub']['subid']; ?>
"><?php if ($this->_tpl_vars['sub']['hostname'] == ""): ?><i>Retrieving Hostname</i><?php else: ?><?php echo $this->_tpl_vars['sub']['hostname']; ?>
<?php endif; ?></td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">MOD</td>
                                <td height="" class="listtable_1"><?php echo $this->_tpl_vars['sub']['mod']; ?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Submitter Name</td>
                                <td height="" class="listtable_1">
                                    <?php if ($this->_tpl_vars['sub']['subname'] == ""): ?>
                                        <i><font color="#677882">no name present</font></i>
                                    <?php else: ?>
                                        <?php echo $this->_tpl_vars['sub']['subname']; ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Submitter IP</td>
                                <td height="" class="listtable_1"><?php echo $this->_tpl_vars['sub']['ip']; ?>
</td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Archived by</td>
                                <td height="" class="listtable_1">
                                    <?php if (! empty ( $this->_tpl_vars['sub']['archivedby'] )): ?>
                                        <?php echo $this->_tpl_vars['sub']['archivedby']; ?>

                                    <?php else: ?>
                                        <i><font color="#677882">Admin deleted.</font></i>
                                    <?php endif; ?>
                                </td>
                            </tr>
                            <tr align="left">
                                <td width="20%" height="16" class="listtable_1">Comments</td>
                                <td height="60" class="listtable_1" colspan="3">
                                    <?php if ($this->_tpl_vars['sub']['commentdata'] != 'None'): ?>
                                        <table width="100%" border="0">
                                            <?php $_from = $this->_tpl_vars['sub']['commentdata']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
                                    <?php if ($this->_tpl_vars['sub']['commentdata'] == 'None'): ?>
                                        <?php echo $this->_tpl_vars['sub']['commentdata']; ?>

                                    <?php endif; ?>
                                </td>
                            </tr>
                        </table>
                    </div>
                </td>
            </tr>
        <?php endforeach; endif; unset($_from); ?>
    </table>
    <script>InitAccordion('tr.opener4', 'div.opener4', 'mainwrapper');</script>
<?php endif; ?>