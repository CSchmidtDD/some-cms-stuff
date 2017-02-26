<?php /* Smarty version 2.6.27, created on 2015-11-14 15:38:50
         compiled from delice24/mail/german/create_account_mail.txt */ ?>


Sehr geehrter Kunde,

Sie haben soeben Ihr Kundenkonto erfolgreich erstellt, als registrierter Kunde haben sie folgende Vorteile in unserem Shop. 

-Kundenwarenkorb - Jeder Artikel bleibt registriert bis Sie zur Kasse gehen, oder die Produkte aus dem Warenkorb entfernen.
-Adressbuch - Wir können jetzt die Produkte zu der von Ihnen ausgesuchten Adresse senden. Der perfekte Weg ein Geburtstagsgeschenk zu versenden.
-Vorherige Bestellungen - Sie können jederzeit Ihre vorherigen Bestellungen überprüfen.
-Meinungen über Produkte - Teilen Sie Ihre Meinung zu unseren Produkten mit anderen Kunden.      

Falls Sie Fragen zu unserem Kunden-Service haben, wenden Sie sich bitte an: <?php echo $this->_tpl_vars['content']['MAIL_REPLY_ADDRESS']; ?>



Achtung: Diese eMail-Adresse wurde uns von einem Kunden bekannt gegeben. Falls Sie sich nicht angemeldet haben, senden Sie bitte eine eMail an: <?php echo $this->_tpl_vars['content']['MAIL_REPLY_ADDRESS']; ?>

    
<?php if ($this->_tpl_vars['SEND_GIFT'] == true): ?>
Als kleines Willkommensgeschenk senden wir Ihnen einen Gutschein &uuml;ber:	<?php echo $this->_tpl_vars['GIFT_AMMOUNT']; ?>


Ihr pers&ouml;nlicher Gutscheincode lautet <?php echo $this->_tpl_vars['GIFT_CODE']; ?>
. 
Sie k&ouml;nnen diese Gutschrift an der Kasse w&auml;hrend des Bestellvorganges verbuchen.

Um den Gutschein einzul&ouml;sen verwenden Sie bitte den folgenden link <?php echo $this->_tpl_vars['GIFT_LINK']; ?>
.
<?php endif; ?>

<?php if ($this->_tpl_vars['SEND_COUPON'] == true): ?>
 Als kleines Willkommensgeschenk senden wir Ihnen einen Kupon.
 Kuponbeschreibung: <?php echo $this->_tpl_vars['COUPON_DESC']; ?>

 
Geben Sie einfach Ihren persönlichen Code <?php echo $this->_tpl_vars['COUPON_CODE']; ?>
 während des Bezahlvorganges ein

<?php endif; ?>