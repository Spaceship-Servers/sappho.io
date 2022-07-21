<?php
/* Smarty version 3.1.44, created on 2022-05-14 19:55:59
  from '/var/www/sappho.io/bans/themes/creatorsDARK/core/navbar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.44',
  'unifunc' => 'content_6280418f578905_76446125',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8bd23ee43b4726bff91d08c38d12123c629256c0' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/core/navbar.tpl',
      1 => 1634755132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6280418f578905_76446125 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="tabsWrapper">
    <div id="mainwrapper">
        <div id="tabs">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['navbar']->value, 'nav');
$_smarty_tpl->tpl_vars['nav']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['nav']->value) {
$_smarty_tpl->tpl_vars['nav']->do_else = false;
?>
                    <li class="<?php echo $_smarty_tpl->tpl_vars['nav']->value['state'];?>
">
                        <a href="index.php?p=<?php echo $_smarty_tpl->tpl_vars['nav']->value['endpoint'];?>
" class="tip" title="<?php echo $_smarty_tpl->tpl_vars['nav']->value['title'];?>
::<?php echo $_smarty_tpl->tpl_vars['nav']->value['description'];?>
" target="_self"><?php echo $_smarty_tpl->tpl_vars['nav']->value['title'];?>
</a>
                    </li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
            <div id="nav">
                <?php if ($_smarty_tpl->tpl_vars['isAdmin']->value) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['adminbar']->value, 'admin');
$_smarty_tpl->tpl_vars['admin']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['admin']->value) {
$_smarty_tpl->tpl_vars['admin']->do_else = false;
?>
                        <a class="nav_link <?php echo $_smarty_tpl->tpl_vars['admin']->value['state'];?>
" href="index.php?p=admin&c=<?php echo $_smarty_tpl->tpl_vars['admin']->value['endpoint'];?>
"><?php echo $_smarty_tpl->tpl_vars['admin']->value['title'];?>
</a>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            </div>
            <?php if ($_smarty_tpl->tpl_vars['login']->value) {?>
            <div style="float: right;">
                <ul>
                    <li>
                        <a style="background-color: #B8383B;" href='index.php?p=logout'>Logout</a>
                    </li>
                </ul>
            </div>
            <div class="user">Welcome, <a href='index.php?p=account'><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a></div>
            <?php } else { ?>
            <div style="float: right;">
                <ul>
                    <li>
                        <a style="background-color: #70B04A;" href='index.php?p=login'>Login</a>
                    </li>
                </ul>
            </div>
            <?php }?>
        </div>
    </div>
</div>
<div id="mainwrapper">
    <div id="innerwrapper">
<?php }
}
