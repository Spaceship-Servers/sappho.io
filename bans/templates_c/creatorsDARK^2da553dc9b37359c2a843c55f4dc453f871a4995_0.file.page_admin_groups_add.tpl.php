<?php
/* Smarty version 4.3.1, created on 2023-04-01 08:53:35
  from '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_groups_add.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.1',
  'unifunc' => 'content_6427f10f823405_99905818',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2da553dc9b37359c2a843c55f4dc453f871a4995' => 
    array (
      0 => '/var/www/sappho.io/bans/themes/creatorsDARK/page_admin_groups_add.tpl',
      1 => 1678938701,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6427f10f823405_99905818 (Smarty_Internal_Template $_smarty_tpl) {
if (!$_smarty_tpl->tpl_vars['permission_addgroup']->value) {?>
    Access Denied!
<?php } else { ?>
    <div id="add-group">
        <h3>New Group</h3>
        <table width="90%" style="border-collapse:collapse;" id="group.details" cellpadding="3">
            <tr>
                <td valign="top" width="35%">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Group Name",'message'=>"Type the name of the new group you want to create."),$_smarty_tpl ) );?>
Group Name
                    </div>
                </td>
                <td>
                    <div align="left">
                        <input type="text" TABINDEX=1 class="textbox" id="groupname" name="groupname" />
                    </div>
                    <div id="name.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td valign="top">
                    <div class="rowdesc">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['help_icon'][0], array( array('title'=>"Group Type",'message'=>"This defines the type of group you are about to create. This helps identify and catagorize the groups list."),$_smarty_tpl ) );?>
Group Type
                    </div>
                </td>
                <td>
                    <div align="left">
                        <select onchange="UpdateGroupPermissionCheckBoxes()" TABINDEX=2 class="select" name="grouptype" id="grouptype">
                            <option value="0">Please Select...</option>
                            <option value="1">Web Admin Group</option>
                            <option value="2">Server Admin Group</option>
                            <option value="3">Server Group</option>
                        </select>
                    </div>
                    <div id="type.msg" class="badentry"></div>
                </td>
            </tr>
            <tr>
                <td colspan="2" id="perms" valign="top" style="height:5px;overflow:hidden;"></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Save Changes",'onclick'=>"ProcessGroup();",'class'=>"ok",'id'=>"agroup",'submit'=>false),$_smarty_tpl ) );?>

                    &nbsp;
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['sb_button'][0], array( array('text'=>"Back",'onclick'=>"history.go(-1)",'class'=>"cancel",'id'=>"back",'submit'=>false),$_smarty_tpl ) );?>

                </td>
            </tr>
        </table>
    </div>
<?php }
}
}
