<?php

/**
 * Generates a single product.
 */
class Product {
    protected $title;
    protected $imgUrl;
    protected $price;
    protected $category;


    //Constructor

    /**
     * Constructs a new Product
     *
     * @param string $_title The title of the product
     * @param string $_imgUrl The url of the image
     * @param float $_price The price of the product
     * @param Category $_category The category of the product
     */
    public function __construct(string $_title, string $_imgUrl, float $_price, Category $_category) {
        $this->setTitle($_title);
        $this->setImgUrl($_imgUrl);
        $this->setPrice($_price);
        $this->setCategory($_category);
    }

    //Methods
    public function getTitle() {
        return $this->title;
    }

    public function getImgUrl() {
        return $this->imgUrl;
    }

    public function getPrice() {
        return round($this->price, 2, PHP_ROUND_HALF_DOWN);
    }

    public function getCategory() {
        return $this->category;
    }


    public function setTitle($_title) {
        $this->title = $_title;
    }

    public function setImgUrl($_imgUrl) {
        $this->imgUrl = $_imgUrl;
    }

    public function setPrice($_price) {
        $this->price = $_price;
    }

    public function setCategory($_category) {
        $this->category = $_category;
    }

    
}