<?php /* Smarty version 2.6.27, created on 2017-01-22 22:00:03
         compiled from delice24/mail/german/password_verification_mail.txt */ ?>

Bitte best�tigen Sie Ihre Pa�wortanfrage!

Bitte best�tigen Sie, da� Sie selber ein neues Pa�wort angefordert haben. 
Aus diesem Grund haben wir Ihnen diese E-mail mit einem pers�nlichen 
Best�tigungslink geschickt. Wenn Sie den Link best�tigen, indem Sie ihn 
anklicken, wird Ihnen umgehend ein neues Pa�wort in einer weiteren E-mail 
zur Verf�gung gestellt
      
Ihr Best�tigungslink:
<?php echo $this->_tpl_vars['LINK']; ?>
