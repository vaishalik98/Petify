V<?php
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
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
          <a class="nav-link" href="logout.php">Logout</a>
        </li>


      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
  </nav>


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12  py-2  mr-auto xop">

        <img src="images/PUG.jpg" class="img-fluid imkg">

      </div>

      <div class="col-lg-6 col-md-6 col-12 xop">
        <h2 class="xop  py-2">The benefits of mixing wet and dry foods</h4>
          <h4 class="xop">1.Additional moisture content<br>
            2.Ehchance taste<br>
            3.adequate meat content<br> Take care of your pet? Start with a simple one: Shower them with affection.
            Give your pet endless hugs and kisses. They have unconditional love for you. Go ahead and return the favor!!
          </h4>
          <a href="about1.php">Wanna Know more!</a>
      </div>
    </div>
  </div>


  <div class="container" style="width: 65%">
    <h2>shopping cart</h2>
    <?php
            $query = "SELECT * FROM product ORDER BY id ASC ";
            $result = mysqli_query($con,$query);
            if(mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_array($result)) {

                    ?>

        <div class="col-md-3">
          <form method="post" action="cart.php?action=add&id=<?php echo $row["id"] ?>">
            <div class="product">
              <img src="<?php echo $row["image"]; ?>" class="img-responsive">
              <h5 class="text-danger"><?php echo $row["p_name"]; ?></h5>
              <h5 class="text-danger"><?php echo $row["price"]; ?></h5>
              <input type="text" name="quantity" class="form-control" value="1">
              <input type="hidden" name="hidden_name" value="<?php echo $row["p_name"]; ?>">
              <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">
              <input type="submit" name="add " style="margin-top: 5 px;" value="add to cart " class="btn btn-success">
            </div>
          </form>
        </div>
    <?php
      }
    }
    ?>
    <div style="clear: both"></div>
    <h3 class="title2">shopping cart details</h3>
    <div class="table-responsive">
      <table>
        <tr>
          <th width="30%">Product Name</th>
          <th width="10%">Quantity</th>
          <th width="13%">Price Details</th>
          <th width="10%">Total Price</th>
          <th width="17%">Remove Item</th>
        </tr>
        <?php
        if (!empty($_SESSION["cart"])) {
          $total = 0;
          foreach ($_SESSION["cart"] as $key => $value) {
        ?>
            <tr>
              <td><?php echo $value["item_name"]; ?></td>
              <td><?php echo $value["item_quantity"]; ?></td>
              <td>$ <?php echo $value["product_price"]; ?></td>
              <td>
                $ <?php echo number_format($value["item_quantity"] * $value["product_price"], 2); ?></td>
              <td><a href="Cart.php?action=delete&id=<?php echo $value["product_id"]; ?>"><span class="text-danger">Remove Item</span></a></td>

            </tr>
          <?php
            $total = $total + ($value["item_quantity"] * $value["product_price"]);
          }
          ?>
          <tr>
            <td colspan="3" align="right">Total</td>
            <th align="right">$ <?php echo number_format($total, 2); ?></th>
            <td></td>
          </tr>
        <?php
        }
        ?>

      </table>
    </div>
  </div>





  



</body>

</html>