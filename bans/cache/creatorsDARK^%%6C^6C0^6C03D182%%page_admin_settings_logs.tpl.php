<?php /* Smarty version 2.6.31, created on 2022-04-04 22:14:04
         compiled from page_admin_settings_logs.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'textformat', 'page_admin_settings_logs.tpl', 43, false),)), $this); ?>
<h3 align="left">System Log <?php echo $this->_tpl_vars['clear_logs']; ?>
</h3>
Click on a row to see more details about the event.
<br /><br />
<?php  require (TEMPLATES_PATH . "/admin.log.search.php"); ?>

<div id="banlist-nav"><?php echo $this->_tpl_vars['page_numbers']; ?>
</div>
<br /><br />

<table width="100%" cellspacing="0" cellpadding="0" align="center" class="listtable">
    <tr>
        <td width="5%" height="16" class="listtable_top" align="center"><b>Type</b></td>
        <td width="28%" height="16" class="listtable_top" align="center"><b>Event</b></td>
        <td width="28%" height="16" class="listtable_top" align="center"><b>User</b></td>
        <td width="" height="16" class="listtable_top"><b>Date/Time</b></td>
    </tr>

    <?php $_from = ($this->_tpl_vars['log_items']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['log']):
?>
        <tr class="opener tbl_out" onmouseout="this.className='tbl_out'" onmouseover="this.className='tbl_hover'">
            <td height="16" align="center" class="listtable_1"><?php echo $this->_tpl_vars['log']['type_img']; ?>
</td>
            <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['log']['title']; ?>
</td>
            <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['log']['user']; ?>
</td>
            <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['log']['date_str']; ?>
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
                            <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['log']['message']; ?>
</td>
                        </tr>
                        <tr align="left">
                            <td width="20%" height="16" class="listtable_1">Parent Function</td>
                            <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['log']['function']; ?>
</td>
                        </tr>
                        <tr align="left">
                            <td width="20%" height="16" class="listtable_1">Query String</td>
                            <td height="16" class="listtable_1"><?php $this->_tag_stack[] = array('textformat', array('wrap' => 62,'wrap_cut' => true)); $_block_repeat=true;smarty_block_textformat($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?><?php echo $this->_tpl_vars['log']['query']; ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_textformat($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?></td>
                        </tr>
                        <tr align="left">
                            <td width="20%" height="16" class="listtable_1">IP</td>
                            <td height="16" class="listtable_1"><?php echo $this->_tpl_vars['log']['host']; ?>
</td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    <?php endforeach; endif; unset($_from); ?>
</table>
<script type="text/javascript">
    InitAccordion('tr.opener', 'div.opener', 'mainwrapper');
</script>