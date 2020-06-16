<?php

class Furniture {
    public $height;
    public $width;
    public $length;

    public function setHeight($par){
        $this->height = $par;
    }

    public function setWidth($par){
        $this->width = $par;
    }

    public function setLength($par){
        $this->length = $par;
    }

    public function getHeight(){
        return $this->height;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getLength(){
        return $this->length;
    }
    
    public function displayBox(){

    }
}
