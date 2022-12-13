<?php

session_start();
require_once __DIR__ . "/model/product.php";

/*if there is no post varibale storing the id data, to to the database and get a row of data 
where it's id matches this id of the object from the previous page*/
if (isset($_GET['id'])) {
    $_SESSION['product'] = [];
    require_once __DIR__ . "/includes/config/db.php";
    $id = mysqli_escape_string($conn, $_GET['id']);
    $sql = "SELECT `*` FROM `products` WHERE `id` = $id";
    $result = mysqli_query($conn, $sql); 
    $heels = $result->fetch_assoc();//an associative array of a row returend from the database that can be used

    $newheels = new Heels(
        $heels['id'],
        $heels['name'],
        $heels['thumbnail'],
        $heels['look'],
        $heels['quantity'],
        $heels['price']
    );
    array_push($_SESSION['product'],$newHeels);

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Lexend+Giga:wght@400;600&family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/css/styles.css">
    <script src="https://kit.fontawesome.com/648e6e8434.js" crossorigin="anonymous"></script>
    <style>
        body{
            margin: 0;
            color:white;
            background-color: red;
        }
        .shop-container{
            margin-top:100px;
            padding:20px;
        }
        @media screen and (max-width:900px){
        .shop-container{
            margin-top:200px;
        }
    }
    </style>
</head>
<body>
<?php include_once __DIR__ . "/header.php";?>
<div class="shop-container" style="height:max-content; color:white">

<?php


echo $newheels->getName();
echo $newheels->getId();
echo $newheels->getQuantity();
echo $newheels->getPrice();


 ?>
</div>
<?php include_once __DIR__ . "/footer.php";?>
    
</body>
</html>