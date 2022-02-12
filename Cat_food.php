<?php
session_start();
$database_name = "csgoo";
$con = mysqli_connect("localhost", "root", "", $database_name);

if (isset($_POST["add"])) {
    if (isset($_SESSION["cart"])) {
      $item_array_id = array_column($_SESSION["cart"], "product_id");
      if (!in_array($_GET["id"], $item_array_id)) {
        $count = count($_SESSION["cart"]);
        $item_array = array(
          'product_id' => $_GET["id"],
          'item_name' => $_POST["hidden_name"],
          'item_image' => $_POST["hidden_image"],
          'product_price' => $_POST["hidden_price"],
          'item_quantity' => $_POST["quantity"],
        );
        $_SESSION["cart"][$count] = $item_array;
        echo '<script>window.location="cat_food.php"</script>';
      } else {
        echo '<script>alert("Product is already Added to Cart")</script>';
        echo '<script>window.location="Cat_food.php"</script>';
      }
    } else {
      $item_array = array(
        'product_id' => $_GET["id"],
        'item_name' => $_POST["hidden_name"],
        'item_image' => $_POST["hidden_image"],
        'product_price' => $_POST["hidden_price"],
        'item_quantity' => $_POST["quantity"],
      );
      $_SESSION["cart"][0] = $item_array;
    }
  }
  
  if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
      foreach ($_SESSION["cart"] as $keys => $value) {
        if ($value["product_id"] == $_GET["id"]) {
          unset($_SESSION["cart"][$keys]);
          echo '<script>alert("Product has been Removed...!")</script>';
          echo '<script>window.location="add_to_cart_details.php"</script>';
        }
      }
    }
  }
  ?>

<!doctype html>
<html>

<head>
  <titile> </titile>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/cat_food.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">

  <!-- Font Awesome -->

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">

  <!-- Bootstrap core CSS -->

  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">




</head>


<body class="dog_food">
 
<script src="js/addons/rating.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="scripts.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


  <nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
    <a class="navbar-brand" href="index.php">PETIFY </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">


        <li class="nav-item active">
          <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
        </li>


        <li class="nav-item active">
          <a class="nav-link" href="about1.php">ABOUT</a>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="PAGES.HTML" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
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
      <div class="col-lg-6 col-md-6 col-12     xop">
        <img src="images/lucy.jpg" class="img-fluid imkg">
      </div>
      <div class="col-lg-6 col-md-6 col-12 xop">
        <h2 class="xop">The benefits of mixing wet and dry foods</h4>
          <h4>1.Additional moisture content<br>
            2.Ehchance taste<br>
            3.adequate meat content<br> Take care of your pet? Start with a simple one: Shower them with affection.
            Give your pet endless hugs and kisses. They have unconditional love for you. Go ahead and return the favor!!
          </h4>
          <a href="about1.php">Wanna Know more!</a>
      </div>
    </div>
  </div>


  <div class="container-fluid" >
    <a  style="vertical-align:middle;margin:0px 1100px" href="add_to_cart_details.php " ><img src="https://img.icons8.com/cute-clipart/64/000000/shopping-cart-loaded.png" class="shadow border-rounded" /></a>
    <h2 class="text-center">cats foods</h2>
    <?php
    $query = "SELECT * FROM cat_product_details ORDER BY id ASC ";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
 
      while ($row = mysqli_fetch_array($result)) {

    ?>
        
          
            <div class=" col-lg-3 col-md-3 ">

              <form method="post" action="cat_food.php?action=add&id=<?php echo $row["id"]; ?>">

                <div class="product">
                  <br> <img src="IMAGES/<?php echo $row["image"]; ?>" class="img-responsive">
                  <h3 class="text-info"><?php echo $row["pname"]; ?></h3>
                  <h4 class="text-danger" height="25px"><?php echo $row["price"]; ?></h4>

                  <input type="text" name="quantity" class="form-control" value="1"><br>
                  <input type="hidden" name="hidden_name" value="<?php echo $row["pname"]; ?>">

                  <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>">

                  <input type="submit" name="add" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart"><br>
                </div>
              </form>


         
    </div>
      
    <?php
      }
    }
    ?>

</body>

</html>