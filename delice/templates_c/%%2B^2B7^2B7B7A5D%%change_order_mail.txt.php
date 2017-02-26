<?php /* Smarty version 2.6.27, created on 2017-02-15 21:00:00
         compiled from delice24/admin/mail/german/change_order_mail.txt */ ?>

Sehr geehrter Kunde,

Der Status Ihrer Bestellung wurde ge&auml;ndert.

<?php if ($this->_tpl_vars['NOTIFY_COMMENTS']): ?>Anmerkungen und Kommentare zu Ihrer Bestellung:<?php echo $this->_tpl_vars['NOTIFY_COMMENTS']; ?>
<?php endif; ?>

Neuer Status: <?php echo $this->_tpl_vars['ORDER_STATUS']; ?>


Bei Fragen zu Ihrer Bestellung antworten Sie bitte auf diese eMail.