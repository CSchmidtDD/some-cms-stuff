<?php /* Smarty version 2.6.27, created on 2017-02-14 16:02:07
         compiled from delice24/admin/mail/german/create_account_mail.txt */ ?>


Sehr geehrter Kunde, 

Es wurde ein Account f&uuml;r Sie eingerichtet, Sie k&ouml;nnen mit folgenden Daten in Unseren Shop einloggen.

<?php if ($this->_tpl_vars['COMMENTS']): ?> Anmerkungen: <?php echo $this->_tpl_vars['COMMENTS']; ?>
<?php endif; ?>

Ihre Logindaten f&uuml;r unseren Shop:

Email:<?php echo $this->_tpl_vars['EMAIL']; ?>


Ihr Passwort:<?php echo $this->_tpl_vars['PASSWORD']; ?>
