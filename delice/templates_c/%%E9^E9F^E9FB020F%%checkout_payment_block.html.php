<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:48
         compiled from delice24/module/checkout_payment_block.html */ ?>
<?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
<table class="paymentblock" width="100%" border="0" cellspacing="0" cellpadding="6" summary="">
  <tr>
    <td class="header" width="1%"><?php echo $this->_tpl_vars['module_data']['selection']; ?>
</td>
    <td class="header" width="89%"><?php echo $this->_tpl_vars['module_data']['module']; ?>
</td>
    <td class="header" width="10%"><?php echo $this->_tpl_vars['module_data']['module_cost']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['module_data']['description'] != ''): ?>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2" width="100%"><strong><?php echo $this->_tpl_vars['module_data']['description']; ?>
</strong></td>
  </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['module_data']['error'] != ''): ?>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2"><?php echo $this->_tpl_vars['module_data']['error']; ?>
</td>
  </tr>
  <?php elseif ($this->_tpl_vars['module_data']['fields']): ?>
  <tr>
    <td>&nbsp;</td>
    <td colspan="2">
		<table border="0" cellspacing="0" cellpadding="0">
		<?php $_from = $this->_tpl_vars['module_data']['fields']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['method_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
			<tr>
				<td><?php echo $this->_tpl_vars['method_data']['title']; ?>
</td>
				<td>&nbsp;</td>
				<td><?php echo $this->_tpl_vars['method_data']['field']; ?>
</td>
				<td>&nbsp;</td>
			 </tr>
		<?php endforeach; endif; unset($_from); ?>
		</table>
    </td>
  </tr>
  <?php endif; ?>
</table>
<?php endforeach; endif; unset($_from); ?>