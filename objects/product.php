<?php

class Product{
    protected $SKU;
    protected $name;
    protected $price;
    protected $type;
    

    public function getSKU(){
        return $this->SKU;
    }

    public function getName(){
        return $this->name;
    }

    public function getPrice(){
        return $this->price;
    }

    public function getType(){
        return $this->type;
    }


    public function setSKU($par){
        $this->SKU = $par;
    }

    public function setName($par){
        $this->name = $par;
    }

    public function setPrice($par){
        $this->price = $par;
    }

    public function setType($par){
        $this->type = $par;
    }

    public function __construct($SKU = null, $name =null, $price = null, $type = null){
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
    }
}
