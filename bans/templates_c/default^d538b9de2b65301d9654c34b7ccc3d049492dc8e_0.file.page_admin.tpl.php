<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:16:56
  from '/var/www/sappho.io/bans/themes/default/page_admin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e878241f94_15705582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd538b9de2b65301d9654c34b7ccc3d049492dc8e' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/default/page_admin.tpl',
      1 => 1678850778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e878241f94_15705582 (Smarty_Internal_Template $_smarty_tpl) {
?><table style="width: 101%; margin: 0 0 -2px -2px;">
    <tr>
        <td colspan="3" class="listtable_top"><b>Please select an option to administer</b></td>
    </tr>
</table>
<div id="cpanel">
    <ul>
        <?php if ($_smarty_tpl->tpl_vars['access_admins']->value) {?>
            <li>
                <a href="index.php?p=admin&amp;c=admins">
                    <i class="fas fa-user fa-5x"></i>
                    <br/><br/>
                    <b>Admin Settings</b>
                </a>
            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['access_servers']->value) {?>
            <li>
                <a href="index.php?p=admin&amp;c=servers">
                    <i class="fas fa-server fa-5x"></i>
                    <br/><br/>
                    <b>Server Settings</b>
                </a>
            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['access_bans']->value) {?>
            <li>
                <a href="index.php?p=admin&amp;c=bans">
                    <i class="fas fa-times fa-5x"></i>
                    <br/><br/>
                    <b>Bans</b>
                </a>
            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['access_bans']->value) {?>
            <li>
                <a href="index.php?p=admin&amp;c=comms">
                    <i class="fas fa-volume-off fa-5x"></i>
                    <br/><br/>
                    <b>Comms</b>
                </a>
            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['access_groups']->value) {?>
            <li>
                <a href="index.php?p=admin&amp;c=groups">
                    <i class="fas fa-users fa-5x"></i>
                    <br/><br/>
                    <b>Group Settings</b>
                </a>
            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['access_settings']->value) {?>
            <li>
                <a href="index.php?p=admin&amp;c=settings">
                    <i class="fas fa-cogs fa-5x"></i>
                    <br/><br/>
                    <b>Webpanel Settings</b>
                </a>
            </li>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['access_mods']->value) {?>
            <li>
                <a href="index.php?p=admin&amp;c=mods">
                    <i class="fas fa-cubes fa-5x"></i>
                    <br/><br/>
                    <b>Manage Mods</b>
                </a>
            </li>
        <?php }?>
    </ul>
</div>
<br />

<table width="100%" border="0" cellpadding="3" cellspacing="0">
    <tr>
        <td width="33%" class="listtable_top" align="center" style="border-right: 3px solid #CFCAC6;">Version Information</td>
        <td width="33%" class="listtable_top" align="center" style="border-right: 3px solid #CFCAC6; border-left: 3px solid #CFCAC6;">Admin Information</td>
        <td width="33%" class="listtable_top" align="center" style="border-left: 3px solid #CFCAC6;">Ban Information</td>
    </tr>
    <tr>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6;">Latest release: <strong id='relver'>Please Wait...</strong></td>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6; border-left: 3px solid #CFCAC6;">Total admins: <strong><?php echo $_smarty_tpl->tpl_vars['total_admins']->value;?>
</strong></td>
        <td class="listtable_1" style="border-left: 3px solid #CFCAC6;">Total bans: <strong><?php echo $_smarty_tpl->tpl_vars['total_bans']->value;?>
</strong></td>
    </tr>
    <tr>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6;">
            <?php if ($_smarty_tpl->tpl_vars['dev']->value) {?>
                Latest Git: <strong id='svnrev'>Please Wait...</strong>
            <?php }?>
        </td>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6; border-left: 3px solid #CFCAC6;">&nbsp;</td>
        <td class="listtable_1" style="border-left: 3px solid #CFCAC6;">Total comms: <strong><?php echo $_smarty_tpl->tpl_vars['total_comms']->value;?>
</strong></td>
    </tr>
    <tr>
        <td class="listtable_1" id='versionmsg' style="border-right: 3px solid #CFCAC6;">Please Wait...</td>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6; border-left: 3px solid #CFCAC6;"><strong> </strong></td>
        <td class="listtable_1" style="border-left: 3px solid #CFCAC6;">Connections Blocked: <strong><?php echo $_smarty_tpl->tpl_vars['total_blocks']->value;?>
</strong></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td width="33%" class="listtable_top" align="center" style="border-right: 3px solid #CFCAC6;">Server Information</td>
        <td width="33%" class="listtable_top" align="center" style="border-right: 3px solid #CFCAC6; border-left: 3px solid #CFCAC6;">Protest Information</td>
        <td width="33%" class="listtable_top" align="center" style="border-left: 3px solid #CFCAC6;">Submission Information</td>
    </tr>
    <tr>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6;">Total Servers: <strong><?php echo $_smarty_tpl->tpl_vars['total_servers']->value;?>
</strong></td>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6; border-left: 3px solid #CFCAC6;">Pending Protests: <strong><?php echo $_smarty_tpl->tpl_vars['total_protests']->value;?>
</strong></td>
        <td class="listtable_1" style="border-left: 3px solid #CFCAC6;">Pending Submissions: <strong><?php echo $_smarty_tpl->tpl_vars['total_submissions']->value;?>
</strong></td>
    </tr>
    <tr>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6;">Total demo size: <strong><?php echo $_smarty_tpl->tpl_vars['demosize']->value;?>
</td>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6; border-left: 3px solid #CFCAC6;">Archived Protests: <strong><?php echo $_smarty_tpl->tpl_vars['archived_protests']->value;?>
</strong></td>
        <td class="listtable_1" style="border-left: 3px solid #CFCAC6;">Archived Submissions: <strong><?php echo $_smarty_tpl->tpl_vars['archived_submissions']->value;?>
</strong></td>
    </tr>
    <tr>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6;">&nbsp;</td>
        <td class="listtable_1" style="border-right: 3px solid #CFCAC6; border-left: 3px solid #CFCAC6;">&nbsp;</td>
        <td class="listtable_1" style="border-left: 3px solid #CFCAC6;">&nbsp;</td>
    </tr>
</table>
<?php echo '<script'; ?>
 type="text/javascript">xajax_CheckVersion();<?php echo '</script'; ?>
>
<?php }
}
