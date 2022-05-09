<?php /* Smarty version 2.6.31, created on 2021-11-02 18:42:43
         compiled from page_admin_servers_add.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help_icon', 'page_admin_servers_add.tpl', 12, false),array('function', 'sb_button', 'page_admin_servers_add.tpl', 113, false),)), $this); ?>
<div class="tabcontent" id="Add new server">
    <?php if (! $this->_tpl_vars['permission_addserver']): ?>
        Access Denied
    <?php else: ?>
        <div id="add-group">
            <h3>Server Details</h3>
            For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
            <input type="hidden" name="insert_type" value="add">
            <table width="90%" border="0" style="border-collapse:collapse;" id="group.details" cellpadding="3">
                <tr>
                    <td valign="top" width="35%">
                        <div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Server Address','message' => "This is the IP address to your server. You can also type a domain, if you have one setup."), $this);?>
Server IP/Domain</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="text" TABINDEX=1 class="textbox" id="address" name="address" value="<?php echo $this->_tpl_vars['ip']; ?>
" style="width: 203px" />
                        </div>
                        <div id="address.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Server Port','message' => "This is the port that the server is running off. <br /><br /><i>Default: 27015</i>"), $this);?>
Server Port</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="text" TABINDEX=2 class="textbox" id="port" name="port" value="<?php if ($this->_tpl_vars['port']): ?><?php echo $this->_tpl_vars['port']; ?>
<?php else: ?><?php echo 27015; ?>
<?php endif; ?>" style="width: 203px" />
                        </div>
                        <div id="port.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Rcon Password','message' => "This is your servers RCON password. This can be found in your server.cfg file next to <i>rcon_password</i>.<br /><br />This will be used to allow admins to administrate the server though the web interface."), $this);?>
RCON Password</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="password" TABINDEX=3 class="textbox" id="rcon" name="rcon" value="<?php echo $this->_tpl_vars['rcon']; ?>
" style="width: 203px" />
                        </div>
                        <div id="rcon.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Rcon Password','message' => "Please re-type your rcon password to avoid 'typos'"), $this);?>
RCON Password (Confirm)</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="password" TABINDEX=4 class="textbox" id="rcon2" name="rcon2" value="<?php echo $this->_tpl_vars['rcon']; ?>
" style="width: 203px" />
                        </div>
                        <div id="rcon2.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Server Mod','message' => "Select the mod that your server is currently running."), $this);?>
Server MOD </div>
                    </td>
                    <td>
                        <div align="left" id="admingroup">
                            <select name="mod" TABINDEX=5 onchange="" id="mod" class="select">
                                <?php if (! $this->_tpl_vars['edit_server']): ?>
                                    <option value="-2">Please Select...</option>
                                <?php endif; ?>
                                <?php $_from = ($this->_tpl_vars['modlist']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mod']):
?>
                                    <option value='<?php echo $this->_tpl_vars['mod']['mid']; ?>
'><?php echo $this->_tpl_vars['mod']['name']; ?>
</option>
                                <?php endforeach; endif; unset($_from); ?>
                            </select>
                        </div>
                        <div id="mod.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Enabled','message' => "Enables the server to be shown on the public servers list."), $this);?>
Enabled</div>
                    </td>
                    <td>
                        <div align="left">
                            <input type="checkbox" id="enabled" name="enabled" checked="checked" />
                        </div>
                        <div id="enabled.msg" class="badentry"></div>
                    </td>
                </tr>

                <tr>
                    <td valign="middle">
                        <div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Server Groups','message' => "Choose the groups to add this server to. Server groups are used for adding admins to specific sets of servers."), $this);?>
Server Groups </div>
                    </td>
                    <td>&nbsp;</td>
                </tr>
                <?php $_from = ($this->_tpl_vars['grouplist']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['group']):
?>
                    <tr>
                        <td valign="middle">
                            <div align="right"><?php echo $this->_tpl_vars['group']['name']; ?>
 </div>
                        </td>
                        <td>
                            <div align="left">
                                <input type="checkbox" value="<?php echo $this->_tpl_vars['group']['gid']; ?>
" id="g_<?php echo $this->_tpl_vars['group']['gid']; ?>
" name="groups[]" />
                            </div>
                        </td>
                    </tr>
                <?php endforeach; endif; unset($_from); ?>
                <tr id="nsgroup" valign="top" class="badentry">
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>
                        <?php if ($this->_tpl_vars['edit_server']): ?>
                            <?php echo smarty_function_sb_button(array('text' => $this->_tpl_vars['submit_text'],'onclick' => "process_edit_server();",'class' => 'ok','id' => 'aserver','submit' => false), $this);?>

                        <?php else: ?>
                            <?php echo smarty_function_sb_button(array('text' => $this->_tpl_vars['submit_text'],'onclick' => "process_add_server();",'class' => 'ok','id' => 'aserver','submit' => false), $this);?>

                        <?php endif; ?>
                        &nbsp;
                        <?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'back','submit' => false), $this);?>

                    </td>
                </tr>
            </table>
        </div>
    <?php endif; ?>
</div>
</div>