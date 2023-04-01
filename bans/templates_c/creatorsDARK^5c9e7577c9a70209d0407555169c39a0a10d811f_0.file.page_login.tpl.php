<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:11:06
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e71ad3aa74_97425188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c9e7577c9a70209d0407555169c39a0a10d811f' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_login.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e71ad3aa74_97425188 (Smarty_Internal_Template $_smarty_tpl) {
?><table style="margin: 30px auto;">
    <tr>
        <td class="listtable_top"><b>Admin Login</b></td>
    </tr>
    <tr>
        <td class="listtable_1" style="padding: 15px;">
            <div id="login-content">
                <?php if ($_smarty_tpl->tpl_vars['steamlogin_show']->value == 1) {?>
                <div id="loginUsernameDiv">
                    <label for="loginUsername">Username:</label><br />
                    <input id="loginUsername" class="loginmedium" type="text" name="username"value="" />
                </div>
                <div id="loginUsername.msg" class="badentry"></div>

                <div id="loginPasswordDiv">
                    <label for="loginPassword">Password:</label><br />
                    <input id="loginPassword" class="loginmedium" type="password" name="password" value="" />
                </div>
                <div id="loginPassword.msg" class="badentry"></div>

                <div id="loginRememberMeDiv">
                    <input id="loginRememberMe" type="checkbox" class="checkbox" name="remember" value="checked" vspace="5px" />    <span class="checkbox" style="cursor:pointer;" onclick="($('loginRememberMe').checked?$('loginRememberMe').checked=false:$('loginRememberMe').checked=true)">Remember me</span>
                </div>
                <?php }?>
                <div id="loginSubmit">
                    <center><a href="index.php?p=login&o=steam"><img src="images/steamlogin.png"></a></center>
                    <br>
                    <?php if ($_smarty_tpl->tpl_vars['steamlogin_show']->value == 1) {?>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Login",'onclick'=>$_smarty_tpl->tpl_vars['redir']->value,'class'=>"ok login",'id'=>"alogin",'style'=>"width: 100%; text-transform: uppercase;",'submit'=>false),$_smarty_tpl ) );?>

                    <?php }?>
                </div>
                <?php if ($_smarty_tpl->tpl_vars['steamlogin_show']->value == 1) {?>
                <div id="loginOtherlinks">
                    <a href="index.php?p=lostpassword">Lost your password?</a>
                </div>
                <?php }?>
            </div>
        </td>
    </tr>
</table>

<?php echo '<script'; ?>
>
    $E('html').onkeydown = function(event){
        var event = new Event(event);
        if (event.key == 'enter' ) <?php echo $_smarty_tpl->tpl_vars['redir']->value;?>

    };$('loginRememberMeDiv').onkeydown = function(event){
        var event = new Event(event);
        if (event.key == 'space' ) $('loginRememberMeDiv').checked = true;
    };$('button').onkeydown = function(event){
        var event = new Event(event);
        if (event.key == 'space' ) <?php echo $_smarty_tpl->tpl_vars['redir']->value;?>

    };
<?php echo '</script'; ?>
>
<?php }
}
