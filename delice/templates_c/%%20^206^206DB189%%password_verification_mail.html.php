<?php /* Smarty version 2.6.27, created on 2017-01-22 22:00:03
         compiled from delice24/mail/german/password_verification_mail.html */ ?>
<?php include_once('templates/delice24/mail-inc/header.htm'); ?>
<p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><b>Bitte bestätigen Sie Ihre Paßwortanfrage!</b></p>
      <p>Bitte best&auml;tigen Sie, da&szlig; Sie selber ein neues Pa&szlig;wort 
        angefordert haben. <br>
        Aus diesem Grund haben wir Ihnen diese E-mail mit einem pers&ouml;nlichen 
        <br>
        Best&auml;tigungslink geschickt. Wenn Sie den Link best&auml;tigen, indem 
        Sie ihn <br>
        anklicken, wird Ihnen umgehend ein neues Pa&szlig;wort in einer weiteren 
        E-mail <br>
        zur Verf&uuml;gung gestellt. 
      <table width="100%"  border="0" bgcolor="f1f1f1">
    <tr>
          <td><b>Ihr Best&auml;tigungslink:<br>
            </b><a href="<?php echo $this->_tpl_vars['LINK']; ?>
"><?php echo $this->_tpl_vars['LINK']; ?>
</a>
      </td>
    </tr>
  </table>
<?php include_once('templates/delice24/mail-inc/footer.htm'); ?>