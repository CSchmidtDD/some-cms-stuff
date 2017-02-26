<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:51
         compiled from delice24/module/sitemap.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/module/sitemap.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'sitemap'), $this);?>

<h2>Sitemap</h2>
<div class="sitemapwrap">
	<?php $i=0; ?>
	<?php $_from = $this->_tpl_vars['module_content']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['module_data']):
        $this->_foreach['aussen']['iteration']++;
?>
	<?php $i++; ?>
	<?php 
		if ($i==1) {
			echo "<div class=\"sitemapleft\">";
		} else {
			echo "<div class=\"sitemapright\">";
		}
		 ?>
				<div class="sitemapheader"><a href="<?php echo $this->_tpl_vars['module_data']['CAT_LINK']; ?>
"><?php echo $this->_tpl_vars['module_data']['CAT_NAME']; ?>
</a></div>
				<div class="sitemapcontent">
					<ul>
					<?php $_from = $this->_tpl_vars['module_data']['SCATS']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key_data'] => $this->_tpl_vars['item_data']):
?>
						<li><a href="<?php echo $this->_tpl_vars['item_data']['link']; ?>
"><?php echo $this->_tpl_vars['item_data']['text']; ?>
</a></li>
					<?php endforeach; endif; unset($_from); ?>
					</ul>
				</div>
		</div>
	<?php 
	if ($i==2) { 
		echo '<div style="clear:both;"></div>';
		$i=0;
	}
	 ?>  
	<?php endforeach; endif; unset($_from); ?>
	<div style="clear:both;"></div>
</div>