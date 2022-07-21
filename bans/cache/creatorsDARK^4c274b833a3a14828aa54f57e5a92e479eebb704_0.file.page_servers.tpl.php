<?php
/* Smarty version 3.1.44, created on 2022-05-14 19:55:59
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_servers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6280418f5cc930_96385808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4c274b833a3a14828aa54f57e5a92e479eebb704' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_servers.tpl',
      1 => 1634755132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280418f5cc930_96385808 (Smarty_Internal_Template $_smarty_tpl) {
?><div>
    <?php if ($_smarty_tpl->tpl_vars['IN_SERVERS_PAGE']->value && $_smarty_tpl->tpl_vars['access_bans']->value) {?><div style="text-align:right; width:100%;"><small>Hint: Rightclick on a player to open a context menu with options to kick, ban or contact the player directly.</small></div><?php }?>
    <table cellspacing="0" cellpadding="0" align="center" class="sortable listtable">
        <thead>
        <tr>
            <td width="2%" height="16" class="listtable_top">MOD</td>
            <td width="2%" height="16" class="listtable_top">OS</td>
            <td width="2%" height="16" class="listtable_top">VAC</td>
            <td height="16" class="listtable_top" align="center"><b>Hostname</b></td>
            <td width="10%" height="16" class="listtable_top"><b>Players</b></td>
            <td width="10%" height="16" class="listtable_top"><b>Map</b></td>
        </tr>
        </thead>
        <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_list']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
            <tr id="opener_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" class="opener tbl_out" style="cursor:pointer;" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'"<?php if (!$_smarty_tpl->tpl_vars['IN_SERVERS_PAGE']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['server']->value['evOnClick'];?>
"<?php }?>>
                <td height="16" align="center" class="listtable_1"><img height="16px" width="16px" src="images/games/<?php echo $_smarty_tpl->tpl_vars['server']->value['icon'];?>
" border="0" /></td>
                <td height="16" align="center" class="listtable_1" id="os_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
"></td>
                <td height="16" align="center" class="listtable_1" id="vac_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
"></td>
                <td height="16" class="listtable_1" id="host_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
"><i>Querying Server Data...</i></td>
                <td height="16" class="listtable_1" id="players_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">N/A</td>
                <td height="16" class="listtable_1" id="map_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">N/A</td>
            </tr>
            <tr>
                <td colspan="7" align="center">

                    <?php if ($_smarty_tpl->tpl_vars['IN_SERVERS_PAGE']->value) {?>
                        <div class="opener">
                            <div id="serverwindow_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">
                                <div id="sinfo_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">
                                    <table width="100%" border="0" class="listtable">
                                        <tr>
                                            <td class="listtable_1" valign="top">
                                                <table width="100%" border="0" class="listtable" id="playerlist_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" name="playerlist_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">
                                                </table>
                                            </td>
                                            <td width="355px" class="listtable_2 opener" valign="top" style="padding-right: 0px; padding-left: 13px; padding-top: 12px;">
                                                <img id="mapimg_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" style="border-radius: 6px; padding-left: 1px;" width='340' src='images/maps/nomap.jpg'>
                                                <br />
                                                <br />
                                                <div align='center'>
                                                    <p style="font-size: 13px;"><?php echo $_smarty_tpl->tpl_vars['server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['server']->value['port'];?>
</p>
                                                    <input type='submit' onclick="document.location = 'steam://connect/<?php echo $_smarty_tpl->tpl_vars['server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['server']->value['port'];?>
'" name='button' class='btn game' style='margin:0px;' id='button' value='Join game' />
                                                    <input type='button' onclick="ShowBox('Reloading..','<b>Refreshing the Serverdata...</b><br><i>Please Wait!</i>', 'blue', '', false);document.getElementById('dialog-control').setStyle('display', 'none');xajax_RefreshServer(<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
);" name='button' class='btn refresh' style='margin:0;' id='button' value='Refresh' />
                                                </div>
                                                <br />
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div id="noplayer_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" name="noplayer_<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" style="display:none;"><br />
                                    <h2 style="color: #333;">No players in the server</h2><br />
                                    <div align='center'>
                                        <p style="font-size: 13px;"><?php echo $_smarty_tpl->tpl_vars['server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['server']->value['port'];?>
</p>
                                        <input type='submit' onclick="document.location = 'steam://connect/<?php echo $_smarty_tpl->tpl_vars['server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['server']->value['port'];?>
'" name='button' class='btn game' style='margin:0;' id='button' value='Join game' />
                                        <input type='button' onclick="ShowBox('Reloading..','<b>Refreshing the Serverdata...</b><br><i>Please Wait!</i>', 'blue', '', false);document.getElementById('dialog-control').setStyle('display', 'none');xajax_RefreshServer(<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
);" name='button' class='btn refresh' style='margin:0;' id='button' value='Refresh' /><br /><br />
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                </td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
</div>


<?php if ($_smarty_tpl->tpl_vars['IN_SERVERS_PAGE']->value) {?>
    <?php echo '<script'; ?>
 type="text/javascript">
        InitAccordion('tr.opener', 'div.opener', 'mainwrapper');
    <?php echo '</script'; ?>
>
<?php }
}
}
