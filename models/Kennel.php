<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product {
    protected $size;
    protected $brand;

    public function __construct(string $_title, string $_imgUrl, float $_price, Category $_category, string $_size, string $_brand){
        parent::__construct($_title, $_imgUrl, $_price, $_category);
        $this->setSize($_size);
        $this->setBrand($_brand);
    }

    public function getSize() {
        return $this->size;
    }

    public function getBrand() {
        return $this->brand;
    }


    public function setSize($_size) {
        $this->size = $_size;
    }

    public function setBrand($_brand) {
        $this->brand = $_brand;
    }
    
}