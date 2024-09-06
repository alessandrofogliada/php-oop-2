<?php 
require_once __DIR__ . '/Products.php';

class Food extends Products {
    public $dietType;

    public function __construct(string $_name , string $_img , float $_price , Category $_category , string $_dietType){
        $this->dietType = $_dietType;

        parent::__construct( $_name ,$_img , $_price ,$_category);
    }

}