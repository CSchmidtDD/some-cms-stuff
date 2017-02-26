<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:32
         compiled from delice24/boxes/box_best_sellers.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/boxes/box_best_sellers.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>

<h2 class="boxheader"><?php echo $this->_config[0]['vars']['heading_best_sellers']; ?>
</h2>
<div class="boxbody">
	<?php $_from = $this->_tpl_vars['box_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['box_data']):
        $this->_foreach['aussen']['iteration']++;
?>
	<dl><dt><a href="<?php echo $this->_tpl_vars['box_data']['PRODUCTS_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['box_data']['PRODUCTS_IMAGE']; ?>
" width="40" alt="" title="" /></a></dt><dd><h3><?php echo $this->_tpl_vars['box_data']['COUNT']; ?>
. <a href="<?php echo $this->_tpl_vars['box_data']['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['box_data']['PRODUCTS_NAME']; ?>
</a></h3>
	<p><?php echo $this->_tpl_vars['box_data']['PRODUCTS_PRICE']; ?>
<br />
	<?php if ($this->_tpl_vars['box_data']['PRODUCTS_VPE']): ?><?php echo $this->_tpl_vars['box_data']['PRODUCTS_VPE']; ?>
<br /><?php endif; ?>
	<?php echo $this->_tpl_vars['box_data']['PRODUCTS_TAX_INFO']; ?>
<?php echo $this->_tpl_vars['box_data']['PRODUCTS_SHIPPING_LINK']; ?>
</p>
	<div class="hrlightgrey"></div>
    </dd></dl>
   <div style="clear:both"></div>    	<?php endforeach; endif; unset($_from); ?>
</div>
 <div class="bestSellersPrice">
   <?php echo $this->_tpl_vars['box_data']['PRODUCTS_PRICE']; ?>
<br />
   <?php if ($this->_tpl_vars['box_data']['PRODUCTS_VPE']): ?><?php echo $this->_tpl_vars['box_data']['PRODUCTS_VPE']; ?>
<br /><?php endif; ?>
   <?php echo $this->_tpl_vars['box_data']['PRODUCTS_TAX_INFO']; ?>
<br />
   <?php echo $this->_tpl_vars['box_data']['PRODUCTS_SHIPPING_LINK']; ?>
<br /> 
 </div>
 
 <?php if ($this->_tpl_vars['box_data']['PRODUCTS_IMAGE']): ?>
   <div class="bestSellerImage">
     <a href="<?php echo $this->_tpl_vars['box_data']['PRODUCTS_LINK']; ?>
"><img src="<?php echo $this->_tpl_vars['box_data']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['box_data']['PRODUCTS_NAME']; ?>
" /></a>
   </div>
 <?php endif; ?>