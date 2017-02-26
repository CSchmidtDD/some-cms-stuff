<?php /* Smarty version 2.6.27, created on 2015-10-17 12:20:54
         compiled from delice24/module/cookie_usage.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/cookie_usage.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'cookie_usage'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_cookie_usage']; ?>
</h2>
<p><?php echo $this->_config[0]['vars']['text_information']; ?>
</p>
<h3><?php echo $this->_config[0]['vars']['title_infobox']; ?>
</h3>
<p><?php echo $this->_config[0]['vars']['text_infobox']; ?>
</p>
<p><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</p>