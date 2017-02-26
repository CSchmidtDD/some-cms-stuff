<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:51
         compiled from delice24/module/checkout_confirmation.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/checkout_confirmation.html', 1, false),array('modifier', 'stripslashes', 'delice24/module/checkout_confirmation.html', 82, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_confirmation'), $this);?>
 
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_navigation'), $this);?>

<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'duty_info'), $this);?>
 
<ul id="checkoutnavigation">
    <li class="inactive"><span class="number">1.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_shipping']; ?>
</span><br />
        <span class="description"><?php echo $this->_config[0]['vars']['desc_shipping']; ?>
</span></li>
    <li class="inactive"><span class="number">2.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_payment']; ?>
</span><br />
        <span class="description"><?php echo $this->_config[0]['vars']['desc_payment']; ?>
</span></li>
    <li class="active"><span class="number">3.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_confirmation']; ?>
</span><br />
        <span class="description"><?php echo $this->_config[0]['vars']['desc_confirmation']; ?>
</span></li>
    <li class="inactive"><span class="number">4.</span> <span class="title"><?php echo $this->_config[0]['vars']['title_success']; ?>
</span><br />
        <span class="description"><?php echo $this->_config[0]['vars']['desc_success']; ?>
</span></li>
</ul>
<div style="clear:both"></div>

<br />
<h2><?php echo $this->_config[0]['vars']['heading_confirmation']; ?>
</h2>

<div class="checkout_infos">

  <div class="<?php if ($this->_tpl_vars['REVOCATION']): ?>checkoutInfoBoxes<?php else: ?>checkoutInfoBoxes<?php endif; ?>" style="text-align: justify;">
    <?php echo $this->_config[0]['vars']['text_information']; ?>

    <?php if ($this->_tpl_vars['IP_LOG'] == 'true'): ?>
    <p><?php echo $this->_config[0]['vars']['text_ip']; ?>
:&nbsp;<strong><?php echo $this->_tpl_vars['CUSTOMERS_IP']; ?>
</strong></p>
    <?php endif; ?>
  </div>

  <?php if ($this->_tpl_vars['REVOCATION']): ?>
  <div class="checkoutInfoBoxes">    
    <?php echo $this->_tpl_vars['TEXT_AGB_CHECKOUT']; ?>

  </div>
  <?php endif; ?>

  <div style="clear:both"><br /></div>  

  <div class="checkoutNavBoxes">
    <h2><?php echo $this->_config[0]['vars']['text_shipping_address']; ?>
</h2>
    <div class="text">&nbsp;<a href="<?php echo $this->_tpl_vars['SHIPPING_ADDRESS_EDIT']; ?>
"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></div>
    <div style="clear:both"><?php echo $this->_tpl_vars['DELIVERY_LABEL']; ?>
<br /></div>
  </div>
  
  <?php if ($this->_tpl_vars['BILLING_LABEL']): ?>
  <div class="checkoutNavBoxes">
    <h2><?php echo $this->_config[0]['vars']['text_payment_address']; ?>
</h2>
    <div class="text">&nbsp;<a href="<?php echo $this->_tpl_vars['BILLING_ADDRESS_EDIT']; ?>
"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></div> 
    <div style="clear:both"><?php echo $this->_tpl_vars['BILLING_LABEL']; ?>
<br /></div>
  </div>
  <?php endif; ?>

  <div style="clear:both"><br /></div>
  
  <?php if ($this->_tpl_vars['SHIPPING_METHOD']): ?>
    <div class="checkoutNav2Boxes">
      <h2><?php echo $this->_config[0]['vars']['text_shipping_method']; ?>
</h2>
      <div class="text">&nbsp;<a href="<?php echo $this->_tpl_vars['SHIPPING_EDIT']; ?>
"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></div> 
      <p style="clear:both;"><?php echo $this->_tpl_vars['SHIPPING_METHOD']; ?>
</p>
    </div>
  <?php endif; ?> 

  <?php if ($this->_tpl_vars['PAYMENT_METHOD'] != ''): ?>
    <div class="checkoutNav2Boxes">
      <h2><?php echo $this->_config[0]['vars']['text_payment_method']; ?>
</h2>
      <div class="text">&nbsp;<a href="<?php echo $this->_tpl_vars['PAYMENT_EDIT']; ?>
"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></div> 
      <p style="clear:both;"><?php echo $this->_tpl_vars['PAYMENT_METHOD']; ?>
</p>
    </div>
  <?php endif; ?>
  <div style="clear:both"></div>  
  
  <?php if ($this->_tpl_vars['ORDER_COMMENTS'] != ''): ?>
    <br />
    <h2><?php echo $this->_config[0]['vars']['text_comments']; ?>
</h2>
    <div class="text">&nbsp;<a href="<?php echo $this->_tpl_vars['PAYMENT_EDIT']; ?>
"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></div>  
    <div style="clear:both;padding: 0 5px;"><?php echo $this->_tpl_vars['ORDER_COMMENTS']; ?>
</div>  
  <?php endif; ?>
  
  <?php if ($this->_tpl_vars['PAYMENT_INFORMATION'] != ''): ?>
    <br />
    <h2><?php echo $this->_config[0]['vars']['text_payment_info']; ?>
</h2>
    <table style="clear:both">
      <tr>
        <?php $_from = $this->_tpl_vars['PAYMENT_INFORMATION']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['data']):
        $this->_foreach['aussen']['iteration']++;
?>    
          <td class="main"><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
          <td>&nbsp;</td>
          <td class="main"><?php if ($this->_tpl_vars['data']['field']): ?><?php echo ((is_array($_tmp=$this->_tpl_vars['data']['field'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<?php else: ?>&nbsp;<?php endif; ?></td>    
        <?php endforeach; endif; unset($_from); ?>
      </tr>
    </table>
  <?php endif; ?>
  
  <br />
  <h2><?php echo $this->_config[0]['vars']['text_products']; ?>
</h2>
  <p class="text">&nbsp;<a href="<?php echo $this->_tpl_vars['PRODUCTS_EDIT']; ?>
"><?php echo $this->_config[0]['vars']['text_edit']; ?>
</a></p>
  <div style="clear:both"></div>
  
</div>

<div class="highlightbox checkoutbox">   
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr class="headerrow">
      <td class="main_header" style="width:50px" align="left" valign="top"><b><?php echo @HEADER_QTY; ?>
</b></td>
      <td class="main_header" style="padding-left:90px;" align="left" valign="top"><b><?php echo @HEADER_ARTICLE; ?>
</b></td>
      <td class="main_header" style="width:100px;" align="right" valign="top"><b><?php echo @HEADER_SINGLE; ?>
</b></td>
      <td class="main_header" style="width:100px;" align="right" valign="top"><b><?php echo @HEADER_TOTAL; ?>
</b></td>
    </tr>
    <?php $_from = $this->_tpl_vars['PRODUCTS_ARRAY']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['data']):
        $this->_foreach['aussen']['iteration']++;
?>
    <tr>
      <td class="main_row" align="left" valign="top"><?php echo $this->_tpl_vars['data']['qty']; ?>
</td>
      <td class="main_row" align="left" valign="top">
        <?php if (@CHECKOUT_SHOW_PRODUCTS_IMAGES == 'true'): ?>
        <div style="width:90px; float:left;"><?php echo $this->_tpl_vars['data']['image']; ?>
</div>
        <?php endif; ?>
        <div style="width:420px; float:left;">
        <?php echo $this->_tpl_vars['data']['link']; ?>

        <?php if ($this->_tpl_vars['data']['order_description']): ?><div class="small"><?php echo $this->_tpl_vars['data']['order_description']; ?>
</div><?php endif; ?>
        <?php if ($this->_tpl_vars['data']['shipping_time']): ?><br /><span class="nobr small"><?php echo @SHIPPING_TIME; ?>
<?php echo $this->_tpl_vars['data']['shipping_time']; ?>
</span><?php endif; ?>
        <?php $_from = $this->_tpl_vars['data']['attributes']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['a_data'] => $this->_tpl_vars['attrib_data']):
?>
          <?php if ($this->_tpl_vars['attrib_data']['value'] != ''): ?><br /><span class="nobr small">&nbsp;<i> - <?php echo $this->_tpl_vars['attrib_data']['option']; ?>
 : <?php echo $this->_tpl_vars['attrib_data']['value']; ?>
</i></span><?php endif; ?>           
        <?php endforeach; endif; unset($_from); ?> 
        </div>        
      </td>      
      <td class="main_row" align="right" valign="top"><?php echo $this->_tpl_vars['data']['price_formated']; ?>
</td>
      <td class="main_row" align="right" valign="top"><?php echo $this->_tpl_vars['data']['final_price_formated']; ?>
<?php if ($this->_tpl_vars['ORDER_TAX_GROUPS'] > 1): ?><br /><?php echo $this->_tpl_vars['data']['tax']; ?>
 %<?php endif; ?></td>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
  </table>
    
  <div class="hr"></div>
  <?php if ($this->_tpl_vars['TOTAL_BLOCK']): ?>
    <div class="total">
      <table align="right">
        <?php echo $this->_tpl_vars['TOTAL_BLOCK']; ?>

      </table>
      <div style="clear:both"></div>
    </div>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['DELIVERY_DUTY_INFO'] == true): ?>
    <div class="hr"></div>
    <div style="font-size:11px; border:0px solid red;padding:5px;margin-top:8px;"><?php echo $this->_config[0]['vars']['text_duty_info']; ?>
</div>
  <?php endif; ?>
  <br />
  <div style="text-align:right"><?php echo $this->_tpl_vars['CHECKOUT_FORM']; ?>
<?php if ($this->_tpl_vars['MODULE_BUTTONS'] != ''): ?>&nbsp;<?php echo $this->_tpl_vars['MODULE_BUTTONS']; ?>
<?php endif; ?>&nbsp;<?php echo $this->_tpl_vars['CHECKOUT_BUTTON']; ?>
</div>  
</div>