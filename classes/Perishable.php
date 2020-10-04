<?php
require_once 'Goods.php';

class Perishable extends Goods {
    public function __construct($_barcode, $_brand, $_name, $_expiryDate) {
        parent::__construct($_barcode, $_brand, $_name);
        $this->expiryDate = $_expiryDate;
    }

    public function totalsAndDate($_quantity, $expiryDate) {
        $totals = parent::totals($_quantity);

        $currentDate = new DateTime(date('Y-m-d'));
        $expiryDate = new DateTime($expiryDate);
        $daysToExp = $currentDate->diff($expiryDate);
        $daysToExp->days;

        return [$totals, $daysToExp];
    }
}