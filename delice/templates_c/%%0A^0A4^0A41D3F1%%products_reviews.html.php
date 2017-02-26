<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:37
         compiled from delice24/module/products_reviews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/products_reviews.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'reviews'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_reviews']; ?>
</h2>
<?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
<p><strong><?php echo $this->_config[0]['vars']['text_author']; ?>
</strong>&nbsp;<?php echo $this->_tpl_vars['module_data']['AUTHOR']; ?>
&nbsp;am&nbsp;<?php echo $this->_tpl_vars['module_data']['DATE']; ?>
<br /><strong><?php echo $this->_config[0]['vars']['text_rating']; ?>
</strong><?php echo $this->_tpl_vars['module_data']['RATING']; ?>
</p>
<div class="highlightbox">
<h3><?php echo $this->_config[0]['vars']['text_text']; ?>
</h3>
<p><?php echo $this->_tpl_vars['module_data']['TEXT']; ?>
</p>
</div>
<?php endforeach; endif; unset($_from); ?>
<p><?php echo $this->_tpl_vars['BUTTON_WRITE']; ?>
</p>
<div class="hrlightgrey"></div>