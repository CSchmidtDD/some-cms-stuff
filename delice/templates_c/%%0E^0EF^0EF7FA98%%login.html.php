<?php /* Smarty version 2.6.27, created on 2015-10-16 12:10:26
         compiled from delice24/module/login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/login.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'login'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_login']; ?>
</h2>
<?php if ($this->_tpl_vars['info_message'] != ''): ?>
<div class="errormessage"><?php echo $this->_tpl_vars['info_message']; ?>
</div>
<?php endif; ?>
<?php if ($this->_tpl_vars['account_option'] == 'account' || $this->_tpl_vars['account_option'] == 'both'): ?>
<div class="highlightbox">
      <h3><?php echo $this->_config[0]['vars']['title_returning']; ?>
</h3>
      <?php echo $this->_tpl_vars['FORM_ACTION']; ?>

      <p><?php echo $this->_config[0]['vars']['text_returning']; ?>
</p>
      <table width="100" border="0" cellspacing="4" cellpadding="0" summary="Login">
            <tr>
                  <td style="white-space:nowrap;"><strong><?php echo $this->_config[0]['vars']['text_email']; ?>
</strong></td>
                  <td><?php echo $this->_tpl_vars['INPUT_MAIL']; ?>
</td>
                  <td>&nbsp;</td>
            </tr>
            <tr>
                  <td style="white-space:nowrap;"><strong><?php echo $this->_config[0]['vars']['text_password']; ?>
</strong></td>
                  <td><?php echo $this->_tpl_vars['INPUT_PASSWORD']; ?>
</td>
                  <td><?php echo $this->_tpl_vars['BUTTON_LOGIN']; ?>
</td>
            </tr>
            <tr>
                  <td>&nbsp;</td>
                  <td colspan="2"><a href="<?php echo $this->_tpl_vars['LINK_LOST_PASSWORD']; ?>
"><?php echo $this->_config[0]['vars']['text_lost_password']; ?>
</a></td>
            </tr>
      </table>
      <?php echo $this->_tpl_vars['FORM_END']; ?>

</div>
<br />
<div class="highlightbox">
      <h3><?php echo $this->_config[0]['vars']['title_new']; ?>
</h3>
      <p><?php echo $this->_config[0]['vars']['text_new']; ?>
</p>
      <p>Drei Vorteile, großer Nutzen für 1 Minute Ihrer Zeit </p>
      <p><?php echo $this->_tpl_vars['BUTTON_NEW_ACCOUNT']; ?>
</p>
</div>
<?php endif; ?> <?php if ($this->_tpl_vars['account_option'] == 'both' || $this->_tpl_vars['account_option'] == 'guest'): ?>
<br />
<div class="highlightbox">
      <h3><?php echo $this->_config[0]['vars']['title_guest']; ?>
</h3>
      <p><?php echo $this->_config[0]['vars']['text_guest']; ?>
</p>
      <p><?php echo $this->_tpl_vars['BUTTON_GUEST']; ?>
</p>
</div>
<?php endif; ?>