<?php
require_once 'classes/Goods.php';
require_once 'classes/Perishable.php';

// Prodotto generico
$good1 = new Goods('A-0010-Z', 'Logitech', 'MK270 Keyboard');
$good1->setUnit(2, 20);

var_dump($good1); // lo tengo per visualizzare a schermo l'oggetto

echo 'Total weight: kg ' . $good1->totals(50)[0];
echo nl2br("\n"); // giusto per provare la funzione nl2br e l'escape character 'new line'
echo 'Total cost: € ' . $good1->totals(50)[1];

// Prodotto deperibile
$expiryDate = '2021-06-15';
$goodPerish1 = new Perishable('G-9069-G', 'Ferrero', 'Nutella', $expiryDate);
$goodPerish1->setUnit(1, 8);

var_dump($goodPerish1);

echo 'Total weight: kg ' . $goodPerish1->totalsAndDate(50, $expiryDate)[0][0] . '. ' . 'Total cost: € ' . $goodPerish1->totalsAndDate(50, $expiryDate)[0][1];
echo nl2br("\n");
echo 'Days to expiration: ' . $goodPerish1->totalsAndDate(50, $expiryDate)[1];
