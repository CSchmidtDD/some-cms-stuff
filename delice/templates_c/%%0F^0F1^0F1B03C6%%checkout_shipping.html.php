<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:46
         compiled from delice24/module/checkout_shipping.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/checkout_shipping.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_shipping'), $this);?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_navigation'), $this);?>
<ul id="checkoutnavigation">	<li class="active"><span class="number">1.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_shipping']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_shipping']; ?>
</span></li>	<li class="inactive"><span class="number">2.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_payment']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_payment']; ?>
</span></li>	<li class="inactive"><span class="number">3.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_confirmation']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_confirmation']; ?>
</span></li>	<li class="inactive"><span class="number">4.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_success']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_success']; ?>
</span></li></ul><div style="clear:both"></div><h2><?php echo $this->_config[0]['vars']['heading_shipping']; ?>
</h2><?php echo $this->_tpl_vars['FORM_ACTION']; ?>
<h3><?php echo $this->_config[0]['vars']['title_address']; ?>
:</h3><p><?php echo $this->_tpl_vars['ADDRESS_LABEL']; ?>
</p><p><?php echo $this->_tpl_vars['BUTTON_ADDRESS']; ?>
</p><h3><?php echo $this->_config[0]['vars']['title_shipping']; ?>
</h3><p><?php echo $this->_config[0]['vars']['text_shipping']; ?>
</p><?php echo $this->_tpl_vars['SHIPPING_BLOCK']; ?>
<p><?php echo $this->_tpl_vars['BUTON_CONTINUE']; ?>
</p><?php echo $this->_tpl_vars['FORM_END']; ?>
