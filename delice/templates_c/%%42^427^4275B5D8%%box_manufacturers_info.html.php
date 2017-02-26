<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:37
         compiled from delice24/boxes/box_manufacturers_info.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/boxes/box_manufacturers_info.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<h2 class="boxheader"><?php echo $this->_config[0]['vars']['heading_manufacturers_info']; ?>
</h2>
<div class="boxbody">
<p><strong><?php echo $this->_tpl_vars['NAME']; ?>
</strong><br />
<?php if ($this->_tpl_vars['URL']): ?><?php echo $this->_tpl_vars['URL']; ?>
<br /><?php endif; ?>
<?php echo $this->_tpl_vars['LINK_MORE']; ?>
</p>
</div>