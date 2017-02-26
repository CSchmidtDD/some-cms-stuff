<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:32
         compiled from delice24/module/main_content.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/main_content.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'index'), $this);?>

<?php echo $this->_tpl_vars['MODULE_error']; ?>


<h2><?php echo $this->_tpl_vars['title']; ?>
</h2>
<?php echo $this->_tpl_vars['text']; ?>

<?php echo $this->_tpl_vars['MODULE_new_products']; ?>

<?php echo $this->_tpl_vars['MODULE_upcoming_products']; ?>
