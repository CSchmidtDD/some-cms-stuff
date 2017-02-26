<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:32
         compiled from delice24/boxes/box_order_history.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/boxes/box_order_history.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<h2 class="boxheader"><?php echo $this->_config[0]['vars']['heading_order_history']; ?>
</h2>
<div class="boxbody"><?php echo $this->_tpl_vars['BOX_CONTENT']; ?>
</div>