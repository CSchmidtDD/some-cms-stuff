<?php /* Smarty version 2.6.27, created on 2015-12-01 07:01:38
         compiled from delice24/module/checkout_shipping_address.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/checkout_shipping_address.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_shipping_address'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_address']; ?>
</h2>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<?php if ($this->_tpl_vars['error'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
<p><?php echo $this->_config[0]['vars']['text_current_address']; ?>
</p>
<h3><?php echo $this->_config[0]['vars']['title_current_address']; ?>
:</h3>
<p><?php echo $this->_tpl_vars['ADDRESS_LABEL']; ?>
</p>
<?php if ($this->_tpl_vars['BLOCK_ADDRESS']): ?>
<h3><?php echo $this->_config[0]['vars']['title_old_addresses']; ?>
</h3>
<p><?php echo $this->_config[0]['vars']['text_old_addresses']; ?>
</p>
<p><?php echo $this->_tpl_vars['BLOCK_ADDRESS']; ?>
</p>
<?php endif; ?>
<?php if ($this->_tpl_vars['MODULE_new_address']): ?>
<?php echo $this->_tpl_vars['MODULE_new_address']; ?>

<?php endif; ?>
<p><?php echo $this->_tpl_vars['BUTTON_BACK']; ?>
&nbsp;<?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</p>
<?php echo $this->_tpl_vars['FORM_END']; ?>
