<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:59
         compiled from delice24/module/checkout_success.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/checkout_success.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_success'), $this);?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_navigation'), $this);?>
<ul id="checkoutnavigation">	<li class="inactive"><span class="number">1.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_shipping']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_shipping']; ?>
</span></li>	<li class="inactive"><span class="number">2.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_payment']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_payment']; ?>
</span></li>	<li class="inactive"><span class="number">3.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_confirmation']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_confirmation']; ?>
</span></li>	<li class="active"><span class="number">4.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_success']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_success']; ?>
</span></li></ul><div style="clear:both"></div><h2><?php echo $this->_config[0]['vars']['heading_success']; ?>
</h2><p><?php echo $this->_config[0]['vars']['text_success']; ?>
</p><h3><?php echo $this->_config[0]['vars']['title_printorder']; ?>
</h3><p><?php echo $this->_config[0]['vars']['text_printorder']; ?>
<br /><strong><?php echo $this->_config[0]['vars']['text_thankyou']; ?>
</strong></p><?php if ($this->_tpl_vars['GV_SEND_LINK']): ?><p><?php echo $this->_config[0]['vars']['gv_has_vouchera']; ?>
 <?php echo $this->_tpl_vars['GV_SEND_LINK']; ?>
 <?php echo $this->_config[0]['vars']['gv_has_voucherb']; ?>
</p><?php endif; ?><?php if ($this->_tpl_vars['MODULE_sofort_vorkasse']): ?><p><?php echo $this->_tpl_vars['MODULE_sofort_vorkasse']; ?>
</p><?php endif; ?><?php echo $this->_tpl_vars['FORM_ACTION_PRINT']; ?>
<div style="float:left;"><?php echo $this->_tpl_vars['BUTTON_PRINT']; ?>
</div><?php echo $this->_tpl_vars['FORM_END']; ?>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>
<div style="float:left; padding-left:5px;"><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</div><div style="clear:left;"></div><?php if ($this->_tpl_vars['downloads_content'] != ''): ?><?php if ($this->_tpl_vars['title_downloadfiles'] != ''): ?><h3><?php echo $this->_config[0]['vars']['title_downloadfiles']; ?>
</h3><?php endif; ?><?php echo $this->_tpl_vars['downloads_content']; ?>
<?php endif; ?><!-- Google Conversion-tracking start !--><?php if ($this->_tpl_vars['google_tracking'] == 'true'): ?><p><?php echo $this->_tpl_vars['tracking_code']; ?>
</p><?php endif; ?><!-- Google Conversion-tracking end !--><?php echo $this->_tpl_vars['FORM_END']; ?>
