<?php /* Smarty version 2.6.27, created on 2015-11-14 15:38:50
         compiled from delice24/mail/german/create_account_mail.html */ ?>
<?php include_once('templates/delice24/mail-inc/header.htm'); ?>
<font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Sehr geehrter Kunde,</strong></font> <br>
      <br>
      <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Sie haben soeben Ihr Kundenkonto erfolgreich erstellt, als registrierter Kunde haben sie folgende Vorteile in unserem Shop.</font><br> 
      <br>
      <font size="2"><b><font face="Verdana, Arial, Helvetica, sans-serif">-Kundenwarenkorb</font></b><font face="Verdana, Arial, Helvetica, sans-serif"> - Jeder Artikel bleibt registriert bis Sie zur Kasse gehen, oder die Produkte aus dem Warenkorb entfernen.<br>
      <b>-Adressbuch</b> - Wir können jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.<br>
      <b>-Vorherige Bestellungen</b> - Sie können jederzeit Ihre vorherigen Bestellungen überprüfen.<br>
      <b>-Meinungen über Produkte</b> - Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.<br>      
      </font></font><br>
      <font size="2" face="Verdana, Arial, Helvetica, sans-serif">Falls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an: 
      <?php echo $this->_tpl_vars['content']['MAIL_REPLY_ADDRESS']; ?>

      . <br>
    Achtung: Diese eMail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine eMail an 
    <?php echo $this->_tpl_vars['content']['MAIL_REPLY_ADDRESS']; ?>

    . <br>
    <br>
	
	
    <?php if ($this->_tpl_vars['SEND_GIFT'] == true): ?>
    <br>
    Als kleines Willkommensgeschenk senden wir Ihnen einen Gutschein &uuml;ber:	<b><?php echo $this->_tpl_vars['GIFT_AMMOUNT']; ?>
</b><br>
    <br>
Ihr pers&ouml;nlicher Gutscheincode lautet <b><?php echo $this->_tpl_vars['GIFT_CODE']; ?>
</b>. Sie k&ouml;nnen diese Gutschrift an der Kasse w&auml;hrend des Bestellvorganges verbuchen.<br>
<br>
Um den Gutschein einzul&ouml;sen klichen Sie bitte auf <a href="<?php echo $this->_tpl_vars['GIFT_LINK']; ?>
">[Gutschein Einlösen]</a>.
<?php endif; ?>

<?php if ($this->_tpl_vars['SEND_COUPON'] == true): ?>
 Als kleines Willkommensgeschenk senden wir Ihnen einen Kupon.<br>
 Kuponbeschreibung: <b><?php echo $this->_tpl_vars['COUPON_DESC']; ?>
</b>
 
Geben Sie einfach Ihren persönlichen Code <?php echo $this->_tpl_vars['COUPON_CODE']; ?>
 während des Bezahlvorganges ein

<?php endif; ?>

</font>
<?php include_once('templates/delice24/mail-inc/footer.htm'); ?>