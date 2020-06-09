<?php

// Class for deleteing items for mass delete
class Delete extends Dbh{

    // Function deletes items given in array
    public function DeleteItems($ItemHash) {

        // Get IDs of items that need to be the deleted from POST form superglobal
        $delArray = $_POST['checkArray'];

        /*  Send Delete requests to mySQL database for each item.
            Tried appending multiple Delete requests and sending them together,
            but that did not work.
        */
        for($i = 0; $i < sizeof($delArray); $i++) {
            {
                // Get the checkbox ID of item that is to be deleted
                $j = $delArray[$i];

                // SQL query with user input. Using ItemHash get the SKU of item.
                $sql = "DELETE FROM `products`.`producttable` WHERE (`SKU` = '$ItemHash[$j]')";

                // Query the database and return success or failure message
                if ($this->connect()->query($sql) == true) {
                    Echo "Deletion succesful";
                } else {
                    echo "Deletion failed :(";
                }
            }
        }
    }
}
