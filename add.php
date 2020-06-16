
<?php
  include 'scripts/dbh.php';
  include 'scripts/insert.php';
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

        // Call insert function with the input field information from user
        $inserter->insertAll(
          $_POST['ProdID'],
          $_POST['ProdName'],
          $_POST['ProdPrice'],
          $_POST['ProductType'],
          $_POST['ProdQ']
        );
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
        <form id="form2" action="test.php" method="post"></form>

        <div class="col-lg-6"> 
            <p>Product ID</p>
            <input type="text" name="ProdID" id="ProdID" form="form1"><br><br>

            <p>Product Name</p>
            <input type="text" name="ProdName" id="ProdName" form="form1"><br><br>

            <p>Product Price</p>
            <input type="text" name="ProdPrice" id="ProdPrice" form="form1"><br><br>

            <p>Product Type</p>
            <select id="ProductType" name="ProductType" form="form2">
                <option value="DVD-disc">DVD-disc</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>
            <button class="btn btn-primary" type="button" name="select" form="form2">Select</button>
            

            <br><br>

            <p>Product Quantity</p>
            <input type="text" name="ProdQ" id="ProdQ" form="form1"><br><br>

            <button class="btn btn-primary" type="submit" name="save" form="form1">Add</button>
        </div>
        <!--Fillout form END-->

      <!--Information START-->
        <div class="col-lg-6">
            <h4 align="center">Info</h4>
            <p align="center" class="text-justify">
                After the appropriate product type has been chosen please specify the product quantity in the correct form.<br><br>
                For "DVD-disc" specify the memory capacity in Megabits or Gigabits.<br>
                For "Book" specify book weight in Kilograms.<br>
                For "Furniture" specify dimensions in the form "H x W x L".<br><br>
                Please also specify the units used for "DVD-disc" and "Book".
            </p>
        </div>
      <!--Information END-->

    </div>
    </div>
    <!--Container END-->



  </body>

</html>