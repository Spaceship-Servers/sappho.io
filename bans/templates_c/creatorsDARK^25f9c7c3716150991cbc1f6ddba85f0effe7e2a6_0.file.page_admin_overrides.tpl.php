<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:52:25
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_overrides.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f0c990d3a3_50012015',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '25f9c7c3716150991cbc1f6ddba85f0effe7e2a6' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_overrides.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f0c990d3a3_50012015 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tabcontent" id="Overrides">
    <?php if (!$_smarty_tpl->tpl_vars['permission_addadmin']->value) {?>
        Access Denied!
    <?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['overrides_error']->value != '') {?>
        <?php echo '<script'; ?>
 type="text/javascript">ShowBox("Error", "<?php echo $_smarty_tpl->tpl_vars['overrides_error']->value;?>
", "red");<?php echo '</script'; ?>
>
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['overrides_save_success']->value) {?>
        <?php echo '<script'; ?>
 type="text/javascript">ShowBox("Overrides updated", "The changes have been saved successfully.", "green", "index.php?p=admin&c=admins");<?php echo '</script'; ?>
>
    <?php }?>
        <div id="add-group">
            <form action="" method="post">
                <h3>Overrides</h3>
                With Overrides you can change the flags or permissions on any command, either globally, or for a specific group, without editing plugin source code.<br />
                <i>Read about <b><a href="http://wiki.alliedmods.net/Overriding_Command_Access_%28SourceMod%29" title="Overriding Command Access (SourceMod)" target="_blank">overriding command access</a></b> in the AlliedModders Wiki!</i><br /><br />
                Blanking out an overrides' name will delete it.<br /><br />
                <table align="center" cellspacing="0" cellpadding="4" id="overrides" width="90%">
                    <tr>
                        <td class="tablerow4">Type</td>
                        <td class="tablerow4">Name</td>
                        <td class="tablerow4">Flags</td>
                    </tr>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['overrides_list']->value, 'override');
$_smarty_tpl->tpl_vars['override']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['override']->value) {
$_smarty_tpl->tpl_vars['override']->do_else = false;
?>
                        <tr>
                            <td class="tablerow1">
                                <select name="override_type[]">
                                    <option<?php if ($_smarty_tpl->tpl_vars['override']->value['type'] == "command") {?> selected="selected"<?php }?> value="command">Command</option>
                                    <option<?php if ($_smarty_tpl->tpl_vars['override']->value['type'] == "group") {?> selected="selected"<?php }?> value="group">Group</option>
                                </select>
                                <input type="hidden" name="override_id[]" value="<?php echo $_smarty_tpl->tpl_vars['override']->value['id'];?>
" />
                            </td>
                            <td class="tablerow1"><input name="override_name[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['override']->value['name']);?>
" /></td>
                            <td class="tablerow1"><input name="override_flags[]" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['override']->value['flags']);?>
" /></td>
                        </tr>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    <tr>
                        <td class="tablerow1">
                            <select class="select" name="new_override_type">
                                <option value="command">Command</option>
                                <option value="group">Group</option>
                            </select>
                        </td>
                        <td class="tablerow1"><input class="textbox" name="new_override_name" /></td>
                        <td class="tablerow1"><input class="textbox" name="new_override_flags" /></td>
                    </tr>
                </table>
                <br />
                <center>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Save",'class'=>"ok",'id'=>"oversave",'submit'=>true),$_smarty_tpl ) );?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"oback"),$_smarty_tpl ) );?>

                </center>
            </form>
        </div>
    <?php }?>
</div>
</div>
<?php }
}
