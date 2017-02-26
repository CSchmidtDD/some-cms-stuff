<?php /* Smarty version 2.6.27, created on 2015-10-15 17:18:57
         compiled from delice24/module/account.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/account.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'account'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_account']; ?>
</h2>
<?php if ($this->_tpl_vars['error_message']): ?><div class="errormessage"><?php echo $this->_tpl_vars['error_message']; ?>
</div><?php endif; ?>
<?php if (! $this->_tpl_vars['products_history']): ?>
<h3><?php echo $this->_config[0]['vars']['title_welcome']; ?>
</h3>
<?php if ($this->_config[0]['vars']['text_welcome']): ?>
<p><?php echo $this->_config[0]['vars']['text_welcome']; ?>
</p>
<?php if ($this->_tpl_vars['LINK_LOGIN']): ?>
<p><a href="<?php echo $this->_tpl_vars['LINK_LOGIN']; ?>
" style="font-size:13px;"><strong><?php echo $this->_config[0]['vars']['text_login']; ?>
</strong></a></p>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<h3><?php echo $this->_config[0]['vars']['title_account']; ?>
</h3>
<div class="highlightbox">
	<ul>
		<li><a href="<?php echo $this->_tpl_vars['LINK_EDIT']; ?>
"><strong><?php echo $this->_config[0]['vars']['text_edit']; ?>
</strong></a></li>
		<li><a href="<?php echo $this->_tpl_vars['LINK_ADDRESS']; ?>
"><strong><?php echo $this->_config[0]['vars']['text_address']; ?>
</strong></a></li>
		<li><a href="<?php echo $this->_tpl_vars['LINK_PASSWORD']; ?>
"><strong><?php echo $this->_config[0]['vars']['text_password']; ?>
</strong></a></li>
	</ul>
</div>
	<?php if ($this->_tpl_vars['order_content']): ?>
		<h2><?php echo $this->_config[0]['vars']['title_orders']; ?>
</h2>
		<div class="highlightbox">
		<?php $_from = $this->_tpl_vars['order_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_data']):
        $this->_foreach['aussen']['iteration']++;
?>
			<p><strong><a href="<?php echo $this->_tpl_vars['order_data']['ORDER_LINK']; ?>
"><?php echo $this->_tpl_vars['order_data']['ORDER_DATE']; ?>
</a> / <?php echo $this->_config[0]['vars']['order_nr']; ?>
<?php echo $this->_tpl_vars['order_data']['ORDER_ID']; ?>
</strong><br />
			<?php echo $this->_config[0]['vars']['order_total']; ?>
<?php echo $this->_tpl_vars['order_data']['ORDER_TOTAL']; ?>
 / <?php echo $this->_config[0]['vars']['order_status']; ?>
<?php echo $this->_tpl_vars['order_data']['ORDER_STATUS']; ?>
<br /></p>
			<div class="hr"></div>
		<?php endforeach; endif; unset($_from); ?>
		<a href="<?php echo $this->_tpl_vars['LINK_ALL']; ?>
"><?php echo $this->_config[0]['vars']['text_all']; ?>
</a>
		</div>
	<?php endif; ?>
<h3><?php echo $this->_config[0]['vars']['title_notification']; ?>
</h3>
<div class="highlightbox">
	<ul>
		<li><a href="<?php echo $this->_tpl_vars['LINK_NEWSLETTER']; ?>
"><?php echo $this->_config[0]['vars']['text_newsletter']; ?>
</a></li>
	</ul>
</div>	
<?php if ($this->_tpl_vars['products_history']): ?>
	<h3><?php echo $this->_config[0]['vars']['title_viewed_products']; ?>
</h3>
		<div class="highlightbox">
		<ul>
		<?php $_from = $this->_tpl_vars['products_history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['history_products'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['history_products']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['products_history']):
        $this->_foreach['history_products']['iteration']++;
?>
			<li><a href="<?php echo $this->_tpl_vars['products_history']['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['products_history']['PRODUCTS_NAME']; ?>
 / <?php echo $this->_tpl_vars['products_history']['PRODUCTS_PRICE']; ?>
</a></li>
		<?php endforeach; endif; unset($_from); ?>
		</ul>
		</div>
<?php endif; ?> 

