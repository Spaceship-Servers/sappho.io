<?php /* Smarty version 2.6.31, created on 2021-10-21 21:25:21
         compiled from core/admin_tabs.tpl */ ?>
<div id="admin-page-menu">
    <?php $_from = $this->_tpl_vars['tabs']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['tab']):
?>
        <a onclick="openTab(this, '<?php echo $this->_tpl_vars['tab']['name']; ?>
');"><?php echo $this->_tpl_vars['tab']['name']; ?>
</a>
    <?php endforeach; endif; unset($_from); ?>
    <a href="javascript:history.go(-1);">Back</a>
</div>