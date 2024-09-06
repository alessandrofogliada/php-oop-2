<?php

require_once __DIR__ . '/Products.php';

class Toy extends Products{
    public $nameOfToy;

    public function __construct(string $_name , string $_img , float $_price , Category $_category , string $_dietType , string $_nameOfToy){
        $this->nameOfToy = $_nameOfToy;
        parent::__construct($_name ,$_img , $_price ,$_category , $_dietType);
    }
}