<?php

// Class for deleteing items for mass delete
class Delete extends Dbh{

    // Function deletes items given in array
    public function DeleteItems($ItemHash) {

        $delArray = $_POST['checkArray'];

        $sql = "";
        for($i = 0; $i < sizeof($delArray); $i++) {
            {
                $j = $delArray[$i];
                // SQL query with user input **SUSCEPTIBLE TOO SQL INJECTION MOST LIKELY**
                $sql = "DELETE FROM `products`.`producttable` WHERE (`SKU` = '$ItemHash[$j]')";

                // Query the database defined in Dbh
                if ($this->connect()->query($sql) == true) {
                    Echo "Deletion succesful";
                } else {
                    echo "Deletion failed :(";
                }
            }
        }
    }
}
