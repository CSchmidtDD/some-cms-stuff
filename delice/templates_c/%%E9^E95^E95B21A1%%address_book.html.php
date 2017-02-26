<?php /* Smarty version 2.6.27, created on 2015-12-08 17:39:28
         compiled from delice24/module/address_book.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/address_book.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'address_book'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_address']; ?>
</h2>
<?php echo $this->_tpl_vars['FORM_ACTION']; ?>

<?php if ($this->_tpl_vars['error'] != ''): ?><div class="errormessage"><?php echo $this->_tpl_vars['error']; ?>
</div><?php endif; ?>
<h3><?php echo $this->_config[0]['vars']['title_standard']; ?>
</h3>
<p><?php echo $this->_config[0]['vars']['text_standard']; ?>
</p>
<div class="highlightbox">
<h3><?php echo $this->_config[0]['vars']['title_standard']; ?>
:</h3>
<p><?php echo $this->_tpl_vars['ADDRESS_DEFAULT']; ?>
</p>
</div>
<h3><?php echo $this->_config[0]['vars']['title_addresses']; ?>
</h3>
<?php $_from = $this->_tpl_vars['addresses_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['addresses']):
        $this->_foreach['aussen']['iteration']++;
?>
<p><strong><?php echo $this->_tpl_vars['addresses']['NAME']; ?>
 <?php if ($this->_tpl_vars['addresses']['PRIMARY'] == '1'): ?> (<?php echo $this->_config[0]['vars']['title_standard']; ?>
) <?php endif; ?></strong><br />
<?php echo $this->_tpl_vars['addresses']['ADDRESS']; ?>
</p>
<p><?php echo $this->_tpl_vars['addresses']['BUTTON_EDIT']; ?>
&nbsp;<?php echo $this->_tpl_vars['addresses']['BUTTON_DELETE']; ?>
</p>
<div class="hr"></div>
<?php endforeach; endif; unset($_from); ?>
<p><?php echo $this->_tpl_vars['ADDRESS_COUNT']; ?>
</p>