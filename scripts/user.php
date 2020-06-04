<?php

// Class for obtaining all data from a connected database
class User extends Dbh{

    // Function gets all data in database and returns data array of database rows
    protected function getAll() {

        // SQL query
        $sql = "SELECT * FROM products.producttable";

        // Query the database defined in Dbh
        $res = $this->connect()->query($sql);

        // If SQL query failed throw error
        if (!$res) {
            die("Query returned false");
        }

        // Get number of rows in database
        $numberOfRows = $res->num_rows;


        // Check if database empty
        if ($numberOfRows > 0) {


            //  Fetch row and add to array
            while ($row = $res->fetch_assoc()) {
                $data[] = $row;
            }
            
            return $data;

        } else {

            // If number of rows is <=0 return error
            die("Empty database");
        }
    }
}
