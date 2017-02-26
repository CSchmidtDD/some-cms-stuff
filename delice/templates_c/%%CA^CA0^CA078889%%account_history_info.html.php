<?php /* Smarty version 2.6.27, created on 2017-01-23 15:00:09
         compiled from delice24/module/account_history_info.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/account_history_info.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'account_history_info'), $this);?>

<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'print_order'), $this);?>

<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'product_info'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_history_info']; ?>
</h2>
<p><?php echo $this->_tpl_vars['BUTTON_PRINT']; ?>
&nbsp;<?php echo $this->_tpl_vars['BUTTON_BACK']; ?>
</p>
<div class="highlightbox">
	<h3><?php echo $this->_config[0]['vars']['text_oid']; ?>
<?php echo $this->_tpl_vars['ORDER_NUMBER']; ?>
 (<?php echo $this->_tpl_vars['ORDER_STATUS']; ?>
)</h3>
	<p><?php echo $this->_config[0]['vars']['text_date']; ?>
 <?php echo $this->_tpl_vars['ORDER_DATE']; ?>
</p>
	<h2><?php echo $this->_config[0]['vars']['text_shipping_address']; ?>
</h2>
	<p><?php echo $this->_tpl_vars['DELIVERY_LABEL']; ?>
</p>
	<?php if ($this->_tpl_vars['BILLING_LABEL']): ?>
	<h3><?php echo $this->_config[0]['vars']['text_payment_address']; ?>
</h3>
	<p><?php echo $this->_tpl_vars['BILLING_LABEL']; ?>
</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['SHIPPING_METHOD'] != ''): ?>
	<h3><?php echo $this->_config[0]['vars']['text_shipping_method']; ?>
</h3>
	<p><?php echo $this->_tpl_vars['SHIPPING_METHOD']; ?>
</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['PAYMENT_METHOD']): ?>
	<h3><?php echo $this->_config[0]['vars']['text_payment_method']; ?>
</h3>
	<p><?php echo $this->_tpl_vars['PAYMENT_METHOD']; ?>
</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['ORDER_COMMENTS'] != ''): ?>
	<h3><?php echo $this->_config[0]['vars']['text_comments']; ?>
</h3>
	<p><?php echo $this->_tpl_vars['ORDER_COMMENTS']; ?>
</p>
	<?php endif; ?>
	<?php if ($this->_tpl_vars['PAYMENT_INFORMATION'] != ''): ?>
	<h3><?php echo $this->_config[0]['vars']['text_payment_info']; ?>
</h3>
	<p><?php echo $this->_tpl_vars['PAYMENT_INFORMATION']; ?>
</p>
	<?php endif; ?>
	<h3><?php echo $this->_config[0]['vars']['title_history']; ?>
:</h3>
	<p><?php echo $this->_tpl_vars['HISTORY_BLOCK']; ?>
</p>
	<h2><?php echo $this->_config[0]['vars']['text_products']; ?>
</h2>
	<table class="accounthistoryinfoorderdetails" width="100%" border="0" cellspacing="0" cellpadding="4" summary="">
	<tr class="header">
      <td><?php echo $this->_config[0]['vars']['head_units']; ?>
</td>
      <td><?php echo $this->_config[0]['vars']['head_products']; ?>
</td>
      <td><?php echo $this->_config[0]['vars']['head_artnr']; ?>
</td>
      <td><?php echo $this->_config[0]['vars']['head_single_price']; ?>
</td>
	  <td><?php echo $this->_config[0]['vars']['head_price']; ?>
</td>
    </tr>
  <?php $_from = $this->_tpl_vars['order_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_values']):
        $this->_foreach['aussen']['iteration']++;
?>
    <tr>
    <td><?php echo $this->_tpl_vars['order_values']['PRODUCTS_QTY']; ?>
&nbsp;x</td>
    <td><?php echo $this->_tpl_vars['order_values']['PRODUCTS_NAME']; ?>
</strong><em><?php echo $this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES']; ?>
</em><?php if ($this->_tpl_vars['order_values']['PRODUCTS_SHIPPING_TIME'] != ''): ?><br /><?php echo $this->_config[0]['vars']['text_shippingtime']; ?>
 <?php echo $this->_tpl_vars['order_values']['PRODUCTS_SHIPPING_TIME']; ?>
<br /><?php endif; ?></td>
    <td><?php echo $this->_tpl_vars['order_values']['PRODUCTS_MODEL']; ?>
<em><?php echo $this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES_MODEL']; ?>
</em></td>
    <td><?php echo $this->_tpl_vars['order_values']['PRODUCTS_SINGLE_PRICE']; ?>
</td>
	<td><?php echo $this->_tpl_vars['order_values']['PRODUCTS_PRICE']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td colspan="5" align="right"><div class="hr"></div></td>
  </tr>
  <?php $_from = $this->_tpl_vars['order_total']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_total_values']):
        $this->_foreach['aussen']['iteration']++;
?>
  <tr>
    <td colspan="5" align="right"><?php echo $this->_tpl_vars['order_total_values']['TITLE']; ?>
 <strong><?php echo $this->_tpl_vars['order_total_values']['TEXT']; ?>
</strong></td>
    </tr>
	<?php endforeach; endif; unset($_from); ?>
</table>
	<div class="hr"></div>
	<p><?php echo $this->_tpl_vars['TOTAL_BLOCK']; ?>
</p>
	<?php if ($this->_tpl_vars['downloads_content'] != ''): ?>
  	<p><?php echo $this->_tpl_vars['downloads_content']; ?>
</p>
	<?php endif; ?>
</div>
<?php if ($this->_tpl_vars['text_print'] != ''): ?>
<h3><?php echo $this->_config[0]['vars']['title_print']; ?>
</h3>
<p><?php echo $this->_config[0]['vars']['text_print']; ?>
</p> 
<?php endif; ?>
<p><?php echo $this->_tpl_vars['BUTTON_PRINT']; ?>
</p>