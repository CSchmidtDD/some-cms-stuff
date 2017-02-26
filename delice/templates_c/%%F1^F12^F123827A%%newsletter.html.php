<?php /* Smarty version 2.6.27, created on 2015-10-17 12:19:30
         compiled from delice24/module/newsletter.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/newsletter.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'newsletter'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_title']; ?>
</h2>
<?php if ($this->_tpl_vars['info_message'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['info_message']; ?>
</div><?php endif; ?>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<div class="highlightbox">
<table border="0" cellspacing="0" cellpadding="4">
  <tr> 
    <td width="140"><strong><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
:</strong></td>
    <td><?php echo $this->_tpl_vars['VVIMG']; ?>
</td>
  </tr>
  <tr> 
    <td><strong><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
:</strong></td>
    <td><?php echo $this->_tpl_vars['INPUT_CODE']; ?>
</td>
  </tr>
  <tr> 
    <td><strong><?php echo $this->_config[0]['vars']['text_email']; ?>
:</strong></td>
    <td><?php echo $this->_tpl_vars['INPUT_EMAIL']; ?>
</td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td><table cellspacing="0" cellpadding="0">
        <tr> 
          <td><?php echo $this->_tpl_vars['CHECK_INP']; ?>
</td>
          <td><?php echo $this->_config[0]['vars']['text_in']; ?>
</td>
        </tr>
        <tr> 
          <td><?php echo $this->_tpl_vars['CHECK_DEL']; ?>
</td>
          <td><?php echo $this->_config[0]['vars']['text_out']; ?>
</td>
        </tr>
      </table></td>
  </tr>
  <tr> 
    <td>&nbsp;</td>
    <td><?php echo $this->_tpl_vars['BUTTON_SEND']; ?>
</td>
  </tr>
</table>
</div>
<?php echo $this->_tpl_vars['FORM_END']; ?>
