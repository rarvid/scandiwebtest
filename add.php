
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
      if(isset($_POST['save'])){
        $inserter = new Insert();
        $inserter->insertAll(
          $_POST['ProdID'],
          $_POST['ProdName'],
          $price = $_POST['ProdPrice'],
          $type = $_POST['ProductType'],
          $quantity = $_POST['ProdQ']
        );
      }
    ?>

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

    <div class="container">
    <div class="row">

        <form name="form" action="" method="post" class="col-lg-6">

            <p>Product ID</p>
            <input type="text" name="ProdID" id="ProdID"><br><br>

            <p>Product Name</p>
            <input type="text" name="ProdName" id="ProdName"><br><br>

            <p>Product Price</p>
            <input type="text" name="ProdPrice" id="ProdPrice"><br><br>

            <p>Product Type</p>
            <select id="ProductType" name="ProductType">
                <option value="DVD-disc">DVD-disc</option>
                <option value="Book">Book</option>
                <option value="Furniture">Furniture</option>
            </select>
            
            <br><br>

            <p>Product Quantity</p>
            <input type="text" name="ProdQ" id="ProdQ"><br><br>

            <button class="btn btn-primary" type="submit" name="save">Add</button>
        </form>

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

    </div>
    </div>



  </body>

</html>