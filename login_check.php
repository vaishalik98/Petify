<?php

session_start();

include 'dbconn.php';
$loginname=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM login WHERE username = '$loginname';";  
$querys = mysqli_query($con,$sql);
$result = mysqli_num_rows($querys);
if($result>0){
    $row = mysqli_fetch_assoc($querys);
    if($password == $row['password']){
        $_SESSION["username"] = $row['username'];
        header('Location: index.php'); 
    }
    else{
       header('Location:Login.html');
       echo "wrong password";
       ?>
       <script>
       alert('wrong password'); 
      </script>
      <?php
    }
}
else{
    header('location: Login.html');  
}

?>