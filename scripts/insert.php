<?php

// Class for obtaining all data from a connected database
class Insert extends Dbh{

    // Function gets all data in database and returns data array of database rows
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