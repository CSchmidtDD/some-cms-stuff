<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:37
         compiled from delice24/module/also_purchased.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/also_purchased.html', 1, false),array('modifier', 'strip_tags', 'delice24/module/also_purchased.html', 1, false),array('modifier', 'html_entity_decode', 'delice24/module/also_purchased.html', 1, false),array('modifier', 'truncate', 'delice24/module/also_purchased.html', 1, false),array('modifier', 'strstr', 'delice24/module/also_purchased.html', 1, false),array('modifier', 'string_format', 'delice24/module/also_purchased.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'also_purchased'), $this);?>
<h3><?php echo $this->_config[0]['vars']['heading_text']; ?>
</h3><div class="products"><?php $this->assign('counter', '0'); ?><?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>		<div class="product <?php if (( $this->_tpl_vars['counter']++ ) % 2): ?>odd<?php else: ?>even<?php endif; ?>">			<div class="product-inner">				<div class="image" style="background-image:url(<?php echo $this->_tpl_vars['module_data']['PRODUCTS_IMAGE']; ?>
);">				<?php if ($this->_tpl_vars['module_data']['PRODUCTS_IMAGE'] != ''): ?>					<a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><span><img src="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
" class="productImageBorder" /></span></a>				<?php endif; ?>				</div>				<div class="description">					<h4><a href="<?php echo $this->_tpl_vars['module_data']['PRODUCTS_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_NAME']; ?>
</a></h4>					<p><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['module_data']['PRODUCTS_SHORT_DESCRIPTION'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('html_entity_decode', true, $_tmp) : html_entity_decode($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 75, "...", true) : smarty_modifier_truncate($_tmp, 75, "...", true)); ?>
</p>									</div>				<div class="vpe">  				<?php if ($this->_tpl_vars['module_data']['PRODUCTS_VPE_VALUE'] > 0): ?>    					<?php if (((is_array($_tmp=$this->_tpl_vars['module_data']['PRODUCTS_VPE'])) ? $this->_run_mod_handler('strstr', true, $_tmp, "Stück") : strstr($_tmp, "Stück"))): ?>    						je <?php echo ((is_array($_tmp=$this->_tpl_vars['module_data']['PRODUCTS_VPE_VALUE'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
 Stück    					<?php elseif (((is_array($_tmp=$this->_tpl_vars['module_data']['PRODUCTS_VPE'])) ? $this->_run_mod_handler('strstr', true, $_tmp, 'Glas') : strstr($_tmp, 'Glas'))): ?>                pro <!-- <?php echo ((is_array($_tmp=$this->_tpl_vars['module_data']['PRODUCTS_VPE_VALUE'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%d") : smarty_modifier_string_format($_tmp, "%d")); ?>
 --> Glas    					    					<?php else: ?>    						je <?php echo $this->_tpl_vars['module_data']['PRODUCTS_VPE_VALUE']*1000; ?>
g    					<?php endif; ?>    				<?php endif; ?>						</div>				<div class="price"><?php echo $this->_tpl_vars['module_data']['PRODUCTS_PRICE']; ?>
</div>				<div class="infos">		  				<?php if ($this->_tpl_vars['module_data']['PRODUCTS_VPE']): ?>		        	<?php echo $this->_tpl_vars['module_data']['PRODUCTS_VPE']; ?>
 |		        <?php endif; ?>					<?php if ($this->_tpl_vars['module_data']['PRODUCTS_SHIPPING_NAME']): ?>						Lieferzeit: <?php echo $this->_tpl_vars['module_data']['PRODUCTS_SHIPPING_NAME']; ?>
											<?php endif; ?>												<div class="taxandshippinginfo">(<?php echo $this->_tpl_vars['module_data']['PRODUCTS_TAX_INFO']; ?>
<?php echo $this->_tpl_vars['module_data']['PRODUCTS_SHIPPING_LINK']; ?>
)</div>								</div>						</div>		</div><?php endforeach; endif; unset($_from); ?></div><div class="clear"></div>