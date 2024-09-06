<?php 

require_once __DIR__ . '/Category.php';

class Products {
    public $name;
    public $img;
    public $price;
    public $category;


    public function __construct (string $_name , string $_img , float $_price , Category $_category){
        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
        $this->category = $_category;
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