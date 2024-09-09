<?php 

require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/Type_of_product.php';

class Products {
    public $name;
    public $img;
    public $price;
    public $category;
    public $type;


    public function __construct (string $_name , string $_img , float $_price , Category $_category , Type_of_product $_type){
        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
        $this->category = $_category;
        $this->type = $_type;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
       $this->name = $name;
    }

    public function printName(){
        echo $this->name;
    }
}