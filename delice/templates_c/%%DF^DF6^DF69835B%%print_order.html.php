<?php /* Smarty version 2.6.27, created on 2015-12-01 07:06:26
         compiled from delice24/module/print_order.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/print_order.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'print_order'), $this);?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php echo $this->_config[0]['vars']['title']; ?>
 <?php echo $this->_tpl_vars['oID']; ?>
</title>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" /> 
<meta http-equiv="Content-Style-Type" content="text/css" />
<link rel="stylesheet" type="text/css" href="templates/xtc5/stylesheet.css" />
</head>

<body class="popupprintorder" onload="window.print()">
<table width="100%" border="0" cellspacing="0" cellpadding="2">
    <tr>
        <td><?php echo $this->_tpl_vars['address_label_customer']; ?>
<br />
			<?php if ($this->_tpl_vars['csID']): ?><br /><strong><?php echo $this->_config[0]['vars']['csID']; ?>
</strong><?php echo $this->_tpl_vars['csID']; ?>
<?php endif; ?>
        	<?php if ($this->_tpl_vars['PAYMENT_METHOD']): ?><br /><strong><?php echo $this->_config[0]['vars']['payment']; ?>
</strong> <?php echo $this->_tpl_vars['PAYMENT_METHOD']; ?>
<br /><?php endif; ?> 
			<strong><?php echo $this->_config[0]['vars']['order']; ?>
</strong> <?php echo $this->_tpl_vars['oID']; ?>
<br />
        	<strong><?php echo $this->_config[0]['vars']['date']; ?>
</strong> <?php echo $this->_tpl_vars['DATE']; ?>
 </span></td>
    	<td style="vertical-align:top; text-align:right;"><img src="templates/xtc5/img/logo.gif" alt="<?php echo $this->_tpl_vars['store_name']; ?>
" /></td>
	</tr>
    <tr>
      <td colspan="2"><div class="hr"></div></td>
    </tr>
    <tr>
      <td><strong><?php echo $this->_config[0]['vars']['shipping_address']; ?>
</strong><br /><?php echo $this->_tpl_vars['address_label_shipping']; ?>
</td>
      <td style="vertical-align:top; text-align:right;"><?php if ($this->_tpl_vars['address_label_payment']): ?><strong><?php echo $this->_config[0]['vars']['payment_address']; ?>
</strong><?php endif; ?><br /><?php echo $this->_tpl_vars['address_label_payment']; ?>
</td>
    </tr>
</table>
<div class="hr"></div>

<h2><?php echo $this->_config[0]['vars']['heading_products']; ?>
</h2>
<table class="products" width="100%" border="0" cellspacing="0" cellpadding="0">
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
    <td class="quantity"><?php echo $this->_tpl_vars['order_values']['PRODUCTS_QTY']; ?>
&nbsp;x</td>
    <td class="productname"><strong><?php echo $this->_tpl_vars['order_values']['PRODUCTS_NAME']; ?>
</strong><span style="font-size:11px;"><em><?php echo $this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES']; ?>
</em></span></td>
    <td class="model"><?php echo $this->_tpl_vars['order_values']['PRODUCTS_MODEL']; ?>
<?php echo $this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES_MODEL']; ?>
</td>
    <td class="singleprice"><?php echo $this->_tpl_vars['order_values']['PRODUCTS_SINGLE_PRICE']; ?>
</td>
    <td class="totalprice"><?php echo $this->_tpl_vars['order_values']['PRODUCTS_PRICE']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <tr>
    <td colspan="5"><div class="hr"></div></td>
  </tr>
  <?php $_from = $this->_tpl_vars['order_total']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_total_values']):
        $this->_foreach['aussen']['iteration']++;
?>
  <tr>
    <td colspan="5" class="total"><?php echo $this->_tpl_vars['order_total_values']['TITLE']; ?>
<?php echo $this->_tpl_vars['order_total_values']['TEXT']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
</table>
</div>
</body>
</html>