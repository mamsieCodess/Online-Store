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
    $heels = $result->fetch_assoc(); //an associative array of a row returend from the database that can be used

    $newheels = new Heels(
        $heels['id'],
        $heels['name'],
        $heels['thumbnail'],
        $heels['look'],
        $heels['quantity'],
        $heels['price']
    );
    array_push($_SESSION['product'], $newHeels);
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
        body {
            margin: 0;
            color: white;
        }

        .shop-container {
            margin-top: 100px;
            padding: 20px;
            color: white;
            display: flex;
            justify-content: center;

        }

        .shop-container div {
            height: 450px;
            width: 300px;
            margin: 0 20px;
        }

        .image-wrapper {
            height: 450px;
            width: 300px;
            background-image: url("<?php echo $newheels->getThumbnail() ?>");
            background-size: contain;
            background-repeat: no-repeat;
        }

        .description {
            padding: 10px;
            text-align: center;
            font-family: "Lexend Giga", sans-serif;
        }

        #title {
            margin-bottom: 100px;
            color: #ff1e00;
        }

        #add-to-cart {
            margin-top: 10px;
            background-color: #ff1e00;
        }

        #add-to-cart a {
            text-decoration: none;
            color: black;
            padding: 20px;
            font-size: large;
        }

        #add-to-cart:hover {
            background-color: #ffffff;
        }

        #add-to-cart a:hover {
            color: #ff1e00;
        }

        @media screen and (max-width:900px) {
            .shop-container {
                margin-top: 200px;
            }

            .shop-container div {
                height: 300px;
                width: 250px;

            }


        }
    </style>
</head>

<body>
    <?php include_once __DIR__ . "/header.php"; ?>
    <div class="shop-container">
        <div class="image-wrapper"></div>
        <div class="description">
            <span>
                <p id="title"><?php echo  $newheels->getName() ?></p>
            </span>
            <span>
            <p><?php echo $newheels->displayStock()?></p>
            <?php if($newheels->getQuantity() != 0){
                echo '<p>Price: R '.$newheels->getPrice().'</p>
                <form action="">
                <button id="add-to-cart" value="<?php echo $newheels->getPrice()?>"><a href="">Add to Cart</a></button>
            </form>' ;
            }?>
                
            </span>
        </div>
    </div>
    <?php include_once __DIR__ . "/footer.php"; ?>
</body>

</html>