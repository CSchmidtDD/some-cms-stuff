<?php /* Smarty version 2.6.27, created on 2015-10-17 12:21:51
         compiled from delice24/module/popup_search_help.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/popup_search_help.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'popup_search_help'), $this);?>

<html>
<head>
</head>
<body style="background:#fff;">
<div class="popupContainer" style="padding:15px;">
      <h1><?php echo $this->_config[0]['vars']['title_help']; ?>
</h1>
      <p><?php echo $this->_config[0]['vars']['text_help']; ?>
</p>
</div>
</body>
</html>