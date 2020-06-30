<?php

// Disc Object
class Disc extends Product{
    protected $size;

    public function getSize(){
        return $this->size;
    }

    public function setSize($par){
        $this->size = $par;
    }

    // Function displays product information in HTML using echo
    public function toHTML(){
        echo '<p>';
        echo $this->SKU.'<br>'.'<br>'.
             $this->name.'<br>'.'<br>'.
             $this->price.'<br>'.'<br>';

        echo 'Size: '.$this->size.'<br>';
        echo '</p>';
        echo '</div>';
    }

    public function __construct($SKU = null, $name =null, $price = null, $type = null, $size = null){
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->size = $size;
    }
}
