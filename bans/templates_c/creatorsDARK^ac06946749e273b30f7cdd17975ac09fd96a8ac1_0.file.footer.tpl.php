<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:06:26
  from '/var/www/sappho.io/bans/themes/creatorsDARK/core/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427e602247c39_45226700',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ac06946749e273b30f7cdd17975ac09fd96a8ac1' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/core/footer.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427e602247c39_45226700 (Smarty_Internal_Template $_smarty_tpl) {
?>	</div></div></div>
	<div id="footer">
		<div id="mainwrapper" style="text-align: center;">
			<a href="https://sbpp.github.io/" target="_blank"><img src="images/logos/sb.png" alt="SourceBans" border="0" /></a><br/>
			<div id="footqversion" style="line-height: 20px;"><a style="color: #C1C1C1" href="https://sbpp.github.io/" target="_blank">SourceBans++</a> <?php echo $_smarty_tpl->tpl_vars['version']->value;
echo $_smarty_tpl->tpl_vars['git']->value;?>
</div>
		    <span style="line-height: 20px;">Powered by <a href="https://www.sourcemod.net" target="_blank" style="color: #C1C1C1">SourceMod</a></span><br />
		</div>
	</div>
</div>
<?php echo '<script'; ?>
>

<?php echo $_smarty_tpl->tpl_vars['query']->value;?>



window.addEvent('domready', function(){

	ProcessAdminTabs();

    var Tips2 = new Tips($('.tip'), {
        initialize:function(){
            this.fx = new Fx.Style(this.toolTip, 'opacity', {duration: 300, wait: false}).set(0);
        },
        onShow: function(toolTip) {
            this.fx.start(1);
        },
        onHide: function(toolTip) {
            this.fx.start(0);
        }
    });
    var Tips4 = new Tips($('.perm'), {
        className: 'perm'
    });
});

<?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
