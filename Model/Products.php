<?php 

class Products {
    public $name;
    public $img;
    public $price;
    public $icon;

    public function __costruct (string $_name , string $_img , float $_price){
        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
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