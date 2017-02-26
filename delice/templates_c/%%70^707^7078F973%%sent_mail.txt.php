<?php /* Smarty version 2.6.27, created on 2016-12-12 12:35:41
         compiled from /srv/www/delice24.de/delice/templates/delice24/admin/mail/german/sent_mail.txt */ ?>

Sehr geehrte<?php if ($this->_tpl_vars['GENDER'] == 'Herr'): ?>r<?php endif; ?> <?php echo $this->_tpl_vars['GENDER']; ?>
 <?php echo $this->_tpl_vars['LASTNAME']; ?>
,

ihre Bestellung wurde soeben an Sie versandt.

Im Anhang der E-Mail finden Sie <?php echo $this->_tpl_vars['PDF_TYPE']; ?>
 für die bestellten Artikel.