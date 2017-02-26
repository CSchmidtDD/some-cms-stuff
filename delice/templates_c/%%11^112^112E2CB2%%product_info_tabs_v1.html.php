<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:37
         compiled from delice24/module/product_info/product_info_tabs_v1.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/product_info/product_info_tabs_v1.html', 1, false),array('modifier', 'replace', 'delice24/module/product_info/product_info_tabs_v1.html', 9, false),array('modifier', 'count', 'delice24/module/product_info/product_info_tabs_v1.html', 63, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'product_info'), $this);?>

<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<h1><?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
</h1>

<div id="productinfowrap">
<table><tr><td style="padding-right:20px;">
	<?php if ($this->_tpl_vars['PRODUCTS_IMAGE'] != ''): ?>

		<a title="<?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['PRODUCTS_IMAGE'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'info_images', 'popup_images') : smarty_modifier_replace($_tmp, 'info_images', 'popup_images')); ?>
" class="thickbox" rel="<?php echo $this->_tpl_vars['PRODUCTS_ID']; ?>
"><img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
" class="productimage" /><?php if ($this->_tpl_vars['PRODUCTS_POPUP_LINK'] != ''): ?><br/><?php echo $this->_config[0]['vars']['text_zoom']; ?>
<?php endif; ?></a>

	<?php endif; ?></td><td>
  	<div id="productinfoprice">
		
			<p class="productprice"><strong><?php echo $this->_tpl_vars['PRODUCTS_PRICE']; ?>
</strong></p>
			<p class="taxandshippinginfo" style="white-space:nowrap"><?php echo $this->_tpl_vars['PRODUCTS_TAX_INFO']; ?>
<?php if ($this->_tpl_vars['PRODUCTS_SHIPPING_LINK']): ?><?php echo $this->_tpl_vars['PRODUCTS_SHIPPING_LINK']; ?>
<?php endif; ?></p>
			<?php if ($this->_tpl_vars['SHIPPING_NAME']): ?><p class="shippingtime"><strong><?php echo $this->_config[0]['vars']['text_shippingtime']; ?>
</strong><?php if ($this->_tpl_vars['SHIPPING_IMAGE']): ?><img src="<?php echo $this->_tpl_vars['SHIPPING_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['SHIPPING_NAME']; ?>
" /><?php endif; ?> <?php echo $this->_tpl_vars['SHIPPING_NAME_LINK']; ?>
</p>
			<?php endif; ?>
			<?php if ($this->_tpl_vars['PRODUCTS_VPE']): ?>
			<div class="hrlightgrey"></div><?php echo $this->_tpl_vars['PRODUCTS_VPE']; ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['MODULE_graduated_price'] != ''): ?><div class="hrlightgrey"></div><?php echo $this->_tpl_vars['MODULE_graduated_price']; ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['PRODUCTS_DISCOUNT'] != ''): ?><div class="hrlightgrey"></div><?php echo $this->_tpl_vars['PRODUCTS_DISCOUNT']; ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['PRODUCTS_FSK18'] == 'true'): ?><div class="hrlightgrey"></div><img src="<?php echo $this->_tpl_vars['tpl_path']; ?>
img/fsk18.gif" alt="" style="cursor:default" /><?php endif; ?>
			<?php if ($this->_tpl_vars['PRODUCTS_EXPIRES']): ?><p class="taxandshippinginfo"><?php echo $this->_config[0]['vars']['text_expires_date']; ?>
 <?php echo $this->_tpl_vars['PRODUCTS_EXPIRES']; ?>
</p><?php endif; ?>
			<?php if ($this->_tpl_vars['PRODUCTS_MODEL'] != ''): ?><div class="hrlightgrey"></div>
			<strong><?php echo $this->_config[0]['vars']['model']; ?>
</strong> <?php echo $this->_tpl_vars['PRODUCTS_MODEL']; ?>
<?php endif; ?>
			<?php if ($this->_tpl_vars['PRODUCTS_URL'] != ''): ?>
			<div class="hrlightgrey"></div><div style="padding-top:5px;"><?php echo $this->_tpl_vars['PRODUCTS_URL']; ?>
</div>
			<?php endif; ?> <br />
			<?php if ($this->_tpl_vars['KLARNA_PPBOX']): ?><?php echo $this->_tpl_vars['KLARNA_PPBOX']; ?>
<?php endif; ?>
			<div style="margin-top:10px"></div>
			<?php echo $this->_tpl_vars['PRODUCTS_PRINT']; ?>


		<?php if ($this->_tpl_vars['PRODUCTS_DATE_AVIABLE'] != ''): ?><p><?php echo $this->_tpl_vars['PRODUCTS_DATE_AVIABLE']; ?>
</p><?php endif; ?>
	</div>	
	<div style="clear:both;"></div>
    </td></tr></table>
	<?php if ($this->_tpl_vars['MODULE_product_options'] != ''): ?>
	<div class="productoptions"><?php echo $this->_tpl_vars['MODULE_product_options']; ?>
</div><?php endif; ?>
<!-- BOF - Tomcraft - 2009-11-28 - Included xs:booster //-->
	<?php if ($this->_tpl_vars['XTB_REDIRECT_USER_TO'] == 'product'): ?><div style='width:400px;padding:10px;color:white;background-color:green;'><strong>Sie haben die eBay Auktion gewonnen!</strong><br/>Bitte w&auml;hlen Sie nun noch die gew&uuml;nschten Produkteigenschaften und legen Sie den Artikel danach in den Warenkorb, um mit der Zahlung fortzufahren und das Produkt versandfertig zu machen!</div><?php endif; ?>
<!-- EOF - Tomcraft - 2009-11-28 - Included xs:booster //-->
	<div class="addtobasket">
	<table border="0" cellspacing="0" cellpadding="2">
  		<tr>
    		<td style="width:100%; padding-right:5px;"><?php echo $this->_tpl_vars['ADD_QTY']; ?>
</td>
    		<td><?php echo $this->_tpl_vars['ADD_CART_BUTTON']; ?>
</td>
  		</tr>
	</table>
	</div>	
</div>

<?php echo $this->_tpl_vars['FORM_END']; ?>


<div id="tabbed_product_info">

<ul>
	<?php if ($this->_tpl_vars['PRODUCTS_DESCRIPTION'] != ''): ?><li><a href="#tab_description"><?php echo $this->_config[0]['vars']['description']; ?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['MODULE_cross_selling'] != '' || $this->_tpl_vars['MODULE_reverse_cross_selling'] != ''): ?><li><a href="#tab_cross_selling"><?php echo $this->_config[0]['vars']['cross_selling']; ?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['MODULE_also_purchased'] != ''): ?><li><a href="#tab_also_purchased"><?php echo $this->_config[0]['vars']['also_purchased']; ?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['MODULE_products_reviews'] != ''): ?><li><a href="#tab_reviews"><?php echo $this->_config[0]['vars']['products_reviews']; ?>
</a></li><?php endif; ?>
	<?php if ($this->_tpl_vars['MODULE_products_media'] != ''): ?><li><a href="#tab_media"><?php echo $this->_config[0]['vars']['products_media']; ?>
</a></li><?php endif; ?>
	<?php if (count($this->_tpl_vars['more_images']) > 0): ?><li><a href="#tab_more_images"><?php echo $this->_config[0]['vars']['more_images']; ?>
</a></li><?php endif; ?>
</ul>

<?php if ($this->_tpl_vars['PRODUCTS_DESCRIPTION'] != ''): ?><div id="tab_description"><?php echo $this->_tpl_vars['PRODUCTS_DESCRIPTION']; ?>
</div><?php endif; ?>
<?php if (count($this->_tpl_vars['more_images']) > 0): ?><div id="tab_more_images">
	<!-- More Pictures -->
	<div class="morepics">
	<?php $_from = $this->_tpl_vars['more_images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['more_images_data']):
?> 
		<a class="thickbox" rel="<?php echo $this->_tpl_vars['PRODUCTS_ID']; ?>
" title="<?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
" href="<?php echo ((is_array($_tmp=$this->_tpl_vars['more_images_data']['PRODUCTS_IMAGE'])) ? $this->_run_mod_handler('replace', true, $_tmp, 'info_images', 'popup_images') : smarty_modifier_replace($_tmp, 'info_images', 'popup_images')); ?>
"><img align="left" src="<?php echo $this->_tpl_vars['more_images_data']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
" /></a>                          
	<?php endforeach; endif; unset($_from); ?>
	</div>
	<div style="clear:both;"></div>
	</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['MODULE_products_media'] != ''): ?><div id="tab_media"><?php echo $this->_tpl_vars['MODULE_products_media']; ?>
</div><?php endif; ?>
<?php if ($this->_tpl_vars['MODULE_products_reviews'] != ''): ?><div id="tab_reviews"><?php echo $this->_tpl_vars['MODULE_products_reviews']; ?>
</div><?php endif; ?>
<?php if ($this->_tpl_vars['MODULE_cross_selling'] != '' || $this->_tpl_vars['MODULE_reverse_cross_selling'] != ''): ?><div id="tab_cross_selling"><?php echo $this->_tpl_vars['MODULE_cross_selling']; ?>
<?php if ($this->_tpl_vars['MODULE_reverse_cross_selling'] != ''): ?><?php echo $this->_tpl_vars['MODULE_reverse_cross_selling']; ?>
<?php endif; ?></div><?php endif; ?>
<?php if ($this->_tpl_vars['MODULE_also_purchased'] != ''): ?><div id="tab_also_purchased"><?php echo $this->_tpl_vars['MODULE_also_purchased']; ?>
</div><?php endif; ?>

</div>

<?php echo $this->_tpl_vars['PRODUCT_NAVIGATOR']; ?>
