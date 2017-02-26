<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:46
         compiled from delice24/module/checkout_shipping_block.html */ ?>
<?php if ($this->_tpl_vars['FREE_SHIPPING']): ?> 
<table class="shippingblock" border="0" width="100%" cellspacing="0" cellpadding="6" summary="">
	<tr> 
		<td class="header"><strong><?php echo $this->_tpl_vars['FREE_SHIPPING_TITLE']; ?>
</strong></td>
	</tr>
	<tr> 
		<td width="100%"><?php echo $this->_tpl_vars['FREE_SHIPPING_DESCRIPTION']; ?>
</td>
	</tr>
</table>
<?php else: ?>
<?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
<table class="shippingblock" width="100%" border="0" cellspacing="0" cellpadding="6" summary="">
  <tr>
    <td colspan="3" class="header"><strong><?php echo $this->_tpl_vars['module_data']['module']; ?>
</strong></td>
  </tr>
  <?php if ($this->_tpl_vars['module_data']['error'] != ''): ?>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php echo $this->_tpl_vars['module_data']['error']; ?>
</td>
  </tr>
  <?php else: ?>
  <?php $_from = $this->_tpl_vars['module_data']['methods']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['method_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
  <tr>
    <td class="radiobutton"><?php echo $this->_tpl_vars['method_data']['radio_field']; ?>
</td>
    <td class="description"><?php echo $this->_tpl_vars['method_data']['title']; ?>
</td>
    <td class="price"><?php echo $this->_tpl_vars['method_data']['price']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
  <?php endif; ?>
</table>
<?php endforeach; endif; unset($_from); ?>
<?php endif; ?>