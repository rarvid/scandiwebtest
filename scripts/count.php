<?php

// Class creating a hash map (key value array) for items
Class Count extends User{

    // Function returns key value array with a simple incremental ID and item SKU
    // Currently used mostly for item deletion
    function ItemHash(){

        // Define gathered data base data
        $datas = $this->getAll();

        // Define new array
        $infoArray = array();

        // Initialize ID
        $ID = 0;

        // Write queried item SKU to key value array
        foreach($datas as $data){
            $infoArray[$ID] = $data["SKU"];
            $ID++;
        }

        return $infoArray;
    }
}
