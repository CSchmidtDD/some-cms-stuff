<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:58
         compiled from delice24/mail/german/entry_mail.html */ ?>
<?php include_once('/srv/www/delice24.de/delice/templates/delice24/mail-inc/header.htm'); ?>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['address_label_customer']; ?>
<br>
            <br>
            <?php if ($this->_tpl_vars['PAYMENT_METHOD']): ?><strong>Zahlungsmethode:</strong> <?php echo $this->_tpl_vars['PAYMENT_METHOD']; ?>
<br><?php endif; ?>
            <strong>Bestellung Nr:</strong> <?php echo $this->_tpl_vars['oID']; ?>
<br>
            <strong>Bestelldatum:</strong> <?php echo $this->_tpl_vars['DATE']; ?>
<br>
			<?php if ($this->_tpl_vars['csID']): ?><strong>Kundennummer:</strong> <?php echo $this->_tpl_vars['csID']; ?>
<br><?php endif; ?>
            <strong>Ihre E-Mail Adresse:</strong> <?php echo $this->_tpl_vars['EMAIL']; ?>
<br>
            </font></td>
          
        </tr>
      </table>
      <br> <table style="border-top:1px solid; border-bottom:1px solid;" width="100%" border="0">
        <tr bgcolor="#f1f1f1"> 
          <td width="50%"> <p><font size="2"><strong><font face="Verdana, Arial, Helvetica, sans-serif">Lieferadresse <br>
          </font></strong></font></p></td><?php if ($this->_tpl_vars['address_label_payment']): ?>
          <td> <p><font size="2"><strong><font face="Verdana, Arial, Helvetica, sans-serif">Rechnungsadresse <br>
          </font> </strong></font></p></td><?php endif; ?>
        </tr>
        <tr> 
          <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['address_label_shipping']; ?>
</font></td>
          <?php if ($this->_tpl_vars['address_label_payment']): ?><td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['address_label_payment']; ?>
</font></td><?php endif; ?>
        </tr>
      </table>
      <p><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> Hallo <?php echo $this->_tpl_vars['NAME']; ?>
,<br>
        <br>
		Ihre Bestellung ist soeben bei uns eingegangen.<br></font><br>
		<br>
		In der angehängten Datei Widerrufsbelehrung.pdf finden Sie Ihre Unterlagen zum Widerrufsrecht, sowie ein Muster-Formular.<br>
		<br>
		Hinweis für die Bezahlart Vorkasse:<br>
		Falls Sie per Vorkasse bestellt haben, bitten wir Sie, die angegebene Summe auf das unten genannte Bankkonto zu überweisen.<br>
		<br>
		Nach Eingang ihrer Zahlung werden wir ihre Bestellung in die Kommission weiterleiten, wo es zum Versand vorbereitet wird.<br>
		Gleichzeitig erhalten Sie eine Benachrichtigung über den verbuchten Zahlungseingang.<br>
		<br>
		<br>
		___________________________________________________<br>
		Nur für die Bezahlart Vorkasse:<br><br>
		<?php echo $this->_tpl_vars['PAYMENT_INFO_HTML']; ?>
<br>
		___________________________________________________<br>
        <br><?php if ($this->_tpl_vars['COMMENTS']): ?><br>
        <strong><font size="2" face="Verdana, Arial, Helvetica, sans-serif">Ihre Anmerkungen zur Bestellung:</font></strong><br>
        <font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['COMMENTS']; ?>
</font><br>
<?php endif; ?>        <br>    
      </p></td>
  </tr>
</table>
<table style="border-bottom:1px solid;" width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr> 
    <td><font size="2" face="Verdana, Arial, Helvetica, sans-serif"> <strong>Ihre bestellten Produkte nochmals zur Kontrolle: </strong></font></td>
  </tr>
  <tr> 
    <td> <table width="100%" border="0" cellpadding="3" cellspacing="0" bgcolor="f1f1f1">
        <tr> 
          <td colspan="2" style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong> 
              Stk. </strong></font></div></td>
          <td style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong> 
            Produkt </strong></font></td>
          <td style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong> 
            Artikel Nr. </strong></font></td>
          <td style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;" width="150"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong>Einzelpreis</strong></font></td>
          <td style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;" width="150"><div align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong> 
              Preis</strong></font><font size="2"> </font></div></td>
        </tr>
        <?php $_from = $this->_tpl_vars['order_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_values']):
        $this->_foreach['aussen']['iteration']++;
?> 
        <tr> 
          <td width="20" style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['order_values']['PRODUCTS_QTY']; ?>
</font></div></td>
          <td width="20" style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;"><div align="center"><font size="2" face="Verdana, Arial, Helvetica, sans-serif">x</font></div></td>
          <td style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><strong><?php echo $this->_tpl_vars['order_values']['PRODUCTS_NAME']; ?>
</strong><?php if ($this->_tpl_vars['order_values']['PRODUCTS_SHIPPING_TIME'] != ''): ?><br />Lieferzeit: <?php echo $this->_tpl_vars['order_values']['PRODUCTS_SHIPPING_TIME']; ?>
<?php endif; ?><em><br>
            <?php echo $this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES']; ?>
</em></font></td>
          <td style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['order_values']['PRODUCTS_MODEL']; ?>
<br>
            <em><?php echo $this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES_MODEL']; ?>
</em></font></td>
          <td style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;" width="150"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['order_values']['PRODUCTS_SINGLE_PRICE']; ?>
</font></td>
          <td style="border-right: 2px solid; border-bottom: 2px solid; border-color: #ffffff;" width="150"><div align="right"><font size="2" face="Verdana, Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['order_values']['PRODUCTS_PRICE']; ?>
</font></div></td>
        </tr>
        <?php endforeach; endif; unset($_from); ?> </table></td>
  </tr>
</table>
<?php $_from = $this->_tpl_vars['order_total']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_total_values']):
        $this->_foreach['aussen']['iteration']++;
?>
<div align="right"><font size="2" face="Arial, Helvetica, sans-serif"><?php echo $this->_tpl_vars['order_total_values']['TITLE']; ?>
<?php echo $this->_tpl_vars['order_total_values']['TEXT']; ?>
</font></div>
<br>
<?php endforeach; endif; unset($_from); ?>
<br>
<?php if ($this->_tpl_vars['DELIVERY_DUTY_INFO'] != ''): ?>
<br />
<table style="border:1px solid #a3a3a3;" width="100%" border="0" cellpadding="3" cellspacing="0">
  <tr>
    <td><font size="1" face="Arial, Helvetica, sans-serif"><?php echo $this->_config[0]['vars']['text_duty_info']; ?>
</font></td>
  </tr>
</table>
<br />
<?php endif; ?>
<br>
[SIGNATUR]