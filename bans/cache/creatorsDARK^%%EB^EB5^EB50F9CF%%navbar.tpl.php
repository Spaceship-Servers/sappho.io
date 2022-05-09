<?php /* Smarty version 2.6.31, created on 2021-10-20 16:04:24
         compiled from core/navbar.tpl */ ?>
<div id="tabsWrapper">
    <div id="mainwrapper">
        <div id="tabs">
            <ul>
                <?php $_from = $this->_tpl_vars['navbar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['nav']):
?>
                    <li class="<?php echo $this->_tpl_vars['nav']['state']; ?>
">
                        <a href="index.php?p=<?php echo $this->_tpl_vars['nav']['endpoint']; ?>
" class="tip" title="<?php echo $this->_tpl_vars['nav']['title']; ?>
::<?php echo $this->_tpl_vars['nav']['description']; ?>
" target="_self"><?php echo $this->_tpl_vars['nav']['title']; ?>
</a>
                    </li>
                <?php endforeach; endif; unset($_from); ?>
            </ul>
            <div id="nav">
                <?php if ($this->_tpl_vars['isAdmin']): ?>
                    <?php $_from = $this->_tpl_vars['adminbar']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['admin']):
?>
                        <a class="nav_link <?php echo $this->_tpl_vars['admin']['state']; ?>
" href="index.php?p=admin&c=<?php echo $this->_tpl_vars['admin']['endpoint']; ?>
"><?php echo $this->_tpl_vars['admin']['title']; ?>
</a>
                    <?php endforeach; endif; unset($_from); ?>
                <?php endif; ?>
            </div>
            <?php if ($this->_tpl_vars['login']): ?>
            <div style="float: right;">
                <ul>
                    <li>
                        <a style="background-color: #B8383B;" href='index.php?p=logout'>Logout</a>
                    </li>
                </ul>
            </div>
            <div class="user">Welcome, <a href='index.php?p=account'><?php echo $this->_tpl_vars['username']; ?>
</a></div>
            <?php else: ?>
            <div style="float: right;">
                <ul>
                    <li>
                        <a style="background-color: #70B04A;" href='index.php?p=login'>Login</a>
                    </li>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<div id="mainwrapper">
    <div id="innerwrapper">