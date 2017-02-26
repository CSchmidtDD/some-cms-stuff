<?php /* Smarty version 2.6.27, created on 2016-04-14 23:34:11
         compiled from delice24/module/upcoming_products.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/upcoming_products.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'upcoming_products'), $this);?>
 <br />
<h3><?php echo $this->_config[0]['vars']['heading_upcoming']; ?>
</h3>
<?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>
<p><?php echo $this->_tpl_vars['module_data']['PRODUCTS_DATE']; ?>
: <strong><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
</a></strong></p>
<div class="hrproductpreview"></div>
<?php endforeach; endif; unset($_from); ?>