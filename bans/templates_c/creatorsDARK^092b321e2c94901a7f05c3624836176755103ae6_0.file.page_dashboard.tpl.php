<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:06:26
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_dashboard.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e60223c873_49673275',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '092b321e2c94901a7f05c3624836176755103ae6' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_dashboard.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:page_servers.tpl' => 1,
  ),
),false)) {
function content_6427e60223c873_49673275 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="front-module-intro">
    <table width="100%" cellpadding="1">
        <tr>
            <td>
                <?php echo $_smarty_tpl->tpl_vars['dashboard_text']->value;?>

            </td>
        </tr>
    </table>
</div>


<div id="front-servers">
    <?php $_smarty_tpl->_subTemplateRender('file:page_servers.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
</div>

<div class="front-module" style="width:100%">
    <table width="100%" cellpadding="1" class="listtable">
        <tr>
            <td colspan="4">
                <table width="100%" cellpadding="0" cellspacing="0" class="front-module-header">
                    <tr>
                        <td align="left">
                            Latest Added Bans
                        </td>
                        <td align="right">
                            Total bans: <?php echo $_smarty_tpl->tpl_vars['total_bans']->value;?>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="16">
            <td width="16" class="listtable_top">MOD</td>
            <td width="24%" class="listtable_top" align="center"><strong>Date/Time</strong></td>
            <td class="listtable_top"><strong>Name</strong></td>
            <td width="14%" class="listtable_top"><strong>Length</strong></td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players_banned']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
            <tr onclick="<?php echo $_smarty_tpl->tpl_vars['player']->value['link_url'];?>
" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'" style="cursor:pointer;" height="16">
                <td class="listtable_1" align="center"><img src="images/games/<?php echo $_smarty_tpl->tpl_vars['player']->value['icon'];?>
" width="16" alt="MOD" title="MOD" /></td>
                <td class="listtable_1" align="center"><?php echo $_smarty_tpl->tpl_vars['player']->value['created'];?>
</td>
                <td class="listtable_1">
                    <?php if (empty($_smarty_tpl->tpl_vars['player']->value['short_name'])) {?>
                        <i><font color="#677882">no nickname present</font></i>
                    <?php } else { ?>
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['player']->value['short_name'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </td>
                <td class="listtable_1<?php if ($_smarty_tpl->tpl_vars['player']->value['unbanned']) {?>_unbanned<?php } elseif ($_smarty_tpl->tpl_vars['player']->value['perm']) {?>_permanent<?php } elseif ($_smarty_tpl->tpl_vars['player']->value['temp']) {?>_banned<?php }?>"><?php echo $_smarty_tpl->tpl_vars['player']->value['length'];
if ($_smarty_tpl->tpl_vars['player']->value['unbanned']) {?> (<?php echo $_smarty_tpl->tpl_vars['player']->value['ub_reason'];?>
)<?php }?></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<br /><br /><br />
<div class="front-module dashboard-ban-blocks">
    <table width="100%" cellpadding="1" class="listtable">
        <tr>
            <td colspan="3">
                <table width="100%" cellpadding="0" cellspacing="0" class="front-module-header">
                    <tr>
                        <td align="left">
                            Latest Players Blocked
                        </td>
                        <td align="right">
                            Total Stopped: <?php echo $_smarty_tpl->tpl_vars['total_blocked']->value;?>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td width="16px" height="16" class="listtable_top">&nbsp;</td>
            <td height="25%" class="listtable_top dashboard-ban-block-date"><b>Date/Time</b></td>
            <td height="16" class="listtable_top"><b>Name</b></td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players_blocked']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
            <tr<?php if ($_smarty_tpl->tpl_vars['dashboard_lognopopup']->value) {?> onclick="<?php echo $_smarty_tpl->tpl_vars['player']->value['link_url'];?>
"<?php } else { ?> onclick="<?php echo $_smarty_tpl->tpl_vars['player']->value['popup'];?>
"<?php }?> onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'" style="cursor: pointer;" id="<?php echo $_smarty_tpl->tpl_vars['player']->value['server'];?>
" title="Querying Server Data...">
                <td width="16" height="16" align="center" class="listtable_1"><i class="fas fa-ban fa-lg"></i></td>
                <td width="25%" height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['player']->value['date'];?>
</td>
                <td height="16" class="listtable_1"><?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['player']->value['short_name'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>

<div class="dashboard-blocks-separate">
    <br /><br /><br />
</div>

<div class="front-module dashboard-comm-blocks">
    <table width="100%" cellpadding="1" class="listtable">
        <tr>
            <td colspan="4">
                <table width="100%" cellpadding="0" cellspacing="0" class="front-module-header">
                    <tr>
                        <td align="left">
                            Latest Comm Blocks
                        </td>
                        <td align="right">
                            Total blocks: <?php echo $_smarty_tpl->tpl_vars['total_comms']->value;?>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr height="16">
            <td width="16" class="listtable_top">Type</td>
            <td width="24%" class="listtable_top" align="center"><strong>Date/Time</strong></td>
            <td class="listtable_top"><strong>Name</strong></td>
            <td width="23%" class="listtable_top"><strong>Length</strong></td>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['players_commed']->value, 'player');
$_smarty_tpl->tpl_vars['player']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['player']->value) {
$_smarty_tpl->tpl_vars['player']->do_else = false;
?>
            <tr onclick="<?php echo $_smarty_tpl->tpl_vars['player']->value['link_url'];?>
" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'" style="cursor:pointer;" height="16">
                <td class="listtable_1" align="center"><i class="<?php echo $_smarty_tpl->tpl_vars['player']->value['type'];?>
"></i></td>
                <td class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['player']->value['created'];?>
</td>
                <td class="listtable_1">
                    <?php if (empty($_smarty_tpl->tpl_vars['player']->value['short_name'])) {?>
                        <i><font color="#677882">no nickname present</font></i>
                    <?php } else { ?>
                        <?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['player']->value['short_name'], ENT_QUOTES, 'UTF-8', true);?>

                    <?php }?>
                </td>
                <td class="listtable_1<?php if ($_smarty_tpl->tpl_vars['player']->value['unbanned']) {?>_unbanned<?php } elseif ($_smarty_tpl->tpl_vars['player']->value['perm']) {?>_permanent<?php } elseif ($_smarty_tpl->tpl_vars['player']->value['temp']) {?>_banned<?php }?>"><?php echo $_smarty_tpl->tpl_vars['player']->value['length'];
if ($_smarty_tpl->tpl_vars['player']->value['unbanned']) {?> (<?php echo $_smarty_tpl->tpl_vars['player']->value['ub_reason'];?>
)<?php }?></td>
            </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </table>
</div>
<?php }
}
