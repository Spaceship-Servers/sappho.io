<?php /* Smarty version 2.6.31, created on 2022-04-26 05:36:04
         compiled from page_admin_servers_adminlist.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'page_admin_servers_adminlist.tpl', 11, false),)), $this); ?>
<h3>Admins on this server (<?php echo $this->_tpl_vars['admin_count']; ?>
)</h3>
<table width="100%" cellpadding="1" cellspacing="1" class="listtable">
    <tr >
        <td width="50%" height='16' class="listtable_top"><strong>Admin Name</strong></td>
        <td width="50%" height='16' class="listtable_top"><strong>Admin SteamID</strong></td>
    </tr>

    <?php $_from = $this->_tpl_vars['admin_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin']):
?>
        <?php if ($this->_tpl_vars['admin']['user']): ?>
            <tr class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
                <td class="listtable_1<?php if ($this->_tpl_vars['admin']['ingame']): ?>_unbanned<?php endif; ?>" style="border-bottom: solid 1px #ccc" height="16"><?php echo ((is_array($_tmp=$this->_tpl_vars['admin']['user'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td>
                <td class="listtable_1<?php if ($this->_tpl_vars['admin']['ingame']): ?>_unbanned<?php endif; ?>" style="border-bottom: solid 1px #ccc" height="16"><?php echo $this->_tpl_vars['admin']['authid']; ?>
</td>
            </tr>
            <tr align="left">
                <td colspan="7" align="center">
                    <div class="opener">
                        <?php if ($this->_tpl_vars['admin']['ingame']): ?>
                            <table width="80%" cellspacing="0" cellpadding="0" class="listtable">
                                <tr>
                                    <td height="16" align="left" class="listtable_top" colspan="5">
                                        <b>Admin Details Ingame</b>
                                    </td>
                                </tr>
                                <tr align="left">
                                    <td width="30%" height="16" class="listtable_1">Name</td>
                                    <td width="20%" height="16" class="listtable_1">Steam ID</td>
                                    <td width="20%" height="16" class="listtable_1">IP</td>
                                </tr>
                                <tr align="left">
                                    <td height="16" class="listtable_1">
                                        <?php echo ((is_array($_tmp=$this->_tpl_vars['admin']['iname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

                                    </td>
                                    <td height="16" class="listtable_1">
                                        <?php echo $this->_tpl_vars['admin']['authid']; ?>

                                    </td>
                                    <td height="16" class="listtable_1">
                                        <?php echo $this->_tpl_vars['admin']['iip']; ?>

                                    </td>
                                </tr>
                            </table>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
        <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>
</table>
<script>InitAccordion('tr.opener', 'div.opener', 'mainwrapper');</script>