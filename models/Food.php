<?php

require_once __DIR__ . '/Product.php';

class Food extends Product {
    protected $name;
    protected $ingredients;
    protected $brand;
    protected $expiring_date;

    public function __construct(string $_title, string $_imgUrl, float $_price, Category $_category, string $_name, array $_ingredients, string $_brand, string $_expiring_date){
        parent::__construct($_title, $_imgUrl, $_price, $_category);
        $this->setName($_name);
        $this->setIngredients($_ingredients);
        $this->setBrand($_brand);
        $this->setExpiringDate($_expiring_date);
    }

    public function getName() {
        return $this->name;
    }

    public function getIngredients() {
        return implode(', ', $this->ingredients);
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getExpiringDate() {
        return $this->expiring_date;
    }

    public function setName($_name) {
        $this->name = $_name;
    }

    public function setIngredients($_ingredients) {
        $this->ingredients = $_ingredients;
    }

    public function setBrand($_brand) {
        $this->brand = $_brand;
    }

    public function setExpiringDate($_expiring_date) {
        $this->expiring_date = $_expiring_date;
    }
    
}