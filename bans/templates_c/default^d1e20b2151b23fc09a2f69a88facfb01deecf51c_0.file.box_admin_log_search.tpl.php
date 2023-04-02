<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:26
  from '/var/www/sappho.io/bans/themes/default/box_admin_log_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e72e3e2b20_55569641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd1e20b2151b23fc09a2f69a88facfb01deecf51c' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/default/box_admin_log_search.tpl',
      1 => 1678850778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e72e3e2b20_55569641 (Smarty_Internal_Template $_smarty_tpl) {
?><div align="center">
    <table width="80%" cellpadding="0" class="listtable" cellspacing="0">
        <tr class="sea_open">
            <td width="2%" height="16" class="listtable_top" colspan="3" style="text-align: center;"><b>Advanced Search<b> (Click)</td>
        </tr>
        <tr>
            <td>
                <div class="panel">
                    <table width="100%" cellpadding="0" class="listtable" cellspacing="0">
                        <tr>
                            <td class="listtable_1" width="8%" align="center"><input id="admin_" name="search_type" type="radio" value="radiobutton"></td>
                            <td class="listtable_1" width="26%">Admin</td>
                            <td class="listtable_1" width="66%">
                                <select class="select" id="admin" onmouseup="$('admin_').checked = true" style="width: 100%;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admin_list']->value, 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
                                    <option label="<?php echo $_smarty_tpl->tpl_vars['admin']->value['user'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['admin']->value['aid'];?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value['user'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="listtable_1" align="center"><input id="message_" name="search_type" type="radio" value="radiobutton"></td>
                            <td class="listtable_1">Message</td>
                            <td class="listtable_1"><input class="textbox" type="text" id="message" value="" onmouseup="$('message_').checked = true" style="width:  93%;"></td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="date_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Date</td>
                            <td class="listtable_1" >
                                <input class="textbox" type="text" id="day" value="DD" onmouseup="$('date_').checked = true" maxlength="2" style="width: 18px;"> .
                                <input class="textbox" type="text" id="month" value="MM" onmouseup="$('date_').checked = true" maxlength="2" style="width: 18px;"> .
                                <input class="textbox" type="text" id="year" value="YYYY" onmouseup="$('date_').checked = true" maxlength="4" style="width: 30px;">
                                &nbsp;<input class="textbox" type="text" id="fhour" value="00" onmouseup="$('date_').checked = true" maxlength="2" style="width: 16px;"> :
                                <input class="textbox" type="text" id="fminute" value="00" onmouseup="$('date_').checked = true" maxlength="2" style="width: 16px;">
                                -&nbsp;<input class="textbox" type="text" id="thour" value="23" onmouseup="$('date_').checked = true" maxlength="2" style="width: 16px;"> :
                                <input class="textbox" type="text" id="tminute" value="59" onmouseup="$('date_').checked = true" maxlength="2" style="width: 16px;">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="type_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Type</td>
                            <td class="listtable_1" >
                                <select class="select" id="type" onmouseup="$('type_').checked = true" style="width: 100%;">
                                    <option label="Message" value="m">Message</option>
                                    <option label="Warning" value="w">Warning</option>
                                    <option label="Error" value="e">Error</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Search",'onclick'=>"search_log();",'class'=>"ok",'id'=>"searchbtn",'submit'=>false),$_smarty_tpl ) );?>
</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table>
</div>
<?php echo '<script'; ?>
>InitAccordion('tr.sea_open', 'div.panel', 'mainwrapper');<?php echo '</script'; ?>
><?php }
}
