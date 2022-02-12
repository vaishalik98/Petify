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
  <link rel="stylesheet" href="css/style.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css">
</head>


<body>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

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


        <li class="nav-item active">
          <a class="nav-link" href="about1.php">ABOUT</a>
        </li>



        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="PAGES.HTML" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            PAGES
          </a>
          <ul class="dropdown-menu multi-level bg-dark" role="menu" aria-labelledby="dropdownMenu">

            <li class="dropdown-submenu bg-dark">
              <a class="dropdown-item bg-light">foods </a>
              <ul class="dropdown-menu bg-dark">
                <a class="dropdown-item bg-light " href="cart.php"> dog</a>
                <a class="dropdown-item bg-light" href="Cat_foodie.php">cat</a>
              </ul>
            </li>

        </li>



        </li>
      </ul>


      <li class="nav-item">
        <a class="nav-link" href="shops.php">SHOPS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </div>










    </ul>

    </div>
  </nav>

  <body>
    <section class="my-2">
      <div class="py-3">
        <h2 class="text-center">About us</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-12">
            <img src="images/GP.jpg" class="img-fluid aboutimg">
          </div>
          <div class="col-lg-6 col-md-6 col-12 ">
            <h1>Welcome To Petify!!</h1>
            <p>Love for One, Love for All
              Looking for some ways to really take care of your pet? Start with a simple one: Shower them with
              affection. Give your pet endless hugs and kisses. They have unconditional love for you. Go ahead and
              return the favor!!
            </p>
            <a href="https://www.petsmart.com/">Wanna Know more!</a>
          </div>
        </div>
      </div>
    </section>
    <section class="my-2">
      <div class="py-3">
        <h2 class="text-center">Some Profiles</h2>
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4 md-4 col-12">

              <div class="card" style="width:400px">
                <img class="card-img-top" src="IMAGES/dd2.jpg" alt="DOOGGII" height="265">
                <div class="card-body">
                  <h4 class="card-title">I M PUG</h4>
                  <p class="card-text">HEYYY!.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>

            </div>
            <div class="col-lg-4 md-4 col-12">
              <div class="card" style="width:400px">
                <img class="card-img-top" src="IMAGES/gogo.jpg" alt="DOOGGII">
                <div class="card-body">
                  <h4 class="card-title">I M GoGo</h4>
                  <p class="card-text">HEYYY!.</p>
                  <a href="#" class="btn btn-primary">See Profile</a>
                </div>
              </div>

            </div>
            <div class="col-lg-4 md-4 col-12">
              <div class="card" style="width:400px">
                <img class="card-img-top" src="IMAGES/SB.jpg" alt="DOOGGII" height="265">
                <div class="card-body">
                  <h4 class="card-title">LEO Here.</h4>
                  <p class="card-text">Hiii...</p>
                  <a href="https://kittysites.com/" class="btn btn-primary">See Profile</a>
                </div>
              </div>

            </div>


          </div>
        </div>
      </div>
    </section>
    <section class="my-2">
      <div class="py-2">
        <h2 class="text-center">Snaps</h2>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/kitty.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/CC1.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/DD1.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/hive five.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/CC2.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/DD2.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/CC3.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/DD3.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-10">
            <img src="images/CC4.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/DD4.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/CC5.jpg" class="img-fluid imgg pb-3">
          </div>
          <div class="col-lg-4 col-md-6 col-12">
            <img src="images/DD5.jpg" class="img-fluid imgg pb-3">
          </div>


        </div>

      </div>

    </section>
    <footer>
      <p class="p-2 bg-dark text-white text-center ">@PETIFY@</p>
    </footer>


  </body>