<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:44
         compiled from delice24/module/order_details.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/order_details.html', 1, false),array('function', 'cycle', 'delice24/module/order_details.html', 11, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'shopping_cart'), $this);?>

<table class="orderdetails" width="100%" border="0" cellspacing="0" cellpadding="6" summary="">
  <tr class="headerrow">
    <td class="left"><?php echo $this->_config[0]['vars']['text_qty']; ?>
</td>
    <td class="left"><?php echo $this->_config[0]['vars']['text_article']; ?>
</td>
    <td class="right"><?php echo $this->_config[0]['vars']['text_single']; ?>
</td>
    <td class="right"><?php echo $this->_config[0]['vars']['text_total']; ?>
</td>
    <td class="center"><?php echo $this->_config[0]['vars']['text_remove']; ?>
</td>
  </tr>
  <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
  <tr class="<?php echo smarty_function_cycle(array('values' => "contentrow1,contentrow2"), $this);?>
">
    <td class="quantity"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_QTY']; ?>
</td>
    <td class="productname">
		<strong><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
</a></strong>
		<?php if ($this->_tpl_vars['module_data']['ATTRIBUTES'] != ''): ?> 
      		<table class="productattributes" width="100%" border="0" cellspacing="0" cellpadding="0">
        	<?php $_from = $this->_tpl_vars['module_data']['ATTRIBUTES']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key_data'] => $this->_tpl_vars['item_data']):
?> 
        	<tr> 
          		<td class="attribute"><strong><?php echo $this->_tpl_vars['item_data']['NAME']; ?>
:</strong></td>
          		<td class="value"><?php echo $this->_tpl_vars['item_data']['VALUE_NAME']; ?>
</td>
        	</tr>
        	<?php endforeach; endif; unset($_from); ?> 
      		</table>
       <?php endif; ?></td>
    <td class="singleprice"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_SINGLE_PRICE']; ?>
</td>
    <td class="totalprice"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_PRICE']; ?>
</td>
    <td class="delete"><?php echo $this->_tpl_vars['module_data']['BOX_DELETE']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?>
    <!--tr>
    <td colspan="4" class="subtotal"><?php echo $this->_tpl_vars['UST_CONTENT']; ?>
<strong><?php echo $this->_tpl_vars['TOTAL_CONTENT']; ?>
</strong><?php if ($this->_tpl_vars['SHIPPING_INFO']): ?><?php echo $this->_tpl_vars['SHIPPING_INFO']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['KLARNA_PPBOX']): ?><br /><?php echo $this->_tpl_vars['KLARNA_PPBOX']; ?>
<?php endif; ?></td>
    <td class="subtotal">&nbsp;</td>
  </tr-->  
  <tr>
    <td colspan="4" class="subtotal">
    <?php if ($this->_tpl_vars['UST_CONTENT']): ?><?php echo $this->_tpl_vars['UST_CONTENT']; ?>
<?php else: ?><strong><?php printf(TAX_INFO_EXCL, '') ?></strong><br /><?php endif; ?>
    <strong><?php echo $this->_tpl_vars['TOTAL_CONTENT']; ?>
</strong><br />
    <?php if ($this->_tpl_vars['SELECT_COUNTRY']): ?><?php echo $this->_tpl_vars['SELECT_COUNTRY']; ?>
<br /><?php endif; ?>
    <?php $_from = $this->_tpl_vars['shipping_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['shipping_data']):
        $this->_foreach['aussen']['iteration']++;
?>
      <?php echo $this->_tpl_vars['shipping_data']['NAME']; ?>
 (<?php echo $this->_tpl_vars['COUNTRY']; ?>
): <?php echo $this->_tpl_vars['shipping_data']['VALUE']; ?>
<br />
    <?php endforeach; endif; unset($_from); ?>
    <?php if ($this->_tpl_vars['total']): ?>
    <strong><?php echo $this->_config[0]['vars']['text_total']; ?>
: <?php echo $this->_tpl_vars['total']; ?>
</strong>
    <?php endif; ?>
    <?php if ($this->_tpl_vars['KLARNA_PPBOX']): ?><br /><?php echo $this->_tpl_vars['KLARNA_PPBOX']; ?>
<?php endif; ?>
    </td>
    <td class="subtotal">&nbsp;</td>
 </tr>
 </table>