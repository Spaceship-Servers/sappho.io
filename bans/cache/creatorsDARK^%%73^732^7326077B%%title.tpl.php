<?php /* Smarty version 2.6.31, created on 2021-10-20 16:04:24
         compiled from core/title.tpl */ ?>
<div id="dialog-placement" style="vertical-align:middle;display:none;opacity:0;text-align:center;width:892px;margin:0 auto;position:fixed !important;position:absolute;overflow:hidden;top:10px;left:100px;">
    <table width="460px" id="dialog-holder" class="dialog-holder" border="0" cellspacing="0" cellpadding="0" >
        <tbody width="460px">
        <tr>
            <td class="box-content">
                <h2 align="left" id="dialog-title" class="ok"></h2>
                <div class="dialog-content" align="left">
                    <div class="dialog-body">
                        <div class="clearfix">
                            <div style="float: left; margin-right: 15px;" id="dialog-icon" class="icon-info">&nbsp;</div>
                            <div style="width:360px;float: right; padding-bottom: 5px; font-size: 11px;" id="dialog-content-text"></div>
                        </div>
                    </div>
                    <div class="dialog-control" id="dialog-control">
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
<br/>
<div id="content_title">
    <b><?php echo $this->_tpl_vars['title']; ?>
</b>
</div>
<div id="breadcrumb">
    <?php $_from = $this->_tpl_vars['breadcrumb']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['crumb']):
?>
        &raquo; <a href="<?php echo $this->_tpl_vars['crumb']['url']; ?>
"><?php echo $this->_tpl_vars['crumb']['title']; ?>
</a>
    <?php endforeach; endif; unset($_from); ?>
</div>
<div id="content">