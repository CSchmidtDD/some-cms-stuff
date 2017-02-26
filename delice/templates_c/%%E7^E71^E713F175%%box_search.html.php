<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:32
         compiled from delice24/boxes/box_search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/boxes/box_search.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<strong><?php echo $this->_config[0]['vars']['heading_search']; ?>
:</strong>
<?php echo $this->_tpl_vars['INPUT_SEARCH']; ?>

<button type="submit" value="Suche starten"><img src="<?php  echo 'templates/'.CURRENT_TEMPLATE;  ?>/layout/button-search.gif" alt="Suchen" /></button>
<p><a href="<?php echo $this->_tpl_vars['LINK_ADVANCED']; ?>
"><?php echo $this->_config[0]['vars']['text_advanced_search']; ?>
</a></p>
<?php echo $this->_tpl_vars['FORM_END']; ?>
 