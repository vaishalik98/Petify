<?php
$database_name = "csgoo";
$con = mysqli_connect("localhost", "root", "", $database_name);
if(isset($_POST['cat_food_add_item'])){

    $name = $_POST['cat_food_name'];
    if(empty($name) ){
        ?>
            <script>
            console.log('Something is missing...');
            </script>
        <?php
    }
    $Insert_query = "DELETE from cat_product_details Where pname = '$name'";
    $insert_dog_query = mysqli_query($con,$Insert_query);
    
  
}else{
    ?>
        <script>console.log('error in queryy');</script>
    <?php
}

?>

