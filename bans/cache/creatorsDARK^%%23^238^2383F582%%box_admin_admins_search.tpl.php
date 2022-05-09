<?php /* Smarty version 2.6.31, created on 2021-10-22 18:34:59
         compiled from box_admin_admins_search.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sb_button', 'box_admin_admins_search.tpl', 99, false),)), $this); ?>
<div align="center">
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
                        <?php if ($this->_tpl_vars['can_editadmin']): ?>
                            <tr>
                                <td class="listtable_1" width="8%" align="center"><input id="admemail_" name="search_type" type="radio" value="radiobutton"></td>
                                <td class="listtable_1" width="26%">E-Mail</td>
                                <td class="listtable_1" width="66%"><input class="textbox" type="text" id="admemail" value="" onmouseup="$('admemail_').checked = true" style="width: 353px;"></td>
                            </tr>
                        <?php endif; ?>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="webgroup_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Web Group</td>
                            <td class="listtable_1" >
                                <select class="select" id="webgroup" onmouseup="$('webgroup_').checked = true" style="width: 379px;">
                                    <?php $_from = ($this->_tpl_vars['webgroup_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['webgrp']):
?>
                                        <option label="<?php echo $this->_tpl_vars['webgrp']['name']; ?>
" value="<?php echo $this->_tpl_vars['webgrp']['gid']; ?>
"><?php echo $this->_tpl_vars['webgrp']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="srvadmgroup_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Serveradmin Group</td>
                            <td class="listtable_1" >
                                <select class="select" id="srvadmgroup" onmouseup="$('srvadmgroup_').checked = true" style="width: 379px;">
                                    <?php $_from = ($this->_tpl_vars['srvadmgroup_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['srvadmgrp']):
?>
                                        <option label="<?php echo $this->_tpl_vars['srvadmgrp']['name']; ?>
" value="<?php echo $this->_tpl_vars['srvadmgrp']['name']; ?>
"><?php echo $this->_tpl_vars['srvadmgrp']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td align="center" class="listtable_1" ><input id="srvgroup_" type="radio" name="search_type" value="radiobutton"></td>
                            <td class="listtable_1" >Server Group</td>
                            <td class="listtable_1" >
                                <select class="select" id="srvgroup" onmouseup="$('srvgroup_').checked = true" style="width: 379px;">
                                    <?php $_from = ($this->_tpl_vars['srvgroup_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['srvgrp']):
?>
                                        <option label="<?php echo $this->_tpl_vars['srvgrp']['name']; ?>
" value="<?php echo $this->_tpl_vars['srvgrp']['gid']; ?>
"><?php echo $this->_tpl_vars['srvgrp']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="listtable_1"  align="center"><input id="admwebflags_" name="search_type" type="radio" value="radiobutton"></td>
                            <td class="listtable_1" >Web Permissions</td>
                            <td class="listtable_1" >
                                <select class="select" id="admwebflag" name="admwebflag" onblur="getMultiple(this, 1);" size="5" multiple onmouseup="$('admwebflags_').checked = true" style="width: 379px;">
                                    <?php $_from = ($this->_tpl_vars['admwebflag_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admwebflag']):
?>
                                        <option label="<?php echo $this->_tpl_vars['admwebflag']['name']; ?>
" value="<?php echo $this->_tpl_vars['admwebflag']['flag']; ?>
"><?php echo $this->_tpl_vars['admwebflag']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="listtable_1"  align="center"><input id="admsrvflags_" name="search_type" type="radio" value="radiobutton"></td>
                            <td class="listtable_1" >Server Permissions</td>
                            <td class="listtable_1" >
                                <select class="select" id="admwebflag" name="admsrvflag" onblur="getMultiple(this, 2);" size="5" multiple onmouseup="$('admsrvflags_').checked = true" style="width: 379px;">
                                    <?php $_from = ($this->_tpl_vars['admsrvflag_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admsrvflag']):
?>
                                        <option label="<?php echo $this->_tpl_vars['admsrvflag']['name']; ?>
" value="<?php echo $this->_tpl_vars['admsrvflag']['flag']; ?>
"><?php echo $this->_tpl_vars['admsrvflag']['name']; ?>
</option>
                                    <?php endforeach; endif; unset($_from); ?>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="listtable_1"  align="center"><input id="admin_on_" name="search_type" type="radio" value="radiobutton"></td>
                            <td class="listtable_1" >Server</td>
                            <td class="listtable_1" >
                                <select class="select" id="server" onmouseup="$('admin_on_').checked = true" style="width: 379px;">
<?php $_from = ($this->_tpl_vars['server_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server']):
?>
								<option value="<?php echo $this->_tpl_vars['server']['sid']; ?>
" id="ss<?php echo $this->_tpl_vars['server']['sid']; ?>
">Retrieving Hostname... (<?php echo $this->_tpl_vars['server']['ip']; ?>
:<?php echo $this->_tpl_vars['server']['port']; ?>
)</option>
							<?php endforeach; endif; unset($_from); ?>
						</select>            
					</td>
			    </tr>
			    <tr colspan="3">
			        <td colspan="3"><?php echo smarty_function_sb_button(array('text' => 'Search','onclick' => "search_admins();",'class' => 'ok','id' => 'searchbtn','submit' => false), $this);?>
</td>
			    </tr>
			   </table>
			   </div>
		  </td>
		</tr>
	</table>
</div>
<?php echo $this->_tpl_vars['server_script']; ?>

<script>InitAccordion('tr.sea_open', 'div.panel', 'mainwrapper');</script>