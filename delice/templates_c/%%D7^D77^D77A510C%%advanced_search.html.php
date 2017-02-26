<?php /* Smarty version 2.6.27, created on 2015-10-17 12:21:18
         compiled from delice24/module/advanced_search.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/advanced_search.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'advanced_search'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_search']; ?>
</h2>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<?php if ($this->_tpl_vars['error'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
<div class="highlightbox">
<table width="100%" border="0" cellpadding="4" summary="">
  <tr> 
    <td width="45%"><strong><?php echo $this->_config[0]['vars']['title_keywords']; ?>
</strong></td>
    <td width="55%"><?php echo $this->_tpl_vars['INPUT_KEYWORDS']; ?>
</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><a href="<?php echo $this->_tpl_vars['HELP_LINK']; ?>
" title="Information" class="thickbox"><?php echo $this->_config[0]['vars']['text_help']; ?>
</a></td>
  </tr>
  <tr> 
    <td width="45%" valign="top"><strong><?php echo $this->_config[0]['vars']['text_categories']; ?>
</strong></td>
    <td width="55%"><?php echo $this->_tpl_vars['SELECT_CATEGORIES']; ?>
<br>
      <?php echo $this->_tpl_vars['ENTRY_SUBCAT']; ?>
<?php echo $this->_config[0]['vars']['text_subkategories']; ?>
</td>
  </tr>
  <tr> 
    <td width="45%" valign="top"><strong><?php echo $this->_config[0]['vars']['text_manufacturer']; ?>
</strong></td>
    <td width="55%"><?php echo $this->_tpl_vars['SELECT_MANUFACTURERS']; ?>
</td>
  </tr>
  <tr> 
    <td width="45%" valign="top"><strong><?php echo $this->_config[0]['vars']['text_min']; ?>
</strong></td>
    <td width="55%"><?php echo $this->_tpl_vars['SELECT_PFROM']; ?>
</td>
  </tr>
  <tr>
    <td width="45%" valign="top"><strong><?php echo $this->_config[0]['vars']['text_max']; ?>
</strong></td>
    <td width="55%"><?php echo $this->_tpl_vars['SELECT_PTO']; ?>
</td>
  </tr>
</table>
</div>
<p><?php echo $this->_tpl_vars['BUTTON_SUBMIT']; ?>
</p>
<?php echo $this->_tpl_vars['FORM_END']; ?>
