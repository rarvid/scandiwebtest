<?php

// Class for deleteing items for mass delete
class Delete extends Dbh{

    // Function deletes items given in array
    public function DeleteItems($ItemHash) {

        $sql = "";
        for($i = 1; $i < sizeof($ItemHash) + 1; $i++) {
            if($_POST["$i"] == "yes") {

                // SQL query with user input **SUSCEPTIBLE TOO SQL INJECTION MOST LIKELY**
                $sql .= "DELETE FROM `products`.`producttable` WHERE (`SKU` = '$ItemHash[$i]')";
            }
        }

        
        

        // Query the database defined in Dbh
        if ($this->connect()->query($sql) == true) {
            Echo "Deletion succesful";
        } else {
            echo "Deletion failed :(";
        }
    }
}
