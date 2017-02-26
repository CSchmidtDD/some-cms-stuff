<?php /* Smarty version 2.6.27, created on 2015-10-16 14:12:57
         compiled from delice24/module/product_reviews.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/product_reviews.html', 1, false),array('function', 'cycle', 'delice24/module/product_reviews.html', 10, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'reviews'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_reviews']; ?>
 <?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
</h2>
<table width="100%" border="0" cellspacing="0" cellpadding="4" class="reviewlist">
  <tr class="header"> 
    <td><?php echo $this->_config[0]['vars']['title_date']; ?>
</td>
    <td><strong><?php echo $this->_config[0]['vars']['title_author']; ?>
</strong></td>
    <td><strong><?php echo $this->_config[0]['vars']['title_rating']; ?>
</strong></td>
  </tr>
  <?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?> 
  <tr class="<?php echo smarty_function_cycle(array('values' => "contentrow1,contentrow2"), $this);?>
"> 
    <td><?php echo $this->_tpl_vars['module_data']['DATE']; ?>
</td>
    <td><?php echo $this->_tpl_vars['module_data']['AUTHOR']; ?>
</td>
    <td width="100%"><?php echo $this->_tpl_vars['module_data']['RATING']; ?>
</td>
  </tr>
  <?php endforeach; endif; unset($_from); ?> 
</table>