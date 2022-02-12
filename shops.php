<?php
session_start();
  if(!isset($_SESSION["username"])){
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
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link  rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" >
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" >




</head>



<body>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
    <a class="navbar-brand bg-white px-2" style="border-radius: 7px;" href="index.php">PETIFY </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
        <a class="nav-link dropdown-toggle" href="PAGES.HTML" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            PAGES
          </a>
            <ul class="dropdown-menu multi-level bg-dark" role="menu" aria-labelledby="dropdownMenu">
               
                <li class="dropdown-submenu bg-dark">
                <a class="dropdown-item bg-light" >FOODS </a>
                <ul class="dropdown-menu bg-dark">
                  <a class="dropdown-item bg-light " href="cart.php"> DOG</a>
                  <a class="dropdown-item bg-light" href="Cat_foodie.php">CAT</a>
                 </ul>
                  </li>     

                </li>


               
               </li>
              </ul>
        </div>



            <li class="nav-item">
              <a class="nav-link" href="shops.php">SHOPS</a>
            </li>



        <li class="nav-item px-3">
          <a class="nav-link  bg-light text-primary" style="border-radius: 7px;" href="logout.php">LOGOUT</a>
        </li>



      </ul>
      
    </div>

    
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

<!-- Indicators -->
<ul class="carousel-indicators">
  <li data-target="#demo" data-slide-to="0" class="active"></li>
  <li data-target="#demo" data-slide-to="1"></li>
  <li data-target="#demo" data-slide-to="2"></li>
</ul>

<!-- The slideshow -->
<div class="carousel-inner">
  <div class="carousel-item active">
    <img src="IMAGES/pet.jpeg" alt="pets" >
    <div class="carousel-caption">
      <h1>Finding Nearby Shop...? Dont Worry  We are Here</h1>
      
    </div>

  </div>
  <div class="carousel-item">
    <img src="images/pet_buckets.jpg" alt="catty">
    <div class="carousel-caption">
      <h1>Juss See The  Available Shops Below... </h1>
      
    </div>
  </div>

  <div class="carousel-item">
    <img src="IMAGES/p2.jfif" alt="doggo" >
    <div class="carousel-caption">
      <h1>I will always woof you!</h1>
    </div>

  </div>
  <div class="carousel-item">
    <img src="images/d3.jpg" alt="catty" >
  </div>
  <div class="carousel-item">
    <img src="images/sb2.jpg" alt="catty">
  </div>
  

 

  <div class="carousel-item">
    <img src="images/D6.jpg" alt="catty" >
  </div>
  <div class="carousel-item">
    <img src="images/pug.jpg" alt="catty">
  </div>

</div>

<!-- Left and right controls -->
<a class="carousel-control-prev" href="#demo" data-slide="prev">
  <span class="carousel-control-prev-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>
<a class="carousel-control-next" href="#demo" data-slide="next">
  <span class="carousel-control-next-icon"></span>
</a>


<br>

<div class="container bcontent">
        <h2>  </h2>
        <hr />
        <div class="card" style="width: 100%; height:290px ">
            <div class="row no-gutters">
                <div class="col-sm-3">
                    <img class="card-img" src="IMAGES/premium pet.jpeg" alt="">
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                        <h5 class="card-title">Premium Pets Kalyan | Pet Accessories |</h5>
                        <p class="card-text"> Address :Shop No 2 Sai Sankul Annex Opp Cinemax Khadakpada, Kalyan West, Mumbai, Maharashtra 421301
                          <br>Hours: 
                          Closed ⋅ <br>
                          Opens 9AM<br>
                          Phone: 084228 28020
                    
                          </p>
                        
                          <a href="http://premiumpets.in/" > click here to visit his website.....</a><br> <br>
                        
                        <a href="https://www.google.co.in/maps/dir/19.2994882,73.0759446/pet+shop+near+me/@19.2541086,73.0621274,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3be795f5512be8a1:0x1bd7ce84bd1111af!2m2!1d73.0881994!2d19.2204022" class="btn btn-primary">directions</a>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="container bcontent">
        <h2>  </h2>
        <hr />
        <div class="card" style="width: 100%; height:280px ">
            <div class="row no-gutters">
                <div class="col-sm-3">
                    <img class=" card-img" src="images/dog_shop.jpg "  alt="">
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                        <h5 class="card-title">MY lovely pet shop</h5>
                        <p class="card-text">Its provide you all type of dog and cat breeds<br>
                          Address: Rakhangi Mahal, Nr Wellness Medical, Worli Naka, Mumbai, Maharashtra 400601
                        <br> </p>
                        <a href="https://www.google.com/maps/dir/19.3057159,73.057157/pet+shop+near+me/@19.2862737,73.0556185,14.03z/data=!4m9!4m8!1m0!1m5!1m1!1s0x3be7bd18beac6137:0x3c2cb96eb98527fa!2m2!1d73.0573963!2d19.3056589!3e0" class="btn btn-primary">directions</a>
                    </div>
                </div>
            </div>
        </div>
</div>

<div class="container bcontent">
        <h2>  </h2>
        <hr />
        <div class="card" style="width: 100%; height:280px ">
            <div class="row no-gutters">
                <div class="col-sm-3">
                    <img class="card-img" src="IMAGES/PET SHOP.jpg" alt="">
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                        <h5 class="card-title">Premium Pets Dombivli West | Pet Shop |</h5>
                        <p class="card-text"> Ghanshyam Complex, Shop No.D/5, Subhash Chandra Bose Rd, near Kranti Departmental Store, Dombivli West, Dombivli, Maharashtra 421202
                          Hours: 
                          Closed :<br> 
                          Opens 9AM <br> 
                            Phone: 090290 03170 
                          </p>
                        <a href="https://www.google.co.in/maps/dir/19.2994882,73.0759446/pet+shop+near+me/@19.2541086,73.0621274,13z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3be795f5512be8a1:0x1bd7ce84bd1111af!2m2!1d73.0881994!2d19.2204022" class="btn btn-primary">directions</a>
                    </div>
                </div>
            </div>
        </div>
</div>




<div class="container bcontent">
        <h2 >  </h2>
        <hr />
        <div class="card" style="width: 100%; height:250px ">
            <div class="row no-gutters">
                <div class="col-sm-3">
                    <img class="card-img" src="images/dog_shop2.jpg" alt="Suresh Dasari Card">
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                        <h5 class="card-title">Pets corner</h5>
                        <p class="card-text">Here u will get all types of foods product of dog and cat freely<br>
                        Address: Shop no 8 hargun house near worli medical behind podar hospital, Worli, Mumbai, Maharashtra 400018<br> </p>
                        <a href="https://www.google.co.in/maps/place/Pets+Corner+thane-+Pet+shop+and+clinic/@19.2005937,72.9729011,17z/data=!3m1!4b1!4m5!3m4!1s0x3be7b9c8507ceaf9:0x12a59c3ddbdd095c!8m2!3d19.2005937!4d72.9750898" class="btn btn-primary">directions</a>
                    </div>
                </div>
            </div>
        </div>
</div>


<div class="container bcontent">
        <h2>  </h2>
        <hr />
        <div class="card" style="width: 100%; height:310px ">
            <div class="row no-gutters">
                <div class="col-sm-3">
                    <img class="card-img" src="IMAGES/vet5.jpg" alt="">
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                        <h5 class="card-title">Vet 4 Amazing Pets | Pet Clinic in Hiranandani estate Thane, Pet grooming</h5>
                        <p class="card-text"> Address: shree Maa Hall, Near, Shop no. 9, Queensgate Bulding, Ghodbunder Rd, Hiranandani Estate, Thane, Maharashtra 400607
                          Hours: <br>
                        Closed ⋅ Opens 9AM  <br>

                          Phone: 098602 87901
                    
                          </p>
                        
                          <a href="http://www.v4pet.com/" > click here to visit his website.....</a><br> 
                        
                        <a href="https://www.google.co.in/maps/dir//pet+shop+near+me/data=!4m6!4m5!1m1!4e2!1m2!1m1!1s0x3be7bbf2a1fa1c85:0x2be8c97b74639911?sa=X&ved=2ahUKEwi3q-zSwMvsAhV-zDgGHYZFDGoQ9RcwAHoECAkQBQ" class="btn btn-primary">directions</a>
                    </div>
                </div>
            </div>
        </div>
</div>


<div class="container bcontent">
        <h2>  </h2>
        <hr />
        <div class="card" style="width: 100%; height:310px ">
            <div class="row no-gutters">
                <div class="col-sm-3">
                    <img class="card-img" src="IMAGES/justdog.jpg" alt="">
                </div>
                <div class="col-sm-5">
                    <div class="card-body">
                        <h5 class="card-title">Just Dogs, Pet grooming</h5>
                        <p class="card-text"> Address: Shop no 2, Next to Andhra Bank, Ram Maruti Rd, near Vandana Talkies, Thane West, Thane, Maharashtra 400602
                        Closed ⋅ Opens 9AM  <br>

                        Phone: 091378 58585
                    
                          </p>
                        
                          <a href="https://www.justdogsstore.com/" > click here to visit his website.....</a><br> 
                        
                        <a href="google.co.in/maps/dir/19.2994886,73.0759443/cat+shop+near+me/@19.2433196,72.9774913,12z/data=!3m1!4b1!4m9!4m8!1m1!4e1!1m5!1m1!1s0x3be7b922ec0d6cf9:0xecb1ceef3860cd78!2m2!1d72.971429!2d19.195765"class="btn btn-primary">directions</a>
                    </div>
                </div>
            </div>
        </div>
</div>

</div>
</body>
</html>