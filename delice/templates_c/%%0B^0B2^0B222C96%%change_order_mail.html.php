<?php /* Smarty version 2.6.27, created on 2017-02-15 21:00:00
         compiled from delice24/admin/mail/german/change_order_mail.html */ ?>
<?php include_once('../templates/delice24/mail-inc/header.htm'); ?>
<strong>Sehr geehrte<?php if ($this->_tpl_vars['GENDER'] == 'Herr'): ?>r<?php endif; ?> <?php echo $this->_tpl_vars['GENDER']; ?>
 <?php echo $this->_tpl_vars['LASTNAME']; ?>
,</strong><br>
      <br>
      Der Status Ihrer Bestellung wurde ge&auml;ndert.<br> 
      <?php if ($this->_tpl_vars['NOTIFY_COMMENTS']): ?><br>
Anmerkungen und Kommentare zu Ihrer Bestellung: 
<?php echo $this->_tpl_vars['NOTIFY_COMMENTS']; ?>

<br><?php endif; ?>
<br>
Neuer Status: 
<b><?php echo $this->_tpl_vars['ORDER_STATUS']; ?>
</b>
<br>
Bei Fragen zu Ihrer Bestellung antworten Sie bitte auf diese E-Mail. 

<?php include_once('../templates/delice24/mail-inc/footer.htm'); ?>