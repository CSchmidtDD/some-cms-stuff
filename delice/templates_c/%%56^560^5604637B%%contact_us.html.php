<?php /* Smarty version 2.6.27, created on 2015-10-17 13:42:46
         compiled from delice24/module/contact_us.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/contact_us.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'newsletter'), $this);?>
 <?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'contact_us'), $this);?>

<h2><?php echo $this->_tpl_vars['CONTACT_HEADING']; ?>
</h2>
<?php echo $this->_tpl_vars['CONTACT_CONTENT']; ?>
 <br />
<br />
<?php if ($this->_tpl_vars['error_message'] != ''): ?>
<div class="errormessage"><?php echo $this->_tpl_vars['error_message']; ?>
</div>
<?php endif; ?> <?php if ($this->_tpl_vars['success'] != '1'): ?> <?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<div class="highlightbox">
      <table width="100%" border="0" cellspacing="0" cellpadding="4">
            <tr>
                  <td width="41%"><?php echo $this->_config[0]['vars']['text_name']; ?>
</td>
                  <td width="59%"><?php echo $this->_tpl_vars['INPUT_NAME']; ?>
</td>
            </tr>
            <tr>
                  <td><?php echo $this->_config[0]['vars']['text_email']; ?>
</td>
                  <td width="59%"><?php echo $this->_tpl_vars['INPUT_EMAIL']; ?>
</td>
            </tr>
            <tr>
                  <td><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['VVIMG']; ?>
</td>
            </tr>
            <tr>
                  <td><?php echo $this->_config[0]['vars']['text_sec_code']; ?>
</td>
                  <td width="59%"><?php echo $this->_tpl_vars['INPUT_CODE']; ?>
</td>
            </tr>
            <tr>
                  <td><?php echo $this->_config[0]['vars']['text_message']; ?>
</td>
                  <td width="59%"><?php echo $this->_tpl_vars['INPUT_TEXT']; ?>
</td>
            </tr>
      </table>
</div>
<p><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</p>
<?php echo $this->_tpl_vars['FORM_END']; ?>
 <?php else: ?>
<p><?php echo $this->_config[0]['vars']['text_success']; ?>
</p>
<p><?php echo $this->_tpl_vars['BUTTON_CONTINUE']; ?>
</p>
<?php endif; ?> 