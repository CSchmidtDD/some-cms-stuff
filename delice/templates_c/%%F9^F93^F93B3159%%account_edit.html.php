<?php /* Smarty version 2.6.27, created on 2015-12-08 17:39:15
         compiled from delice24/module/account_edit.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/account_edit.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'account_edit'), $this);?>
 
<h2><?php echo $this->_config[0]['vars']['heading_account']; ?>
</h2>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<?php if ($this->_tpl_vars['error'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
<div class="highlightbox">
	<h3><?php echo $this->_config[0]['vars']['title_personal']; ?>
&nbsp;(<?php echo $this->_config[0]['vars']['text_must']; ?>
)</h3>
  <table width="100%" border="0" cellspacing="2" cellpadding="4" summary="">
  <?php if ($this->_tpl_vars['csID']): ?>
  <tr> 
    <td><?php echo $this->_config[0]['vars']['csID']; ?>
</td>
    <td><b><?php echo $this->_tpl_vars['csID']; ?>
</b></td>
  </tr>
  <?php endif; ?>
  <?php if ($this->_tpl_vars['gender'] == '1'): ?> 
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_gender']; ?>
</td>
    <td><table cellspacing="0" cellpadding="0" summary="">
      <tr>
        <td>
          <?php echo $this->_tpl_vars['INPUT_MALE']; ?>
</td>
        <td>
          <?php echo $this->_tpl_vars['INPUT_FEMALE']; ?>
</td>
      </tr>
    </table></td>
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
  <tr> 
    <td><?php echo $this->_config[0]['vars']['text_tel']; ?>
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
<p><?php echo $this->_tpl_vars['BUTTON_BACK']; ?>
&nbsp;<?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</p>
<?php echo $this->_tpl_vars['FORM_END']; ?>
