<?php /* Smarty version 2.6.27, created on 2015-10-15 17:17:58
         compiled from delice24/mail/german/entry_mail.txt */ ?>

<?php echo $this->_tpl_vars['address_label_customer']; ?>


<?php if ($this->_tpl_vars['PAYMENT_METHOD']): ?>Zahlungsmethode: <?php echo $this->_tpl_vars['PAYMENT_METHOD']; ?>
<?php endif; ?>
Bestellnummer: <?php echo $this->_tpl_vars['oID']; ?>

Datum: <?php echo $this->_tpl_vars['DATE']; ?>

<?php if ($this->_tpl_vars['csID']): ?>Kundennummer :<?php echo $this->_tpl_vars['csID']; ?>
<?php endif; ?>
Ihre E-Mail Adresse: <?php echo $this->_tpl_vars['EMAIL']; ?>

----------------------------------------------------------------------


Hallo <?php echo $this->_tpl_vars['NAME']; ?>
,

Ihre Bestellung wurde soeben von einem unserer Mitarbeiter bestätigt.
Wir bemühen uns umgehend, ihre Ware zusammenzustellen und alsbald zu versenden.

In der angehängten Datei widerruf.pdf finden Sie Ihre Unterlagen zum Widerrufsrecht, sowie ein Muster-Formular.


<?php echo $this->_tpl_vars['PAYMENT_INFO_TXT']; ?>


<?php if ($this->_tpl_vars['NEW_PASSWORD']): ?>
        Ihr Account Passwort: <?php echo $this->_tpl_vars['NEW_PASSWORD']; ?>

<?php endif; ?>      

<?php if ($this->_tpl_vars['COMMENTS']): ?>
Ihre Anmerkungen:
<?php echo $this->_tpl_vars['COMMENTS']; ?>

<?php endif; ?>

Ihre Bestellten Produkte
----------------------------------------------------------------------
<?php $_from = $this->_tpl_vars['order_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_values']):
        $this->_foreach['aussen']['iteration']++;
?> 
<?php echo $this->_tpl_vars['order_values']['PRODUCTS_QTY']; ?>
 x <?php echo $this->_tpl_vars['order_values']['PRODUCTS_NAME']; ?>
 <?php echo $this->_tpl_vars['order_values']['PRODUCTS_PRICE']; ?>

<?php if ($this->_tpl_vars['order_values']['PRODUCTS_SHIPPING_TIME'] != ''): ?>Lieferzeit: <?php echo $this->_tpl_vars['order_values']['PRODUCTS_SHIPPING_TIME']; ?>
<?php endif; ?>
<?php if ($this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES'] != ''): ?><?php echo $this->_tpl_vars['order_values']['PRODUCTS_ATTRIBUTES']; ?>
<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>

<?php $_from = $this->_tpl_vars['order_total']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['aussen'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['aussen']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['order_total_values']):
        $this->_foreach['aussen']['iteration']++;
?>
<?php echo $this->_tpl_vars['order_total_values']['TITLE']; ?>
<?php echo $this->_tpl_vars['order_total_values']['TEXT']; ?>

<?php endforeach; endif; unset($_from); ?>


<?php if ($this->_tpl_vars['address_label_payment']): ?>
Rechnungsadresse
----------------------------------------------------------------------
<?php echo $this->_tpl_vars['address_label_payment']; ?>

<?php endif; ?>
Versandadresse 

----------------------------------------------------------------------
<?php echo $this->_tpl_vars['address_label_shipping']; ?>

<?php if ($this->_tpl_vars['DELIVERY_DUTY_INFO'] != ''): ?>
 
----------------------------------------------------------------------
<?php echo @TEXT_DUTY_INFO; ?>

----------------------------------------------------------------------<?php endif; ?>

[SIGNATUR]