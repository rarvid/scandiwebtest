<?php


// Class for displaying the gather information from database in rows and divs
class ViewUser extends User {

    // Function display data gather from database
    public function showAll() {

        // Key value array for quantity type based on product type
        $producTypes = array(
            "Size: " => "DVD-disc", 
            "Weight: " => "Book", 
            "Dimensions: " => "Furniture"
        );

        // Define gathered data
        $datas = $this->getAll();

        // Number of items in 1 row
        $itemcount = 4;

        // ID used for checkbox distinction
        $ID = 0;

        // Start of post form. Needed for mass delete checkboxes
        echo '<form name="form" action="" method="post">';

        // Mass Delete form submit button
        echo '<div class="col-md-12" align="right"><button type="submit" name="delete"  class="btn btn-primary btn-lg mt-2 mr-2" >Mass Delete</button></div>';

        // Using a foreach loop, echo each of the database rows
        foreach ($datas as $data) {


            // If start of row, echo row start div
            if ($itemcount == 4) {
                echo '<div class="row mt-lg-4 mb-4 justify-content-between">';
            }

            // Insert item div with product data
            echo '<div class="col-lg-2 p-lg-2 m-5 border border-dark" align="center">';

            // Checkbox. Currently only used for mass delete
            echo "<div align='left'><input type='checkbox' name='checkArray[]' value='$ID' align='left'></div>";

            // Item data
            echo '<p>';
            echo $data["SKU"].'<br>'.'<br>'.
                 $data["name"].'<br>'.'<br>'.
                 $data["price"].'<br>'.'<br>';
                 
            // Echo quantity type using key value array lookup
            $quantType = array_search($data["prodtype"], $producTypes);
            echo $quantType;

            echo $data["quantity"].'<br>';
            echo '</p>';
            echo '</div>';

            // Decrement item counter
            $itemcount--;

            // Increment item ID
            $ID++;

            // If end of row, echo row end div
            if ($itemcount == 0) {
                echo '</div>';
                $itemcount = 4;
            }
        }
        
        // If last row is not full, close it
        if ($itemcount != 0){
            echo '</div>';
        }
        
        // Form close
        echo '</form>';
    }
}
