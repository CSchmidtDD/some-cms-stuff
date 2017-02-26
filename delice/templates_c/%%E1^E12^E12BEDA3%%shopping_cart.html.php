<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:44
         compiled from delice24/module/shopping_cart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/shopping_cart.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'shopping_cart'), $this);?>

<h2>Warenkorb</h2>
<h3><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</h3>
<?php if ($this->_tpl_vars['info_message'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['info_message']; ?>
</div><?php endif; ?>
<?php if ($this->_tpl_vars['cart_empty'] == true): ?>
<p><?php echo $this->_config[0]['vars']['text_empty']; ?>
</p>
<p><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</p>
<?php else: ?>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<?php echo $this->_tpl_vars['HIDDEN_OPTIONS']; ?>

<?php echo $this->_tpl_vars['MODULE_order_details']; ?>

<?php if ($this->_tpl_vars['info_message_1'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['info_message_1']; ?>
<?php echo $this->_tpl_vars['min_order']; ?>
<?php echo $this->_tpl_vars['info_message_2']; ?>
<?php echo $this->_tpl_vars['order_amount']; ?>
</div><?php endif; ?>
<p><?php if ($this->_tpl_vars['CONTINUE_LINK']): ?><a href="<?php echo $this->_tpl_vars['CONTINUE_LINK']; ?>
"><?php echo $this->_tpl_vars['BUTTON_CONTINUE_SHOPPING']; ?>
</a>&nbsp;&nbsp;&nbsp;<?php endif; ?><?php echo $this->_tpl_vars['BUTTON_RELOAD']; ?>
&nbsp;&nbsp;&nbsp;<?php echo $this->_tpl_vars['BUTTON_CHECKOUT']; ?>
<?php if ($this->_tpl_vars['BUTTON_PAYPAL'] != ''): ?><br /><?php echo $this->_tpl_vars['BUTTON_PAYPAL']; ?>
<?php endif; ?></p>
<?php echo $this->_tpl_vars['FORM_END']; ?>
<?php endif; ?>
<?php echo $this->_tpl_vars['MODULE_gift_cart']; ?>
