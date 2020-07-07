<?php

// Book Object
class Book extends Product{
    protected $weight;

    public function getQuant(){
        return $this->weight;
    }

    public function setQuant($par){
        $this->weight = $par;
    }

    // Function displays product information in HTML using echo
    public function toHTML(){
        echo '<p>';
        echo $this->SKU.'<br>'.'<br>'.
             $this->name.'<br>'.'<br>'.
             $this->price.'<br>'.'<br>';

        echo 'Weight: '.$this->weight.'<br>';
        echo '</p>';
        echo '</div>';
    }

    public function __construct($SKU = null, $name =null, $price = null, $type = null, $weight = null){
        $this->SKU = $SKU;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->weight = $weight;
    }
}
