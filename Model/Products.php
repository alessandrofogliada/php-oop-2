<?php 

require_once __DIR__ . '../db.php';

class Producuts {
    public $name;
    public $img;
    public $price;

    public function __costruct (string $_name , string $img , int $price){
        $this->name = $_name;
        $this->img = $_img;
        $this->price = $_price;
    }
}