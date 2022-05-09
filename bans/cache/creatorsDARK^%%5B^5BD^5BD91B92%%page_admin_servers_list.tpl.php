<?php /* Smarty version 2.6.31, created on 2021-11-02 18:42:43
         compiled from page_admin_servers_list.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'help_icon', 'page_admin_servers_list.tpl', 46, false),array('function', 'sb_button', 'page_admin_servers_list.tpl', 47, false),)), $this); ?>
<div id="admin-page-content">
    <div class="tabcontent" id="List servers">
        <?php if (! $this->_tpl_vars['permission_list']): ?>
            Access Denied
        <?php else: ?>
            <h3>Servers (<span id="srvcount"><?php echo $this->_tpl_vars['server_count']; ?>
</span>)</h3>

            <table width="100%" cellpadding="1">
                <tr>
                    <td class="front-module-header" width="3%" height='16'><strong>ID</strong></td>
                    <td class="front-module-header" width="54%" height='16'><strong>Hostname</strong></td>
                    <td class="front-module-header" width="6%" height='16'><strong>Players</strong></td>
                    <td class="front-module-header" width="5%" height='16'><strong>Mod</strong></td>
                    <td class="front-module-header" height='16'><strong>Action</strong></td>
                </tr>
                <?php $_from = ($this->_tpl_vars['server_list']); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['server']):
?>

                    <script>xajax_ServerHostPlayers(<?php echo $this->_tpl_vars['server']['sid']; ?>
);</script>
                    <tr id="sid_<?php echo $this->_tpl_vars['server']['sid']; ?>
" <?php if ($this->_tpl_vars['server']['enabled'] == 0): ?>style="background-color:#eaeaea" title="Disabled"<?php endif; ?>>
                        <td style="border-bottom: solid 1px #ccc" height='16'><?php echo $this->_tpl_vars['server']['sid']; ?>
</td>
                        <td style="border-bottom: solid 1px #ccc" height='16' id="host_<?php echo $this->_tpl_vars['server']['sid']; ?>
"><i>Querying Server Data...</i></td>
                        <td style="border-bottom: solid 1px #ccc" height='16' id="players_<?php echo $this->_tpl_vars['server']['sid']; ?>
">N/A</td>
                        <td style="border-bottom: solid 1px #ccc" height='16'><img width="16px" height="16px" src="images/games/<?php echo $this->_tpl_vars['server']['icon']; ?>
"></td>
                        <td style="border-bottom: solid 1px #ccc" height='16'>
                            <?php if ($this->_tpl_vars['server']['rcon_access']): ?>
                                <a href="index.php?p=admin&c=servers&o=rcon&id=<?php echo $this->_tpl_vars['server']['sid']; ?>
">RCON</a> -
                            <?php endif; ?>

                            <a href="index.php?p=admin&c=servers&o=admincheck&id=<?php echo $this->_tpl_vars['server']['sid']; ?>
">Admins</a>

                            <?php if ($this->_tpl_vars['permission_editserver']): ?>
                                - <a href="index.php?p=admin&c=servers&o=edit&id=<?php echo $this->_tpl_vars['server']['sid']; ?>
">Edit</a>
                            <?php endif; ?>

                            <?php if ($this->_tpl_vars['pemission_delserver']): ?>
                                - <a href="#" onclick="RemoveServer(<?php echo $this->_tpl_vars['server']['sid']; ?>
, '<?php echo $this->_tpl_vars['server']['ip']; ?>
:<?php echo $this->_tpl_vars['server']['port']; ?>
');">Delete</a>
                            <?php endif; ?>
                        </td>
                    </tr>

                <?php endforeach; endif; unset($_from); ?>
            </table>
            <?php if ($this->_tpl_vars['permission_addserver']): ?>
                <br />
                <div class="rowdesc">
                    <?php echo smarty_function_help_icon(array('title' => 'Upload Map Image','message' => "Click here to upload a screenshot of a map. Use the mapname as filename."), $this);?>
Upload Map Image
                    <?php echo smarty_function_sb_button(array('text' => 'Upload Map Image','onclick' => "childWindow=open('pages/admin.uploadmapimg.php','upload','resizable=yes,width=300,height=130');",'class' => 'save','id' => 'upload'), $this);?>

                </div>
                <div id="mapimg.msg" style="color:#CC0000;"></div>
            <?php endif; ?>
        <?php endif; ?>
    </div>