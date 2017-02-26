<?php /* Smarty version 2.6.27, created on 2016-12-12 12:35:41
         compiled from /srv/www/delice24.de/delice/templates/delice24/admin/mail/german/sent_mail.html */ ?>
<?php include_once('../templates/delice24/mail-inc/header.htm'); ?>
<table  width="100%" border="0" align="center" cellpadding="4" cellspacing="0">
	<tr> 
        <td>
            <font size="2" face="Verdana, Arial, Helvetica, sans-serif">
                <strong>Sehr geehrte<?php if ($this->_tpl_vars['GENDER'] == 'Herr'): ?>r<?php endif; ?> <?php echo $this->_tpl_vars['GENDER']; ?>
 <?php echo $this->_tpl_vars['LASTNAME']; ?>
,</strong><br />
                <br />
                ihre Bestellung wurde soeben an Sie versandt.<br /> 
                <br />
                Im Anhang der E-Mail finden Sie <?php echo $this->_tpl_vars['PDF_TYPE']; ?>
, sowie die Widerrufsbelehrung f&uuml;r die bestellten Artikel.<br /> 
                <br />
                <br />
            </font>
        </td>
    </tr>
</table>
<?php include_once('../templates/delice24/mail-inc/footer.htm'); ?>