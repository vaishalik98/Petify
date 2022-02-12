<?php
session_start();
if (!isset($_SESSION["username"])) {
  header("Location:Login.html");
}
?>

<!DOCTYPE html>
<html>



<head>
  <titile> </titile>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">

  <link rel="stylesheet" href="css/dog_food.css">





</head>



<body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
    <a class="navbar-brand bg-white px-2" style="border-radius: 7px;" href="index.php">PETIFY </a>
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
              <a class="dropdown-item bg-light">FOODS </a>
              <ul class="dropdown-menu bg-dark">
                <a class="dropdown-item bg-light " href="cart.php"> DOG</a>
                <a class="dropdown-item bg-light" href="Cat_food.html">CAT</a>
              </ul>
            </li>

            </li>
            <li class="dropdown-submenu bg-dark">
              <a class="dropdown-item bg-light ">BREEDS</a>
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



        <li class="nav-item px-3">
          <a class="nav-link  bg-light text-primary" style="border-radius: 7px;" href="logout.php">LOGOUT</a>
        </li>



      </ul>

    </div>
  </nav>

  <div style="clear: both"></div>
  <h3 class="title2 ">Shopping Cart Details <a href="cart.php" class="btn btn-danger" style="border-radius:20px; padding-left:20px;margin-left:770px;" type="submit">BACK TO PRODUCT</a></h3>


  <div class="table-responsive">
    <table>
      <tr>
        <th width="35%" height="60px">Product Name</th>
        <th width="0%" height="60px">Quantity</th>
        <th width="30%" height="60px">Price Details</th>
        <th width="20%" height="60px">Total Price</th>
        <th width="20%" height="60px">Remove Item</th>

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
          <td colspan="3" style="align:right">Total</td>
          <th style="align:right">$ <?php echo number_format($total, 2); ?></th>
          <td></td>
        </tr>
      <?php
      }
      ?>




    </table>
  </div>
  </div>

  <!-- <br><br><h4 style="padding-left:850px ;"> ohkay your total is <?php
                                                                      echo $total ?></h4> -->

  <br> <a href="payment.php"><button style="margin-left: 900px;" class="btn btn-success" type="submit">Pay Now</button>

</body>

</html>