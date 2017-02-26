<?php /* Smarty version 2.6.27, created on 2017-02-14 16:02:07
         compiled from delice24/admin/mail/german/create_account_mail.html */ ?>
<?php include_once('../templates/delice24/mail-inc/header.htm'); ?>
<font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Sehr geehrte<?php if ($this->_tpl_vars['GENDER'] == 'Herr'): ?>r<?php endif; ?> <?php echo $this->_tpl_vars['GENDER']; ?>
 <?php echo $this->_tpl_vars['LASTNAME']; ?>
,</strong></font><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><br>
        <br>
        Es wurde ein Account f&uuml;r Sie eingerichtet, Sie k&ouml;nnen mit folgenden Daten in Unseren Shop einloggen. <br>
        <br>
        <?php if ($this->_tpl_vars['COMMENTS']): ?> Anmerkungen: <?php echo $this->_tpl_vars['COMMENTS']; ?>
 <br><?php endif; ?>
        <br>
        <br>
        Ihre Logindaten f&uuml;r unseren Shop:<br> 
        <br>
Email: 
<?php echo $this->_tpl_vars['EMAIL']; ?>

<br>
Ihr Passwort: 
<?php echo $this->_tpl_vars['PASSWORD']; ?>
 
        </font>
        
<?php include_once('../templates/delice24/mail-inc/footer.htm'); ?>