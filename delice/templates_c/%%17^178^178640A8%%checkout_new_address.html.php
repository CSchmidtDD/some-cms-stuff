<?php /* Smarty version 2.6.27, created on 2015-12-01 07:01:38
         compiled from delice24/module/checkout_new_address.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/checkout_new_address.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'checkout_new_address'), $this);?>

<h2><?php echo $this->_config[0]['vars']['title_new_address']; ?>
 (<?php echo $this->_config[0]['vars']['text_must']; ?>
)</h2>
<p><?php echo $this->_config[0]['vars']['text_new_address']; ?>
</p>
<div class="highlightbox">
<table width="100%" border="0" cellspacing="2" cellpadding="0">
  <?php if ($this->_tpl_vars['gender'] == '1'): ?> 
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_gender']; ?>
</td>
    <td>
		<table cellspacing="0" cellpadding="0">
			<tr>
			  	<td> <?php echo $this->_tpl_vars['INPUT_MALE']; ?>
</td>
			  	<td> <?php echo $this->_tpl_vars['INPUT_FEMALE']; ?>
</td>				
  			</tr>
		</table>
	</td>
  </tr>
  <?php endif; ?> 
  <tr> 
    <td ><?php echo $this->_config[0]['vars']['text_firstname']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['INPUT_FIRSTNAME']; ?>
</td>
  </tr>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_lastname']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['INPUT_LASTNAME']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['company'] == '1'): ?> 
  <tr> 
    <td>&nbsp;</td>
    <td align="left"></td>
  </tr>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_company']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['INPUT_COMPANY']; ?>
</td>
  </tr>
  <?php endif; ?> 
  <tr> 
    <td>&nbsp;</td>
    <td align="left"></td>
  </tr>
  <tr> 
    <td ><?php echo $this->_config[0]['vars']['text_street']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['INPUT_STREET']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['suburb'] == '1'): ?> 
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_suburb']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['INPUT_SUBURB']; ?>
</td>
  </tr>
  <?php endif; ?> 
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_code']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['INPUT_CODE']; ?>
</td>
  </tr>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_city']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['INPUT_CITY']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['state'] == '1'): ?> 
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_state']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['INPUT_STATE']; ?>
</td>
  </tr>
  <?php endif; ?> 
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_country']; ?>
</td>
    <td align="left"><?php echo $this->_tpl_vars['SELECT_COUNTRY']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['new'] == '1'): ?> 
  <tr> 
    <td>&nbsp;</td>
    <td align="left"><?php echo $this->_tpl_vars['CHECKBOX_PRIMARY']; ?>
 <?php echo $this->_config[0]['vars']['text_standard']; ?>
</td>
  </tr>
  <?php endif; ?> 
</table>
</div>