<?php /* Smarty version 2.6.31, created on 2021-10-21 21:25:21
         compiled from page_admin_bans_import.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help_icon', 'page_admin_bans_import.tpl', 12, false),array('function', 'sb_button', 'page_admin_bans_import.tpl', 34, false),)), $this); ?>
<?php if (! $this->_tpl_vars['permission_import']): ?>
    Access Denied!
<?php else: ?>
    <h3>Import Bans</h3>
    For more information or help regarding a certain subject move your mouse over the question mark.<br /><br />
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="action" value="importBans" />
        <table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
            <tr>
                <td valign="top" width="25%">
                    <div class="rowdesc">
                        <?php echo smarty_function_help_icon(array('title' => 'File','message' => "Select the banned_users.cfg or banned_ip.cfg file to upload and add bans."), $this);?>
File
                    </div>
                </td>
                <td>
                    <div align="left">
                        <input type="file" TABINDEX=1 class="file" id="importFile" name="importFile" />
                    </div>
                    <div id="file.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top"><div class="rowdesc"><?php echo smarty_function_help_icon(array('title' => 'Get Names','message' => "Check this box, if you want to get the names of the players from their steam community profile. (just works with banned_users.cfg)"), $this);?>
Get Names</div></td>
                <td>
                    <div align="left">
                        <input type="checkbox" name="friendsname" id="friendsname" />
                    </div>
                    <div id="friendsname.msg" class="badentry"></div>
                </td>
            </tr>

            <tr>
                <td colspan="2" align="center">
                    <?php echo smarty_function_sb_button(array('text' => 'Import','class' => 'ok','id' => 'iban','submit' => true), $this);?>

                    &nbsp;
                    <?php echo smarty_function_sb_button(array('text' => 'Back','onclick' => "history.go(-1)",'class' => 'cancel','id' => 'iback'), $this);?>

                </td>
            </tr>
        </table>
    </form>
    <?php if (! $this->_tpl_vars['extreq']): ?>
        <script type="text/javascript">
            $('friendsname').disabled = true;
        </script>
    <?php endif; ?>
<?php endif; ?>