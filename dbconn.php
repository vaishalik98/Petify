<?php
$server= "localhost";
$user= "root";
$password= "";
$db= "csgoo";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
        <script>console.log('Connection success');</script>
    <?php
}
else{
    ?>
    <script>
        alert("no succestion");
    </script>
    <?php
}

?>



