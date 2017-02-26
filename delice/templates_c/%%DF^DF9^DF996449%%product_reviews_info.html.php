<?php /* Smarty version 2.6.27, created on 2015-11-04 16:44:45
         compiled from delice24/module/product_reviews_info.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/product_reviews_info.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'reviews'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_product_reviews']; ?>
 <?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
</h2>
<p>
	<strong> <?php echo $this->_config[0]['vars']['text_date']; ?>
</strong> <?php echo $this->_tpl_vars['DATE']; ?>
<br />
	<strong><?php echo $this->_config[0]['vars']['text_author']; ?>
</strong> <?php echo $this->_tpl_vars['AUTHOR']; ?>
<br />
    <strong><?php echo $this->_config[0]['vars']['heading_product_reviews']; ?>
</strong><a href="<?php echo $this->_tpl_vars['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
</a>
</p>
<div class="highlightbox">
	<h3><?php echo $this->_config[0]['vars']['text_text']; ?>
</h3>
	<p><?php echo $this->_tpl_vars['REVIEWS_TEXT']; ?>
</p>
	<p><strong><?php echo $this->_config[0]['vars']['text_rating']; ?>
</strong><?php echo $this->_tpl_vars['RATING']; ?>
</p>
</div>
<p><?php echo $this->_tpl_vars['BUTTON_BACK']; ?>
&nbsp;<?php echo $this->_tpl_vars['BUTTON_BUY_NOW']; ?>
</p>