<?php /* Smarty version 2.6.27, created on 2017-01-23 15:00:04
         compiled from delice24/module/account_history.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/account_history.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'account_history'), $this);?>

<h2><?php echo $this->_config[0]['vars']['heading_history']; ?>
</h2>
<?php $_from = $this->_tpl_vars['order_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_data']):
        $this->_foreach['aussen']['iteration']++;
?>
<div class="highlightbox">
<h3><?php echo $this->_config[0]['vars']['text_oid']; ?>
<?php echo $this->_tpl_vars['order_data']['ORDER_ID']; ?>
</h3>
<p><?php echo $this->_config[0]['vars']['text_date']; ?>
<?php echo $this->_tpl_vars['order_data']['ORDER_DATE']; ?>
,
<?php echo $this->_config[0]['vars']['text_articles']; ?>
<?php echo $this->_tpl_vars['order_data']['ORDER_PRODUCTS']; ?>
 <br />
<strong><?php echo $this->_config[0]['vars']['text_total']; ?>
</strong><?php echo $this->_tpl_vars['order_data']['ORDER_TOTAL']; ?>
&nbsp;&nbsp;<strong><?php echo $this->_config[0]['vars']['text_status']; ?>
</strong><?php echo $this->_tpl_vars['order_data']['ORDER_STATUS']; ?>
 
</p><p><?php echo $this->_tpl_vars['order_data']['ORDER_BUTTON']; ?>
</p>
</div>
<div class="hr"></div>
<?php endforeach; endif; unset($_from); ?>
<p><?php echo $this->_tpl_vars['SPLIT_BAR']; ?>
</p>
<p><?php echo $this->_tpl_vars['BUTTON_BACK']; ?>
</p>		 