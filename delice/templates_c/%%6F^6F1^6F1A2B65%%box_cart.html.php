<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:32
         compiled from delice24/boxes/box_cart.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/boxes/box_cart.html', 1, false),array('modifier', 'truncate', 'delice24/boxes/box_cart.html', 7, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<?php if ($this->_tpl_vars['deny_cart'] != 'true'): ?>
	<?php if ($this->_tpl_vars['empty'] == 'false'): ?>
		<h2 class="boxheader"><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</h2>
		<div class="boxbody">
			<?php $_from = $this->_tpl_vars['products']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['products_data']):
        $this->_foreach['aussen']['iteration']++;
?>
				<p><?php echo $this->_tpl_vars['products_data']['QTY']; ?>
&nbsp;x&nbsp;<a href="<?php echo $this->_tpl_vars['products_data']['LINK']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['products_data']['NAME'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 20, "...", true) : smarty_modifier_truncate($_tmp, 20, "...", true)); ?>
</a></p>
			<?php endforeach; endif; unset($_from); ?>
			<div class="hr"></div>
			<p style="text-align:right"><?php if ($this->_tpl_vars['DISCOUNT']): ?><?php echo $this->_config[0]['vars']['text_discount']; ?>
 <?php echo $this->_tpl_vars['DISCOUNT']; ?>
<br /><?php endif; ?>
			<?php echo $this->_tpl_vars['UST']; ?>

			<strong><?php echo $this->_config[0]['vars']['text_total']; ?>
:<?php echo $this->_tpl_vars['TOTAL']; ?>
</strong><br />
			<?php if ($this->_tpl_vars['SHIPPING_INFO']): ?><?php echo $this->_tpl_vars['SHIPPING_INFO']; ?>
<?php endif; ?></p>
			<div class="hr"></div>
			<p style="text-align:right;"><a href="<?php echo $this->_tpl_vars['LINK_CART']; ?>
"><strong><?php echo $this->_config[0]['vars']['heading_cart']; ?>
&nbsp;&raquo;</strong></a></p>
		</div>
	<?php else: ?> <!-- cart has no content --> 
		<h2 class="boxheader"><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</h2>
			<div class="boxbody">
			<p><?php echo $this->_config[0]['vars']['text_empty_cart']; ?>
</p>
		</div>
<?php endif; ?>

	<?php if ($this->_tpl_vars['ACTIVATE_GIFT'] == 'true'): ?>
		<?php if ($this->_tpl_vars['GV_AMOUNT'] != ''): ?>
        <h2 class="boxheader"><?php echo $this->_config[0]['vars']['heading_cart']; ?>
</h2>
			<div class="boxbody">
				<p><strong><?php echo $this->_config[0]['vars']['voucher_balance']; ?>
</strong><div class="hr"></div><?php echo $this->_tpl_vars['GV_AMOUNT']; ?>
</p>
			</div>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>