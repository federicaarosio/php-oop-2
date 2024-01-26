<?php

require_once __DIR__ . '/Product.php';

class Category {
    protected $type;
    protected $logo;

    public function __construct(string $_type, string $_logo){
        $this->setType($_type);
        $this->setLogo($_logo);

    }

    public function getType() {
        return $this->type;
    }

    public function getLogo() {
        return $this->logo;
    }

    
    public function setType($_type) {
        $this->type = $_type;
    }

    public function setLogo($_logo) {
        $this->logo = $_logo;
    }

    
}