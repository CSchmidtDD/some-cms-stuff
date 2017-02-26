<?php /* Smarty version 2.6.27, created on 2015-10-29 00:50:37
         compiled from delice24/module/password_double_opt_in.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/password_double_opt_in.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'new_password'), $this);?>

<h2><?php echo $this->_tpl_vars['text_heading']; ?>
</h2>
<?php if ($this->_tpl_vars['info_message'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['info_message']; ?>
</div><?php endif; ?>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<p><?php echo $this->_tpl_vars['message']; ?>
:</p>
<div class="highlightbox">
<table width="100%" border="0" cellspacing="0" cellpadding="4">
  <tr> 
    <td colspan="2"><strong><?php echo $this->_config[0]['vars']['text_step1']; ?>
</strong><br />
      <?php echo $this->_config[0]['vars']['text_info_pre']; ?>
 <?php echo $this->_tpl_vars['SHOP_NAME']; ?>
 <?php echo $this->_config[0]['vars']['text_info_post']; ?>
</td>
  </tr>
  <tr>
    <td colspan="2" style="height:4px;"></td>
  </tr>
  <tr> 
    <td width="130"><strong><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
:</strong></td>
    <td><strong><?php echo $this->_tpl_vars['VVIMG']; ?>
</strong></td>
  </tr>
  <tr> 
    <td><strong><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
:</strong></td>
    <td><?php echo $this->_tpl_vars['INPUT_CODE']; ?>
</td>
  </tr>
  <tr> 
    <td><strong><?php echo $this->_config[0]['vars']['text_email']; ?>
</strong></td>
    <td><?php echo $this->_tpl_vars['INPUT_EMAIL']; ?>
</td>
  </tr>
</table>
</div>
<p><?php echo $this->_config[0]['vars']['text_continue']; ?>
</p>
<p><?php echo $this->_tpl_vars['BUTTON_SEND']; ?>
</p>
<?php echo $this->_tpl_vars['FORM_END']; ?>
