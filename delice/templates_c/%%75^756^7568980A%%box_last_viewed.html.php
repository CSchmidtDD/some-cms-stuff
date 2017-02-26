<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:32
         compiled from delice24/boxes/box_last_viewed.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/boxes/box_last_viewed.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<h2 class="boxheader action"><?php echo $this->_config[0]['vars']['heading_last_viewed']; ?>
</h2>
<div class="boxbody action">
	<?php if ($this->_tpl_vars['box_content']['PRODUCTS_IMAGE'] != ''): ?><p class="center"><a href="<?php echo $this->_tpl_vars['box_content']['PRODUCTS_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['box_content']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['box_content']['PRODUCTS_NAME']; ?>
" class="productboximage"/></a></p><?php endif; ?>
	<p class="center"><a href="<?php echo $this->_tpl_vars['box_content']['PRODUCTS_LINK']; ?>
"><strong><?php echo $this->_tpl_vars['box_content']['PRODUCTS_NAME']; ?>
</strong></a>
	<br /><?php echo $this->_tpl_vars['box_content']['PRODUCTS_PRICE']; ?>

	<?php if ($this->_tpl_vars['box_content']['PRODUCTS_VPE']): ?><br /><?php echo $this->_tpl_vars['box_content']['PRODUCTS_VPE']; ?>
<?php endif; ?>
	<br /><?php echo $this->_tpl_vars['box_content']['PRODUCTS_TAX_INFO']; ?>
<?php echo $this->_tpl_vars['box_content']['PRODUCTS_SHIPPING_LINK']; ?>
</p>
</div>