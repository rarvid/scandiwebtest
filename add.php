
<?php
  include 'scripts/dbh.php';
  include 'scripts/insert.php';
  include_once 'objects/product.php';
  include 'objects/book.php';
  include 'objects/disc.php';
  include 'objects/furniture.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css"/>

    <title>Product Add</title>

  </head>

  <body>
    <?php
      // If Add button is pressed
      if(isset($_POST['save'])){

        // Define new instance of Insert class
        $inserter = new Insert();

        // Get array with Size/Weight/Dimensions
        $amount = array_values(array_filter($_POST['ProdQ']));

        // Based on type spawn new Disc/Book/Furniture and set Size/Weight/Dimensions
        if($_POST['ProductType'] == 'DVD-disc'){
          $product = new Disc();

          $product->setSize($amount[0]);

        }elseif ($_POST['ProductType'] == 'Book') {
          $product = new Book();

          $product->setWeight($amount[0]);

        }elseif ($_POST['ProductType'] == 'Furniture') {
          $product = new Furniture();

          $product->setHeight($amount[0]);
          $product->setWidth($amount[1]);
          $product->setLength($amount[2]);

          $product->setDimensions();
        }

        // Set other info from user input
        $product->setSKU($_POST['ProdID']);
        $product->setName($_POST['ProdName']);
        $product->setPrice($_POST['ProdPrice']);
        $product->setType($_POST['ProductType']);

        // Call insert function with the spawned product
        $inserter->insertAll($product);
      }
    ?>

    <!--Title and back button START-->
    <div class="row mt-md-4">

      <div class="col-md-6" align="left">
        <h2 class="ml-5 mb-5">Product Add</h2>
      </div>

      <div class="col-md-6">
        <form>
          <a href=index.php role="button" class="btn btn-primary btn-lg float-right mr-5" align="right">Back to Product List</a>
        </form>
      </div>

    </div>
    <!--Title and back button END-->
    
    <!--Container START-->
    <div class="container">
    <div class="row">

        <!--Fillout form START-->
        <form id="form1" action="" method="post"></form>
  
        <div class="col-lg-6"> 
            <p>Product ID</p>
            <input type="text" name="ProdID" id="ProdID" form="form1"><br><br>

            <p>Product Name</p>
            <input type="text" name="ProdName" id="ProdName" form="form1"><br><br>

            <p>Product Price</p>
            <input type="text" name="ProdPrice" id="ProdPrice" form="form1"><br><br>

            <p>Product Type</p>
            <select id="ProductType" name="ProductType" onchange="toggle()" form="form1">
                <option value="DVD-disc">DVD-disc</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>
            
            <div id="disc" style="display:block" align="center" class="col-lg-6 p-3 mt-4 border border-dark">
              Size in Mb or Gb<br>
              <input type="text" name="ProdQ[]" id="ProdQ[]" form="form1"><br><br>
              <p align="center">
                Please, specify the memory capacity in Megabits or Gigabits.<br><br>
              </p>
            </div>

            <div id="book" style="display:none" align="center" class="col-lg-6 mt-4 p-3 border border-dark">
              Weight in Kg<br>
              <input type="text" name="ProdQ[]" id="ProdQ[]" form="form1"><br><br>
              <p align="center">
                Please, specify the book weight in Kilograms.<br><br>
              </p>
            </div>

            <div id="furniture" style="display:none" align="center" class="col-lg-6 mt-4 p-3 border border-dark">
              Height<br>
              <input type="text" name="ProdQ[]" id="ProdQ[]" form="form1"><br><br>
              Width<br>
              <input type="text" name="ProdQ[]" id="ProdQ[]" form="form1"><br><br>
              Length<br>
              <input type="text" name="ProdQ[]" id="ProdQ[]" form="form1"><br><br>
              <p align="center">
                Please, specify dimensions in the form "H x W x L".<br><br>
              </p>
            </div>

            
            

            <br><br>

            <button class="btn btn-primary" type="submit" name="save" form="form1">Add</button>
        </div>
        <!--Fillout form END-->

    </div>
    </div>
    <!--Container END-->

    <script>
    // Javascript function for toggling display boxes for product quantity
    function toggle() {
      
        // Get product type from dropdown menus and extract its text
        var e = document.getElementById('ProductType');
        var sel = e.options[e.selectedIndex].text;

        // Check which product type was selected and display appropriate box
        if (sel == 'Book') {
            book.style.display = 'block';
            furniture.style.display = 'none';
            disc.style.display = 'none';
        }
        else if (sel == 'Furniture'){
            book.style.display = 'none';
            furniture.style.display = 'block';
            disc.style.display = 'none';
        }
        else if (sel == 'DVD-disc') {
            book.style.display = 'none';
            furniture.style.display = 'none';
            disc.style.display = 'block';
        }
    }
  </script>
  </body>

</html>