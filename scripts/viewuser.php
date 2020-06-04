<?php

// Class for displaying the gather information from database in rows and divs
class ViewUser extends User {

    // Function display data gather from database
    public function showAll() {

        // Define gathered data
        $datas = $this->getAll();

        // Number of items in 1 row
        $itemcount = 4;

        // Using a foreach loop, echo each of the database rows
        foreach ($datas as $data) {

            // If start of row, echo row start div
            if ($itemcount == 4) {
                echo '<div class="row mt-lg-4 mb-4 justify-content-between">';
            }

            // Insert item div with product data
            echo '<div class="col-lg-2 p-lg-2 m-5 border border-dark" align="center">';
            echo '<p>';
            echo $data["SKU"].'<br>'.'<br>'.
                 $data["name"].'<br>'.'<br>'.
                 $data["price"].'<br>'.'<br>';
                 
            // Check product type and add quantity name based on it
            switch($data["prodtype"]) {

                case "DVD-disc":
                    echo "Size: ";
                    break;

                case "Book":
                    echo "Weight: ";
                    break;

                case "Furniture":
                    echo "Dimensions: ";
                    break;

            }

            echo $data["quantity"].'<br>';
            echo '</p>';
            echo '</div>';

            // Decrement item counter
            $itemcount--;

            // If end of row, echo row end div
            if ($itemcount == 0) {
                echo '</div>';
                $itemcount = 4;
            }
        }
    }
}
