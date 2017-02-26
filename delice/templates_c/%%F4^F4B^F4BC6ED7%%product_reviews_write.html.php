<?php /* Smarty version 2.6.27, created on 2015-10-15 22:24:39
         compiled from delice24/module/product_reviews_write.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/product_reviews_write.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'reviews'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_reviews_write']; ?>
</h2>
<?php if ($this->_tpl_vars['error']): ?><div class="errormessage"><?php echo $this->_tpl_vars['error']; ?>
</div>
<?php else: ?>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<p>
<strong><?php echo $this->_config[0]['vars']['text_product']; ?>
</strong> <?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
<br />
<strong><?php echo $this->_config[0]['vars']['text_author']; ?>
</strong> <?php echo $this->_tpl_vars['AUTHOR']; ?>

</p>
<div class="highlightbox">
<h3><?php echo $this->_config[0]['vars']['text_rating']; ?>
</h3>
<p><?php echo $this->_config[0]['vars']['text_bad']; ?>
&nbsp;<?php echo $this->_tpl_vars['INPUT_RATING']; ?>
<?php echo $this->_config[0]['vars']['text_good']; ?>
</p>
<h3><?php echo $this->_config[0]['vars']['text_input']; ?>
</h3>
<p><?php echo $this->_tpl_vars['INPUT_TEXT']; ?>
</p>
<p><?php echo $this->_config[0]['vars']['text_note']; ?>
</p>
</div>
<p><?php echo $this->_tpl_vars['BUTTON_BACK']; ?>
&nbsp;<?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</p>
<?php echo $this->_tpl_vars['FORM_END']; ?>

<?php endif; ?>