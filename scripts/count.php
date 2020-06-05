<?php

Class Count extends User{

    function ItemHash(){
        // Define gathered data
        $datas = $this->getAll();

        $infoArray = array();
        $ID = 1;

        foreach($datas as $data){
            $infoArray[$ID] = $data["SKU"];
            $ID++;
        }
        return $infoArray;
    }
}
