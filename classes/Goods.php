<?php
class Goods {
    public $barcode;
    public $brand;
    public $name;
    protected $weight;
    protected $cost;

    public function __construct($_barcode, $_brand, $_name) {
        $this->barcode = $_barcode;
        $this->brand = $_brand;
        $this->name = $_name;
    }

    public function setUnit($_weight, $_cost) {
        [$this->weight = $_weight, $this->cost = $_cost];
    }

    public function getUnit() {
        if (empty($this->weight && $this->cost)) {
            die('Missing data');
        }
        return [$this->weight, $this->cost];
    }

    public function totals($_quantity) {
        if (empty($this->weight && $this->cost)) {
            die('Missing data');
        }
        return [$this->weight * $_quantity, $this->cost * $_quantity];
    }
}