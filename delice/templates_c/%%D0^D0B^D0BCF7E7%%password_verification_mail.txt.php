<?php /* Smarty version 2.6.27, created on 2017-01-22 22:00:03
         compiled from delice24/mail/german/password_verification_mail.txt */ ?>

Bitte bestätigen Sie Ihre Paßwortanfrage!

Bitte bestätigen Sie, daß Sie selber ein neues Paßwort angefordert haben. 
Aus diesem Grund haben wir Ihnen diese E-mail mit einem persönlichen 
Bestätigungslink geschickt. Wenn Sie den Link bestätigen, indem Sie ihn 
anklicken, wird Ihnen umgehend ein neues Paßwort in einer weiteren E-mail 
zur Verfügung gestellt
      
Ihr Bestätigungslink:
<?php echo $this->_tpl_vars['LINK']; ?>
