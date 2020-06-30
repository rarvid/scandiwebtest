<?php

// Furniture Object
class Furniture extends Product {
    protected $height;
    protected $width;
    protected $length;
    protected $dimensions;

    public function getHeight(){
        return $this->height;
    }

    public function getWidth(){
        return $this->width;
    }

    public function getLength(){
        return $this->length;
    }

    public function setHeight($par){
        $this->height = $par;
    }

    public function setWidth($par){
        $this->width = $par;
    }

    public function setLength($par){
        $this->length = $par;
    }

    public function getDimensions(){
        return $this->dimensions;
    }

    // This functions allows setting the dimensions directly from a parameter or just taking
    // previously set height width and length and combining those
    public function setDimensions($par = null){
        if($par != null){        
            $this->dimensions = $par;
        }else {
            $this->dimensions = $this->height . ' x ' .  $this->width . ' x ' . $this->length;
        }
    }

    // Function displays product information in HTML using echo
    public function toHTML(){
        echo '<p>';
        echo $this->SKU.'<br>'.'<br>'.
             $this->name.'<br>'.'<br>'.
             $this->price.'<br>'.'<br>';

        echo 'Dimensions: '.$this->dimensions.'<br>';
        echo '</p>';
        echo '</div>';
    }

    public function __construct($SKU = null, $name = null, $price = null, $type = null, $dimensions = null){
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->dimensions = $dimensions;
    }
}
