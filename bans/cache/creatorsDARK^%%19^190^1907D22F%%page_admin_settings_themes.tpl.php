<?php /* Smarty version 2.6.31, created on 2022-04-04 22:14:04
         compiled from page_admin_settings_themes.tpl */ ?>
<h3 align="left">Themes</h3>
<div id="current-theme-holder">
    <h4 class="largetitle">Selected Theme: <span id="theme.name"><?php echo $this->_tpl_vars['theme_name']; ?>
</span></h4>
    <div id="current-theme-screenshot">
        <?php echo $this->_tpl_vars['theme_screenshot']; ?>

    </div>
    <div id="current-theme-details">
        <table width="98%" cellspacing="0" cellpadding="3" align="left">
            <tr>
                <td><b>Theme Author:</b></td>
            </tr>
            <tr>
                <td><div id="theme.auth"><?php echo $this->_tpl_vars['theme_author']; ?>
</div></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><b>Theme Version:</b></td>
            </tr>
            <tr>
                <td><div id="theme.vers"><?php echo $this->_tpl_vars['theme_version']; ?>
</div></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><b>Theme Link:</b></td>
            </tr>
            <tr>
                <td><div id="theme.link"><a href="<?php echo $this->_tpl_vars['theme_link']; ?>
" target="_new"><?php echo $this->_tpl_vars['theme_link']; ?>
</a></div></td>
            </tr>
            <tr>
                <td align="right"><div id="theme.apply"></div></td>
            </tr>
        </table>
    </div>
</div>

<br />
<h4 class="largetitle">Available Themes</h4>
Click a theme below to see details about it.<br /><br />
<div id="theme-list">
    <ul>
        <?php $_from = $this->_tpl_vars['theme_list']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['theme']):
?>
            <li><a href="javascript:void(0);" onclick="javascript:xajax_SelTheme('<?php echo $this->_tpl_vars['theme']['dir']; ?>
');"><b><?php echo $this->_tpl_vars['theme']['name']; ?>
</b></a></li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>