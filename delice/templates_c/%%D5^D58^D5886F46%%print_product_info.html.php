<?php /* Smarty version 2.6.27, created on 2015-10-21 18:09:40
         compiled from delice24/module/print_product_info.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/print_product_info.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'print_product_info'), $this);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <title><?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
 / <?php echo $this->_tpl_vars['PRODUCTS_MODEL']; ?>
</title>
  <meta http-equiv="Content-Type" content="text/html; charset=<?php echo $this->_tpl_vars['charset']; ?>
" />
  <meta name="robots" content="noindex, nofollow, noodp" />
  <?php if ($this->_tpl_vars['CanonicalLink']): ?>
    <link href="<?php echo $this->_tpl_vars['CanonicalLink']; ?>
" rel="canonical" />
  <?php endif; ?>
  <meta http-equiv="Content-Style-Type" content="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['tpl_path']; ?>
stylesheet.css" />
  <style type="text/css">
  <?php echo '
    body {background: none;}
  '; ?>

  </style>
</head>
<body class="popupproductinfo" <?php if (! $this->_tpl_vars['noprint']): ?> onload="window.print()"<?php endif; ?>>
  <h1 style="margin-top:0px;"><?php echo $this->_tpl_vars['PRODUCTS_NAME']; ?>
</h1>
  <div id="productinfowrap">
    <?php if ($this->_tpl_vars['PRODUCTS_IMAGE'] != ''): ?>
      <div id="productinfoimages" style="width:<?php echo @PRODUCT_IMAGE_THUMBNAIL_WIDTH; ?>
px;"><img src="<?php echo $this->_tpl_vars['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['NAME']; ?>
" border="0" />
      <?php $_from = $this->_tpl_vars['more_images']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['more_images_data']):
?>
        <div class="hrlightgrey"></div><img src="<?php echo $this->_tpl_vars['more_images_data']['PRODUCTS_IMAGE']; ?>
" alt="<?php echo $this->_tpl_vars['module_data']['NAME']; ?>
" border="0" class="productimage"/>
      <?php endforeach; endif; unset($_from); ?>
    </div>
    <?php endif; ?>
    <div id="productinfodescription">
      <?php if ($this->_tpl_vars['PRODUCTS_MODEL'] != ''): ?><p><?php echo $this->_tpl_vars['PRODUCTS_MODEL']; ?>
</p><?php endif; ?>
      <p><?php echo $this->_tpl_vars['PRODUCTS_DESCRIPTION']; ?>
</p>
      <?php if ($this->_tpl_vars['module_content'] != ''): ?>
        <h2><?php echo $this->_config[0]['vars']['options']; ?>
</h2>    
        <ul><?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>
        <li><?php echo $this->_tpl_vars['module_data']['GROUP']; ?>
: <?php echo $this->_tpl_vars['module_data']['NAME']; ?>
</li>
        <?php endforeach; endif; unset($_from); ?>
        </ul>    
      <?php endif; ?>
      <h2><?php echo $this->_config[0]['vars']['price']; ?>
</h2>
      <p><strong><?php echo $this->_tpl_vars['PRODUCTS_PRICE']; ?>
</strong>, <?php echo $this->_tpl_vars['PRODUCTS_TAX_INFO']; ?>
<?php echo $this->_tpl_vars['PRODUCTS_SHIPPING_LINK']; ?>
</p>
      <?php if ($this->_tpl_vars['MODULE_graduated_price'] != ''): ?><div class="hrlightgrey"></div><?php echo $this->_tpl_vars['MODULE_graduated_price']; ?>
<?php endif; ?>
      <?php if ($this->_tpl_vars['PRODUCTS_DISCOUNT'] != ''): ?><div class="hrlightgrey"></div><?php echo $this->_tpl_vars['PRODUCTS_DISCOUNT']; ?>
<?php endif; ?>
      <?php if ($this->_tpl_vars['PRODUCTS_VPE']): ?> <p><?php echo $this->_tpl_vars['PRODUCTS_VPE']; ?>
</p><?php endif; ?>
    </div>
    <div style="clear:left; height:15px;"></div>
  </div>
</body>
</html>