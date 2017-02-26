<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:32
         compiled from delice24/index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'delice24/index.html', 1, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => ($this->_tpl_vars['language'])."/lang_".($this->_tpl_vars['language']).".conf",'section' => 'index'), $this);?>
<div id="wow"> 	<div id="wrap">	    <div id="header">	    		        <h1><a href="/"><span>Ihr Delikatessenfachhandel - Delice24</span></a></h1>                <div id="toplogin"><?php echo $this->_tpl_vars['box_LOGIN']; ?>
</div>                  	    			        <ul id="topmenu">	            <li><a href="/">Home</a></li>	            <li><a href="<?php echo $this->_tpl_vars['cart']; ?>
"><?php echo $this->_config[0]['vars']['link_cart']; ?>
</a></li>	            <li><a href="<?php echo $this->_tpl_vars['checkout']; ?>
"><?php echo $this->_config[0]['vars']['link_checkout']; ?>
</a></li>	            <?php if ($this->_tpl_vars['account']): ?>	            	<li><a href="<?php echo $this->_tpl_vars['account']; ?>
"><?php echo $this->_config[0]['vars']['link_account']; ?>
</a></li>	            <?php endif; ?>	             <?php if ($_SESSION['customers_status']['customers_status_id'] == 1) {  ?> 	            	<li class="last"><a href="<?php echo xtc_href_link('create_account.php'); ?>"><?php echo $this->_config[0]['vars']['new_customer']; ?>
</a></li>	             <?php } ?>	            <?php if ($this->_tpl_vars['account']): ?><?php  if (isset($_SESSION['customer_id'])) {  ?>	            	<li class="last"><a href="<?php echo $this->_tpl_vars['logoff']; ?>
"><?php echo $this->_config[0]['vars']['link_logoff']; ?>
</a></li>	            <?php  }  ?><?php endif; ?>	        </ul>	        <div id="search"><?php echo $this->_tpl_vars['box_SEARCH']; ?>
</div>	    </div>	    <div id="contentwrap"> 				<?php if (! strstr ( $_SERVER['PHP_SELF'] , 'checkout' )): ?>					<div id="leftcol">						<div class="inside">						<?php echo $this->_tpl_vars['box_CATEGORIES']; ?>
												<?php echo $this->_tpl_vars['box_SPECIALS']; ?>
						<?php echo $this->_tpl_vars['box_INFORMATION']; ?>
						</div>					</div>				<?php endif; ?>		  <div	      <?php if (! strstr ( $_SERVER['PHP_SELF'] , 'checkout' )): ?>id="content"<?php else: ?>id="contentfull"<?php endif; ?>>	      	<div class="inside">						<div id="breadcrumb"><?php echo $this->_tpl_vars['navtrail']; ?>
</div>						<?php echo $this->_tpl_vars['main_content']; ?>
					</div>	      					</div>		    <?php if (! strstr ( $_SERVER['PHP_SELF'] , 'checkout' )): ?>			    <div id="rightcol">			    	<div class="inside">						<?php echo $this->_tpl_vars['box_ADMIN']; ?>
						<?php echo $this->_tpl_vars['box_CART']; ?>
						<?php echo $this->_tpl_vars['box_MANUFACTURERS_INFO']; ?>
						<?php echo $this->_tpl_vars['box_CONTENT']; ?>
						<?php echo $this->_tpl_vars['box_NEWSLETTER']; ?>
						</div>					</div>		    <?php endif; ?> 			</div>		<div class="footer"></div>	</div></div><div id="copyright">  <!-- AddThis Button BEGIN  <a class="addthis_button" href="http://www.addthis.com/bookmark.php?v=250&amp;pub=xa-4ae99d7b6d383a98"><img src="http://s7.addthis.com/static/btn/v2/lg-share-en.gif" width="125" height="16" alt="Bookmark and Share" style="border:0"/></a><script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pub=xa-4ae99d7b6d383a98"></script>  <!-- AddThis Button END -->  <p>Copyright &copy; 2015 <?php echo TITLE; ?> | eCommerce Engine 2014 based on <a href="http://www.modified-shop.org" target="_blank">modified eCommerce</a>		<br />eCommerce Engine &copy; 2008 - 2015 <a href="http://www.modified-shop.org" target="_blank">Modified.org</a> supported under GNU/GPL	</p></div>