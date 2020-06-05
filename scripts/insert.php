<?php

// Class for inserting data into data base from add product page
class Insert extends Dbh{

    // Functions takes data and insert it to mySQL data base
    public function insertAll($ID, $name, $price, $type, $quantity) {

        // SQL query with user input **SUSCEPTIBLE TOO SQL INJECTION MOST LIKELY**
        $sql = "INSERT INTO `products`.`producttable` (`SKU`, `name`, `price`, `prodtype`, `quantity`)
                VALUES ('".$ID."', '".$name."', '".$price."', '".$type."', '".$quantity."')";

        // Query the database defined in Dbh
        if ($this->connect()->query($sql) == true) {
            Echo "New Item Added Successfully";
        }
    }
}
