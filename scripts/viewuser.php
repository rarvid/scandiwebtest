<?php

class ViewUser extends User {

    // Function display data gather from database
    public function showAll() {
        // Define gathered data
        $datas = $this->getAll();

        // Using a foreach loop echo each of the database rows
        foreach ($datas as $data) {
            echo "Unique ID: ".$data['SKU']."<br>";
            echo "Product name: ".$data['name']."<br>";
            echo "Product price: ".$data['price']."<br>";
        }
    }




}