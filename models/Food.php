<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    protected $ingredients;
    protected $brand;
    protected $expiring_date;

    public function __construct(string $_title, string $_imgUrl, float $_price, Category $_category, array $_ingredients, string $_brand, string $_expiring_date){
        parent::__construct($_title, $_imgUrl, $_price, $_category);
        $this->setIngredients($_ingredients);
        $this->setBrand($_brand);
        $this->setExpiringDate($_expiring_date);
    }

    public function getIngredients() {
        return $this->ingredients;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getExpiringDate() {
        return $this->expiring_date;
    }


    public function setIngredients($_title) {
        $this->title = $_title;
    }

    public function setBrand($_brand) {
        $this->brand = $_brand;
    }

    public function setExpiringDate($_expiring_date) {
        $this->expiring_date = $_expiring_date;
    }
    
}