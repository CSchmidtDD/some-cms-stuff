<?php /* Smarty version 2.6.27, created on 2015-11-14 15:33:29
         compiled from delice24/mail/german/newsletter_mail.html */ ?>
<?php include_once('templates/delice24/mail-inc/header.htm'); ?>
<p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>Vielen Dank f�r die Anmeldung.</b></p>
<p>Sie erhalten diese Mail weil Sie unseren Newsletter empfangen m�chten.
Bitte klicken Sie auf den Aktivierungslink damit Ihre Mailadresse f�r den Newsletterempfang freigeschalten wird.
Sollten Sie sich nicht in unserern Newsletter eingetragen haben bzw. den Empfang des Newsletters nicht w�nschen bitten wir Sie garnichts zu tun.
Ihre Adresse wird dann bei der n�chsten Aktualisierung der Datenbank automatisch gel�scht.
      <table width="100%"  border="0" bgcolor="f1f1f1">
    <tr>
      <td><b>Ihr Aktivierungslink:<br></b>><a href="<?php echo $this->_tpl_vars['LINK']; ?>
"><?php echo $this->_tpl_vars['LINK']; ?>
</a>
      </td>
    </tr>
  </table></font>
<?php include_once('templates/delice24/mail-inc/footer.htm'); ?>