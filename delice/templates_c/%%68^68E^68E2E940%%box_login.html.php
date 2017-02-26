<?php /* Smarty version 2.6.27, created on 2015-10-15 17:19:00
         compiled from delice24/boxes/box_login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/boxes/box_login.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'boxes'), $this);?>


<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<table summary="Login">
  <tbody>
    <tr valign="top">
      <td>
       <?php echo $this->_tpl_vars['FIELD_EMAIL']; ?>
<br />
        E-Mail
      </td>
      <td>
        <?php echo $this->_tpl_vars['FIELD_PWD']; ?>
<br />
        <?php echo $this->_config[0]['vars']['text_pwd']; ?>

      </td>
      <td>
        <button type="submit" value="Login">Login</button>
      </td>
    </tr>
  </tbody>
</table>
<?php echo $this->_tpl_vars['FORM_END']; ?>
