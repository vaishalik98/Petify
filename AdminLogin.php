
<!DOCTYPE html>
<html>

<head>
    <titile> </titile>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="lg/ADMIN PAGE.css">
</head>


<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js">

    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <nav class="navbar navbar-expand-lg navbar-red-green bg-dark">
        <a class="navbar-brand" href="signup.php">PETIFY </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a class="nav-link" href="Adminlogin.php">Admin</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="signup.php">SIGN UP</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="Login.html">LOGIN</a>
                </li>


            </ul>

        </div>
    </nav>


    <div id="login-box">
        <div class="login-left">

            <h1>Login</h1>

            <form action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>' method="POST">
                <span><input class="form-control" type="text" name="AdminUsername" placeholder="Enter Username"
                        required></span><?php
                                if(isset($_GET['AdminUsername'])){
                                    if($_GET['AdminUsername'] === 'empty'){
                                        echo "<p class = 'text-danger '>Admin Username is Empty</p>";
                                    }
                                    elseif($_GET['AdminUsername'] === 'wrongadminusername'){
                                        // echo "<p class = 'text-danger '> Not A valid Admin Username</p>";
                                    }
                                    
                                }
                                                        
                            ?>

                <input class="form-control" type="password" name="AdminPassword" placeholder="Enter Password" required>
                <?php
                                if(isset($_GET['AdminPassword'])){
                                    if($_GET['AdminPassword'] === 'empty'){
                                        echo "<p class = 'text-danger '>Admin Password Is Empty</p>";
                                    }
                                    elseif($_GET['AdminPassword'] === 'wrongadminpassword'){
                                        echo "<p class = 'text-danger '> Not A valid Admin Password</p>";
                                    }
                                }
                                                        
                            ?>
                <div class="container">
                    <input class="btn btn-success" type="submit" name="Adminsubmit" value="LOGIN">
                    <?php
                          // submit button pressed
                          if(isset($_POST['Adminsubmit'])){

                            if(empty($_POST['AdminUsername']) || empty($_POST['AdminPassword'])){
                              header("Location: AdminLogin.php?&AdminUsername=empty&AdminPassword=empty");
                            }else{
                              // username and password
                              if($_POST['AdminUsername'] == 'Petify' && $_POST['AdminPassword'] == 'Petify'){

                                $_SESSION['admin'] = "admin";

                                header("Location: Admin_Page.php");
                                
                              }else{
                                header("Location: AdminLogin.php?&AdminUsername=wrongadminusername&AdminPassword=wrongadminpassword");
                              }
                            }
                            
                          }
                        ?>
                    <!-- <a href="signup.php"><input class="btn btn-success signup" name="signup" value="signup"></a> -->
                </div>
            </form>


        </div>
        
    </div>
    <footer>
        <p class="p-2 bg-dark text-white text-center ">@PETIFY@</p>
    </footer>