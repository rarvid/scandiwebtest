<?php
include 'objects/product.php';

// Class for inserting data into data base from add product page
class Insert extends Dbh{

    // Functions takes data and insert it to mySQL data base
    public function insertAll($product) {

        // Get product information
        $ID = $product->getSKU();
        $name = $product->getName();
        $price = $product->getPrice();
        $type = $product->getType();
        $quantity = null;

        // Get product Size, Weight, Dimensions based on type
        if($type == 'DVD-disc'){
            $quantity = $product->getSize();

        }elseif ($type == 'Book') {
            $quantity = $product->getWeight();

        }elseif ($type == 'Furniture') {
            $quantity = $product->getDimensions();

        }

        // Check if any of function paramters are null
        if(
            is_null($ID) || $ID === "" ||
            is_null($name) || $name === "" ||
            is_null($price) || $price === "" ||
            is_null($quantity) || $quantity === ""
        ){

            //  If any of the paramaters are null or empty then send message and do nothing
            echo ("Please fill out all fields of the form!");

        } else {

            // SQL query with user input
            $sql = "INSERT INTO `products`.`producttable` (`SKU`, `name`, `price`, `prodtype`, `quantity`)
                    VALUES ('".$ID."', '".$name."', '".$price."', '".$type."', '".$quantity."')";

            // Query the database defined in Dbh
            if ($this->connect()->query($sql) == true) {
               Echo "New Item Added Successfully";
            }
        }
    }
}

/*  For testing purposes the mySQL database is described here. The mySQL database consists of 5 columns
    ID or SKU | Product Name | Product Price (In USD) | Product Type | Product Quantity 

    The exact names of the columns are
    SKU | name | price | prodtype | quantity

    All colmuns except SKU are LONGTEXT() type for convenience. SKU is INT and is the Primary key of the table.

    All columns ar non-nullable.

*/
