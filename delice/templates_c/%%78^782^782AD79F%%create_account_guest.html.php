<?php /* Smarty version 2.6.27, created on 2015-10-29 02:33:51
         compiled from delice24/module/create_account_guest.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/create_account_guest.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'create_account'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_create_guest_account']; ?>
</h2>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<?php if ($this->_tpl_vars['error'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
<h3><?php echo $this->_config[0]['vars']['title_personal']; ?>
 (<?php echo $this->_config[0]['vars']['text_must']; ?>
)</h3>
<div class="highlightbox">
<table width="100%"  cellspacing="0" cellpadding="4">
<?php if ($this->_tpl_vars['gender'] == '1'): ?>
  <tr> 
    <td width="120"><?php echo $this->_config[0]['vars']['text_gender']; ?>
</td>
    <td>
		<table cellspacing="0" cellpadding="0">
			<tr>
			  	<td><?php echo $this->_tpl_vars['INPUT_MALE']; ?>
</td>
			  	<td><?php echo $this->_tpl_vars['INPUT_FEMALE']; ?>
</td>				
  			</tr>
		</table>
	</td>
  </tr>
  <?php endif; ?>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_firstname']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_FIRSTNAME']; ?>
</td>
  </tr>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_lastname']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_LASTNAME']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['birthdate'] == '1'): ?>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_birthdate']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_DOB']; ?>
</td>
  </tr>
  <?php endif; ?>
  <tr>
    <td><?php echo $this->_config[0]['vars']['text_email']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_EMAIL']; ?>
</td>
  </tr>
   <tr>
	   <td><?php echo $this->_config[0]['vars']['text_confirm_email']; ?>
</td>
	   <td><?php echo $this->_tpl_vars['INPUT_CONFIRM_EMAIL']; ?>
</td>
 </tr>
</table>
</div>
<?php if ($this->_tpl_vars['company'] == '1'): ?>
<h3><?php echo $this->_config[0]['vars']['title_company']; ?>
</h3>
<div class="highlightbox">
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr> 
    <td width="120"><?php echo $this->_config[0]['vars']['text_company']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_COMPANY']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['vat'] == '1'): ?>
  <tr>
     <td><?php echo $this->_config[0]['vars']['text_ustid']; ?>
</td>
     <td><?php echo $this->_tpl_vars['INPUT_VAT']; ?>
</td>
  </tr>
  <?php endif; ?>
</table>
</div>
<?php endif; ?>
<h3><?php echo $this->_config[0]['vars']['title_address']; ?>
</h3>
<div class="highlightbox">
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr> 
     <td width="120"><?php echo $this->_config[0]['vars']['text_street']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_STREET']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['suburb'] == '1'): ?>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_suburb']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_SUBURB']; ?>
</td>
  </tr>
  <?php endif; ?>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_code']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_CODE']; ?>
</td>
  </tr>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_city']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_CITY']; ?>
</td>
  </tr>
  <?php if ($this->_tpl_vars['state'] == '1'): ?>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_state']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_STATE']; ?>
</td>
  </tr>
  <?php endif; ?>
  <tr>
    <td><?php echo $this->_config[0]['vars']['text_country']; ?>
</td>
    <td><?php echo $this->_tpl_vars['SELECT_COUNTRY']; ?>
</td>
  </tr>
</table>
</div>
<h3><?php echo $this->_config[0]['vars']['title_contact']; ?>
</h3>
<div class="highlightbox">
<table width="100%" border="0" cellspacing="2" cellpadding="0">
  <tr> 
    <td width="120"><?php echo $this->_config[0]['vars']['text_tel']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_TEL']; ?>
</td>
  </tr>
  <tr>
    <td><?php echo $this->_config[0]['vars']['text_fax']; ?>
</td>
    <td><?php echo $this->_tpl_vars['INPUT_FAX']; ?>
</td>
  </tr>
</table>
</div>
<h3><?php echo $this->_config[0]['vars']['title_newsletter']; ?>
</h3>
<div class="highlightbox">
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr> 
    <td width="25"><?php echo $this->_tpl_vars['CHECKBOX_NEWSLETTER']; ?>
</td>
    <td><?php echo $this->_config[0]['vars']['text_newsletter']; ?>
</td>
  </tr>
</table>
</div>
<?php if ($this->_tpl_vars['PRIVACY_CHECKBOX']): ?>
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr>
    <td><?php echo $this->_tpl_vars['PRIVACY_CHECKBOX']; ?>
</td>
    <td width="100%"><strong><?php echo $this->_config[0]['vars']['text_privacy_accept']; ?>
</strong> <?php echo $this->_tpl_vars['PRIVACY_LINK']; ?>
</td>
  </tr>
</table>
<?php endif; ?>
<p><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</p>
<?php echo $this->_tpl_vars['FORM_END']; ?>
