<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:52:25
  from '/var/www/sappho.io/bans/themes/creatorsDARK/box_admin_admins_search.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f0c98f5e10_69387269',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3080608c763cc0437ef83ad11a155edc8b29d774' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/box_admin_admins_search.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f0c98f5e10_69387269 (Smarty_Internal_Template $_smarty_tpl) {
?><div align="center">
    <table width="80%" cellpadding="0" class="listtable" cellspacing="0">
        <tr class="sea_open">
            <td width="2%" height="16" class="listtable_top" colspan="3" style="text-align: center;"><b>Advanced Search<b></td>
        </tr>
        <tr>
            <td>
                <div class="panel">
                    <table width="100%" cellpadding="0" class="listtable" cellspacing="0">
                        <tr>
                            <td class="listtable_1" width="8%" align="center"><input id="name_" name="search_type" type="radio" value="name"></td>
                            <td class="listtable_1" width="26%">Nickname</td>
                            <td class="listtable_1" width="66%"><input class="textbox" type="text" id="nick" value="" onmouseup="$('name_').checked = true" style="width: 353px;"></td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="steam_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >SteamID</td>
                            <td class="listtable_1" >
                                <input class="textbox" type="text" id="steamid" value="" onmouseup="$('steam_').checked = true" style="width: 233px; margin-right: 15px;"><select class="select" id="steam_match" onmouseup="$('steam_').checked = true" style="width: 105px;">
                                    <option value="0" selected>Exact Match</option>
                                    <option value="1">Partial Match</option>
                                </select>
                            </td>
                        </tr>
                        <?php if ($_smarty_tpl->tpl_vars['can_editadmin']->value) {?>
                            <tr>
                                <td class="listtable_1" width="8%" align="center"><input id="admemail_" name="search_type" type="radio" value="radiobutton"></td>
                                <td class="listtable_1" width="26%">E-Mail</td>
                                <td class="listtable_1" width="66%"><input class="textbox" type="text" id="admemail" value="" onmouseup="$('admemail_').checked = true" style="width: 353px;"></td>
                            </tr>
                        <?php }?>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="webgroup_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Web Group</td>
                            <td class="listtable_1" >
                                <select class="select" id="webgroup" onmouseup="$('webgroup_').checked = true" style="width: 379px;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['webgroup_list']->value, 'webgrp');
$_smarty_tpl->tpl_vars['webgrp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['webgrp']->value) {
$_smarty_tpl->tpl_vars['webgrp']->do_else = false;
?>
                                        <option label="<?php echo $_smarty_tpl->tpl_vars['webgrp']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['webgrp']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['webgrp']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="srvadmgroup_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Serveradmin Group</td>
                            <td class="listtable_1" >
                                <select class="select" id="srvadmgroup" onmouseup="$('srvadmgroup_').checked = true" style="width: 379px;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['srvadmgroup_list']->value, 'srvadmgrp');
$_smarty_tpl->tpl_vars['srvadmgrp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['srvadmgrp']->value) {
$_smarty_tpl->tpl_vars['srvadmgrp']->do_else = false;
?>
                                        <option label="<?php echo $_smarty_tpl->tpl_vars['srvadmgrp']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['srvadmgrp']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['srvadmgrp']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="srvgroup_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Server Group</td>
                            <td class="listtable_1" >
                                <select class="select" id="srvgroup" onmouseup="$('srvgroup_').checked = true" style="width: 379px;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['srvgroup_list']->value, 'srvgrp');
$_smarty_tpl->tpl_vars['srvgrp']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['srvgrp']->value) {
$_smarty_tpl->tpl_vars['srvgrp']->do_else = false;
?>
                                        <option label="<?php echo $_smarty_tpl->tpl_vars['srvgrp']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['srvgrp']->value['gid'];?>
"><?php echo $_smarty_tpl->tpl_vars['srvgrp']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="listtable_1"  align="center"><input id="admwebflags_" name="search_type" type="radio" value="radiobutton"></td>
                            <td class="listtable_1" >Web Permissions</td>
                            <td class="listtable_1" >
                                <select class="select" id="admwebflag" name="admwebflag" onblur="getMultiple(this, 1);" size="5" multiple onmouseup="$('admwebflags_').checked = true" style="width: 379px;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admwebflag_list']->value, 'admwebflag');
$_smarty_tpl->tpl_vars['admwebflag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admwebflag']->value) {
$_smarty_tpl->tpl_vars['admwebflag']->do_else = false;
?>
                                        <option label="<?php echo $_smarty_tpl->tpl_vars['admwebflag']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['admwebflag']->value['flag'];?>
"><?php echo $_smarty_tpl->tpl_vars['admwebflag']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="listtable_1"  align="center"><input id="admsrvflags_" name="search_type" type="radio" value="radiobutton"></td>
                            <td class="listtable_1" >Server Permissions</td>
                            <td class="listtable_1" >
                                <select class="select" id="admwebflag" name="admsrvflag" onblur="getMultiple(this, 2);" size="5" multiple onmouseup="$('admsrvflags_').checked = true" style="width: 379px;">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['admsrvflag_list']->value, 'admsrvflag');
$_smarty_tpl->tpl_vars['admsrvflag']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admsrvflag']->value) {
$_smarty_tpl->tpl_vars['admsrvflag']->do_else = false;
?>
                                        <option label="<?php echo $_smarty_tpl->tpl_vars['admsrvflag']->value['name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['admsrvflag']->value['flag'];?>
"><?php echo $_smarty_tpl->tpl_vars['admsrvflag']->value['name'];?>
</option>
                                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="listtable_1"  align="center"><input id="admin_on_" name="search_type" type="radio" value="radiobutton"></td>
                            <td class="listtable_1" >Server</td>
                            <td class="listtable_1" >
                                <select class="select" id="server" onmouseup="$('admin_on_').checked = true" style="width: 379px;">
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
			    <tr colspan="3">
			        <td colspan="3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Search",'onclick'=>"search_admins();",'class'=>"ok",'id'=>"searchbtn",'submit'=>false),$_smarty_tpl ) );?>
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
