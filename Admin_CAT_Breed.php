<?php
session_start();
$database_name = "csgoo";
$con = mysqli_connect("localhost", "root", "", $database_name);

if (isset($_POST["add"])){
  if (isset($_SESSION["cart"])){
      $item_array_id = array_column($_SESSION["cart"],"product_id");
      if (!in_array($_GET["id"],$item_array_id)){
          $count = count($_SESSION["cart"]);
          $item_array = array(
              'product_id' => $_GET["id"],
              'item_name' => $_POST["hidden_name"],
              'product_price' => $_POST["hidden_price"],
              'item_quantity' => $_POST["quantity"],
          );
          $_SESSION["cart"][$count] = $item_array;
          echo '<script>window.location="Cart.php"</script>';
      }else{
          echo '<script>alert("Product is already Added to Cart")</script>';
          echo '<script>window.location="Cart.php"</script>';
      }
  }else{
      $item_array = array(
          'product_id' => $_GET["id"],
          'item_name' => $_POST["hidden_name"],
          'product_price' => $_POST["hidden_price"],
          'item_quantity' => $_POST["quantity"],
      );
      $_SESSION["cart"][0] = $item_array;
  }
}

if (isset($_GET["action"])){
  if ($_GET["action"] == "delete"){
      foreach ($_SESSION["cart"] as $keys => $value){
          if ($value["product_id"] == $_GET["id"]){
              unset($_SESSION["cart"][$keys]);
              echo '<script>alert("Product has been Removed...!")</script>';
              echo '<script>window.location="Cart.php"</script>';
          }
      }
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/dog_food.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

  <!-- Bootstrap core CSS -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">

  <!-- Material Design Bootstrap -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">


  <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700i" rel="stylesheet">

</head>

<body class="dog_food">

  <script src="js/addons/rating.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="scripts.js"></script>





  <nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
    <a class="navbar-brand" href="index.php">PETIFY </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">


        <li class="nav-item active">
          <a class="nav-link" href="index.php">HOME <span class="sr-only">(current)</span></a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="about1.php">ABOUT</a>
        </li>



        <div class="dropdown ">
          <a class="nav-link dropdown-toggle" href="PAGES.HTML" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PAGES
          </a>
          <ul class="dropdown-menu multi-level bg-dark" role="menu" aria-labelledby="dropdownMenu">

            <li class="dropdown-submenu bg-dark">
              <a class="dropdown-item bg-light">foods </a>
              <ul class="dropdown-menu bg-dark">
                <a class="dropdown-item bg-light " href="dog_food.html"> dog</a>
                <a class="dropdown-item bg-light" href="Cat_food.html">cat</a>
              </ul>
            </li>

            </li>
            <li class="dropdown-submenu bg-dark">
              <a class="dropdown-item bg-light ">breeds</a>
              <ul class="dropdown-menu bg-dark">
                <a class="dropdown-item bg-white">DOG</a>
                <a class="dropdown-item bg-light">CATS </a>

              </ul>



            </li>
          </ul>
        </div>



        <li class="nav-item">
          <a class="nav-link" href="shops.html">SHOPS</a>
        </li>



        <li class="nav-item">
          <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>


      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div class="container-fluid" enctype="multipart/form-data">
    <form action="" class="text-center">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4 my-5">
                <div class="card">
                    <div class="card-footer">
                        <p class="lead">ADD NEW CAT BREED</p>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <input type="file" accept="image/*"  class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Name of the product">
                        </div>
                        <div class="form-group">
                            <input type="number" class="form-control" placeholder="Price">
                        </div>
                        <div class="form-group">
                            <a href="#" class="btn btn-primary">ADD ITEM</a>
                        </div>
                    </div>
                </div>                
            </div>
            <div class="col-md-4"></div>
        </div>
    </form>
  </div>

</body>

</html>