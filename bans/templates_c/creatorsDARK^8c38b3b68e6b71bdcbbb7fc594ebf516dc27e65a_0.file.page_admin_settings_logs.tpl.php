<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:20
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_settings_logs.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e728257d35_52951380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8c38b3b68e6b71bdcbbb7fc594ebf516dc27e65a' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_settings_logs.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e728257d35_52951380 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/sappho.io/bans/includes/vendor/smarty/smarty/libs/plugins/block.textformat.php','function'=>'smarty_block_textformat',),));
?>
<h3 align="left">System Log <?php echo $_smarty_tpl->tpl_vars['clear_logs']->value;?>
</h3>
Click on a row to see more details about the event.
<br /><br />
<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['load_template'][0], array( array('file'=>"admin.log.search"),$_smarty_tpl ) );?>


<div id="banlist-nav"><?php echo $_smarty_tpl->tpl_vars['page_numbers']->value;?>
</div>
<br /><br />

<table width="100%" cellspacing="0" cellpadding="0" align="center" class="listtable">
    <tr>
        <td width="5%" height="16" class="listtable_top" align="center"><b>Type</b></td>
        <td width="28%" height="16" class="listtable_top" align="center"><b>Event</b></td>
        <td width="28%" height="16" class="listtable_top" align="center"><b>User</b></td>
        <td width="" height="16" class="listtable_top"><b>Date/Time</b></td>
    </tr>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['log_items']->value, 'log');
$_smarty_tpl->tpl_vars['log']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['log']->value) {
$_smarty_tpl->tpl_vars['log']->do_else = false;
?>
        <tr class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
            <td height="16" align="center" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['log']->value['type_img'];?>
</td>
            <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['log']->value['title'];?>
</td>
            <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['log']->value['user'];?>
</td>
            <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['log']->value['date_str'];?>
</td>
        </tr>
        <tr>
            <td colspan="7" align="center">
                <div class="opener">
                    <table width="80%" cellspacing="0" cellpadding="0" class="listtable">
                        <tr>
                            <td height="16" align="left" class="listtable_top" colspan="3">
                                <b>Event Details</b>
                            </td>
                        </tr>
                        <tr align="left">
                            <td width="20%" height="16" class="listtable_1">Details</td>
                            <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['log']->value['message'];?>
</td>
                        </tr>
                        <tr align="left">
                            <td width="20%" height="16" class="listtable_1">Parent Function</td>
                            <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['log']->value['function'];?>
</td>
                        </tr>
                        <tr align="left">
                            <td width="20%" height="16" class="listtable_1">Query String</td>
                            <td height="16" class="listtable_1"><?php $_smarty_tpl->smarty->_cache['_tag_stack'][] = array('textformat', array('wrap'=>62,'wrap_cut'=>true));
$_block_repeat=true;
echo smarty_block_textformat(array('wrap'=>62,'wrap_cut'=>true), null, $_smarty_tpl, $_block_repeat);
while ($_block_repeat) {
ob_start();
echo $_smarty_tpl->tpl_vars['log']->value['query'];
$_block_repeat=false;
echo smarty_block_textformat(array('wrap'=>62,'wrap_cut'=>true), ob_get_clean(), $_smarty_tpl, $_block_repeat);
}
array_pop($_smarty_tpl->smarty->_cache['_tag_stack']);?></td>
                        </tr>
                        <tr align="left">
                            <td width="20%" height="16" class="listtable_1">IP</td>
                            <td height="16" class="listtable_1"><?php echo $_smarty_tpl->tpl_vars['log']->value['host'];?>
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
 type="text/javascript">
    InitAccordion('tr.opener', 'div.opener', 'mainwrapper');
<?php echo '</script'; ?>
>
<?php }
}
