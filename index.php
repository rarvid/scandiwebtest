<!--
Written by Rūdolfs Arvīds Kalniņš
Created 03.06.2020
-->

<?php
  include 'scripts/dbh.php';
  include 'scripts/user.php';
  include 'scripts/viewuser.php';
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

    <title>Product List</title>

  </head>

  <body>
    <!--Main Title div START-->
    <div class="row mt-md-4">

      <div class="col-md-4">
        <h3 class="ml-5">Product List</h3>
      </div>

      <div class="col-md-4">
        <a href=add.php role="button" class="btn btn-primary btn-lg float-right mr-5">Add Item</a>
      </div>

      <div class="col-md-4">
        <a href=add.php role="button" class="btn btn-primary btn-lg float-right mr-5">Mass Delete</a>
      </div>

    </div>
    <!--Main Title div END-->
    
    <!--Grid START-->
          <?php
            $users = new ViewUser();
            $users->showAll();
          ?>
    <!--Grid END-->


  </body>
</html>