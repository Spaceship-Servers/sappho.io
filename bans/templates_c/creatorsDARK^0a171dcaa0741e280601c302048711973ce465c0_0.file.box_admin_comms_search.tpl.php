<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:08:08
  from '/var/www/sappho.io/bans/themes/creatorsDARK/box_admin_comms_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e66880b982_45712681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0a171dcaa0741e280601c302048711973ce465c0' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/box_admin_comms_search.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e66880b982_45712681 (Smarty_Internal_Template $_smarty_tpl) {
?><div align="center">
    <table width="50%" cellpadding="0" class="listtable" cellspacing="0">
        <tr class="sea_open">
            <td width="2%" height="16" class="listtable_top" colspan="3" style="text-align: center;"><b>Advanced Search</b> (Click)</td>
        </tr>
        <tr>
            <td>
                <div class="panel">
                    <table width="100%" cellpadding="0" class="listtable" cellspacing="0">
                        <tr>
                            <td class="listtable_1" width="8%" align="center"><input id="name" name="search_type" type="radio" value="name"></td>
                            <td class="listtable_1" width="26%">Nickname</td>
                            <td class="listtable_1" width="66%"><input class="textbox" type="text" id="nick" value="" onmouseup="$('name').checked = true" style="width: 87%;"></td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="steam_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Steam ID</td>
                            <td class="listtable_1" >
                                <input class="textbox" type="text" id="steamid" value="" onmouseup="$('steam_').checked = true" style="width: 50%; margin-right: 12px;"><select class="select" id="steam_match" onmouseup="$('steam_').checked = true" style="width: 33%;">
                                    <option value="0" selected>Exact Match</option>
                                    <option value="1">Partial Match</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="reason_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Reason</td>
                            <td class="listtable_1" ><input class="textbox" type="text" id="ban_reason" value="" onmouseup="$('reason_').checked = true" style="width: 87%;"></td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="date" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Date</td>
                            <td class="listtable_1" >
                                <input class="textbox" type="text" id="day" value="DD" onmouseup="$('date').checked = true" maxlength="2" style="width: 22%;">
                                <input class="textbox" type="text" id="month" value="MM" onmouseup="$('date').checked = true" maxlength="2" style="width: 22%;">
                                <input class="textbox" type="text" id="year" value="YY" onmouseup="$('date').checked = true" maxlength="4" style="width: 24%;">
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="length_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Length</td>
                            <td class="listtable_1" >
                                <table border="0" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td>
                                            <select class="select" id="length_type" onmouseup="$('length_').checked = true" style="width: 60px; margin-right: 12px;">
                                                <option value="e" title="equal to">=</option>
                                                <option value="h" title="greater">&gt;</option>
                                                <option value="l" title="smaller">&lt;</option>
                                                <option value="eh" title="equal to or greater">&gt;=</option>
                                                <option value="el" title="equal to or smaller">&lt;=</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="text" id="other_length" name="other_length" onmouseup="$('length_').checked = true" style="border: 1px solid #000000; font-size: 12px; background-color: rgb(215, 215, 215);width: 190px;display:none;">
                                        </td>
                                        <td>
                                            <select class="select" id="length" onmouseup="$('length_').checked = true" onchange="switch_length(this);" onmouseover="if(this.options[this.selectedIndex].value=='other')$('length').setStyle('width', '210px');if(this.options[this.selectedIndex].value=='other')this.focus();" onblur="if(this.options[this.selectedIndex].value=='other')$('length').setStyle('width', '20px');" style="width: 127%;">
                                                <option value="0">Permanent</option>
                                                <optgroup label="minutes">
                                                    <option value="1">1 minute</option>
                                                    <option value="5">5 minutes</option>
                                                    <option value="10">10 minutes</option>
                                                    <option value="15">15 minutes</option>
                                                    <option value="30">30 minutes</option>
                                                    <option value="45">45 minutes</option>
                                                </optgroup>
                                                <optgroup label="hours">
                                                    <option value="60">1 hour</option>
                                                    <option value="120">2 hours</option>
                                                    <option value="180">3 hours</option>
                                                    <option value="240">4 hours</option>
                                                    <option value="480">8 hours</option>
                                                    <option value="720">12 hours</option>
                                                </optgroup>
                                                <optgroup label="days">
                                                    <option value="1440">1 day</option>
                                                    <option value="2880">2 days</option>
                                                    <option value="4320">3 days</option>
                                                    <option value="5760">4 days</option>
                                                    <option value="7200">5 days</option>
                                                    <option value="8640">6 days</option>
                                                </optgroup>
                                                <optgroup label="weeks">
                                                    <option value="10080">1 week</option>
                                                    <option value="20160">2 weeks</option>
                                                    <option value="30240">3 weeks</option>
                                                </optgroup>
                                                <optgroup label="months">
                                                    <option value="40320">1 month</option>
                                                    <option value="80640">2 months</option>
                                                    <option value="120960">3 months</option>
                                                    <option value="241920">6 months</option>
                                                    <option value="483840">12 months</option>
                                                </optgroup>
                                                <option value="other">Other length in minutes</option>
                                            </select>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="ban_type_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Type</td>
                            <td class="listtable_1" >
                                <select class="select" id="ban_type" onmouseup="$('ban_type_').checked = true" style="width: 95%;">
                                    <option value="1" selected>Mute</option>
                                    <option value="2">Gag</option>
                                </select>
                            </td>
                        </tr>
                        <?php if (!$_smarty_tpl->tpl_vars['hideadminname']->value) {?>
                        <tr>
                            <td class="listtable_1"  align="center"><input id="admin" name="search_type" type="radio" value="radiobutton"></td>
                            <td class="listtable_1" >Admin</td>
                            <td class="listtable_1" >
                                <select class="select" id="ban_admin" onmouseup="$('admin').checked = true" style="width: 95%;">
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
                <?php }?>
			    <tr>
			    	<td class="listtable_1"  align="center"><input id="where_banned" name="search_type" type="radio" value="radiobutton"></td>
					<td class="listtable_1" >Server</td>
			        <td class="listtable_1" >
						<select class="select" id="server" onmouseup="$('where_banned').checked = true" style="width: 95%;">
						<option label="Web Ban" value="0">Web Ban</option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['server_list']->value, 'server');
$_smarty_tpl->tpl_vars['server']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['server']->value) {
$_smarty_tpl->tpl_vars['server']->do_else = false;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
" id="ss<?php echo $_smarty_tpl->tpl_vars['server']->value['sid'];?>
">Retrieving Hostname... (<?php echo $_smarty_tpl->tpl_vars['server']->value['ip'];?>
:<?php echo $_smarty_tpl->tpl_vars['server']->value['port'];?>
)</option>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</select>            
					</td>
			    </tr>
				<?php if ($_smarty_tpl->tpl_vars['is_admin']->value) {?>
				<tr>
			        <td align="center" class="listtable_1" ><input id="comment_" type="radio" name="search_type" value="radiobutton"></td>
			        <td class="listtable_1" >Comment</td>
			        <td class="listtable_1" ><input class="textbox" type="text" id="ban_comment" value="" onmouseup="$('comment_').checked = true" style="width: 87%;"></td>
			    </tr>
				<?php }?>
			    <tr>
					<td colspan="4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Search",'onclick'=>"search_blocks();",'class'=>"ok searchbtn",'id'=>"searchbtn",'submit'=>false),$_smarty_tpl ) );?>
</td>
			    </tr>
			   </table>
			   </div>
		  </td>
		</tr>
	</table>
</div>
<?php echo $_smarty_tpl->tpl_vars['server_script']->value;?>

<?php echo '<script'; ?>
>InitAccordion('tr.sea_open', 'div.panel', 'mainwrapper');<?php echo '</script'; ?>
>
<?php }
}
