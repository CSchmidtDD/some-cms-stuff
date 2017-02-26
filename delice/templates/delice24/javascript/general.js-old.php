<?php
/* -----------------------------------------------------------------------------------------
   $Id: general.js.php 1262 2005-09-30 10:00:32Z mz $

   XT-Commerce - community made shopping
   http://www.xt-commerce.com

   Copyright (c) 2003 XT-Commerce
   -----------------------------------------------------------------------------------------
   Released under the GNU General Public License
   ---------------------------------------------------------------------------------------*/


   // this javascriptfile get includes at every template page in shop, you can add your template specific
   // js scripts here
?>
<link rel="stylesheet" href="<?php echo 'templates/'.CURRENT_TEMPLATE; ?>/javascript/thickbox.css" type="text/css" media="screen" />
 <?php //load jQuery default library jquery.js from faster Google CDN
 /*<script src="<?php echo 'templates/'.CURRENT_TEMPLATE; ?>/javascript/jquery.js" type="text/javascript"></script>*/ ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js" type="text/javascript"></script>
 <script src="<?php echo 'templates/'.CURRENT_TEMPLATE; ?>/javascript/thickbox.js" type="text/javascript"></script>
<!--[if IE 6]>

<script type="text/javascript" src="<?php echo 'templates/'.CURRENT_TEMPLATE.'/javascript/pngfix.js'; ?>"></script>
<script type="text/javascript">
  DD_belatedPNG.fix('#wow');  
  DD_belatedPNG.fix('#header h1');  
  DD_belatedPNG.fix('#rightcol ul');  
  DD_belatedPNG.fix('#leftcol ul');  
  DD_belatedPNG.fix('#leftcol .boxheader');  
  DD_belatedPNG.fix('#rightcol .boxheader');  
  DD_belatedPNG.fix('.action .image a');  
</script>
<![endif]--> 


