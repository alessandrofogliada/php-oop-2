<?php

class Gatti extends Products{
    public $genre;
    public $size;

    public function __construct(string $_genre , int $_size){
        $this->genre = $_genre;
        $this->size = $_size;
    
    // riportiamo anche il costruttore del padre 
    parent:: __construct($_name , $img , $price);

    $this->setGenre($genre);
    $this->setSize($size);
    }


    public function setGenre($_genre){
        // controllo il dato emesso , se è corretto lo imposto
        $this->genre = $_genre;
    }

    public function setSize($_size){
        // controllo il dato emesso , se è corretto lo imposto
        $this->size = $_size;
    }


    public function getGenre(){
        return $this->genre;
    }

    public function getSize(){
        return $this->size;
    }

}
