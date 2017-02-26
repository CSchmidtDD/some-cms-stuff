<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:48
         compiled from delice24/module/checkout_payment.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/checkout_payment.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_payment'), $this);?>

<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_navigation'), $this);?>

<ul id="checkoutnavigation">
	<li class="inactive"><span class="number">1.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_shipping']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_shipping']; ?>
</span></li>
	<li class="active"><span class="number">2.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_payment']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_payment']; ?>
</span></li>
	<li class="inactive"><span class="number">3.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_confirmation']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_confirmation']; ?>
</span></li>
	<li class="inactive"><span class="number">4.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_success']; ?>
</span><br /><span class="description"><?php echo $this->_config[0]['vars']['desc_success']; ?>
</span></li>
</ul>
<div style="clear:both"></div>
<br />
<?php if ($this->_tpl_vars['error'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
<?php if ($this->_tpl_vars['step2'] != 'true'): ?>
<h3><?php echo $this->_config[0]['vars']['title_address']; ?>
</h3>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<p><?php echo $this->_tpl_vars['ADDRESS_LABEL']; ?>
</p>
<p><?php echo $this->_tpl_vars['BUTTON_ADDRESS']; ?>
</p>
<h3><?php echo $this->_config[0]['vars']['title_payment']; ?>
</h3>
<?php echo $this->_config[0]['vars']['text_payment']; ?>

<?php endif; ?>
<?php if ($this->_tpl_vars['GV_COVER'] != 'true'): ?><?php echo $this->_tpl_vars['PAYMENT_BLOCK']; ?>
<?php echo $this->_tpl_vars['module_gift']; ?>
<?php else: ?><?php echo $this->_config[0]['vars']['text_gccover']; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['step2'] != 'true'): ?>
<h3><?php echo $this->_config[0]['vars']['title_comments']; ?>
</h3>
<p class="checkoutcomment"><?php echo $this->_tpl_vars['COMMENTS']; ?>
</p>
<h3><?php echo $this->_config[0]['vars']['title_agb']; ?>
</h3>
<p class="checkoutagb"><?php echo $this->_tpl_vars['AGB']; ?>
</p>
<table width="100%" border="0" cellspacing="0" cellpadding="4" summary="">
  <tr>
    <td><?php echo $this->_tpl_vars['AGB_checkbox']; ?>
</td>
    <td width="100%"><strong><?php echo $this->_config[0]['vars']['text_accept_agb']; ?>
</strong></td>
  </tr>
</table>
<?php endif; ?>
<p><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</p>
<?php echo $this->_tpl_vars['FORM_END']; ?>
