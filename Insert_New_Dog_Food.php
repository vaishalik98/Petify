<?php
$database_name = "csgoo";
$con = mysqli_connect("localhost", "root", "", $database_name);
if(isset($_POST['dog_food_add_item'])){
    $img = $_FILES["dog_food_img"]["name"];
    $name = $_POST['dog_food_name'];
    $price = $_POST['dog_food_price'];
    if(empty($img) || empty($name) || empty($price)){
        ?>
            <script>
            console.log('Something is missing...');
            </script>
        <?php
    }
    $Insert_query = "INSERT INTO product_details(id, pname, image, price) VALUES ('','$name','$img','$price')";
    $insert_dog_query = mysqli_query($con,$Insert_query);
    if($insert_dog_query){
        move_uploaded_file($_FILES['dog_food_img']['tmp_name'], "IMAGES/$img");
        ?>
            <script>
                console.log('INSERTED');
            </script>
        <?php
    }else{
        ?>
            <script>console.log('error');</script>
        <?php
    }
}else{
    ?>
        <script>console.log('error in queryy');</script>
    <?php
}

?>

