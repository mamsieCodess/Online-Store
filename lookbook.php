<?php
require_once __DIR__ . "/includes/config/db.php";
$sql = "SELECT `*` FROM `products`";
$result = $conn->query($sql);
$rows = $result->fetch_all(MYSQLI_BOTH);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lookbook</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Lexend+Giga:wght@400;600&family=Montserrat+Alternates&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="includes/css/styles.css">
    <script src="https://kit.fontawesome.com/648e6e8434.js" crossorigin="anonymous"></script>
    <style>
        body{
            margin: 0;
        }
        .lookbook {
            margin-top: 100px;
            padding: 50px 0;
            display: flex;
            flex-wrap:wrap;
            justify-content:space-evenly;
        }

        .wrapper {
            position:relative;
            height: 350px;
            width: 250px;
            margin: 10px;
        }

        img {
            width:200px;
            height: 300px;
            opacity: 1;
            transition: .5s ease;
        }

        img:hover {
        height: 350px;
        width: 250px;
        }


        .form {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
        }

        .wrapper:hover img {
            opacity: 0.5;
        }

        .wrapper:hover .form {
            opacity: 1;
        }
        .wrapper a{
            font-size: 20px;
        }
      
        @media screen and (max-width: 900px) {
            .lookbook {
                margin-top: 150px;
            }
        }
    </style>

</head>

<body>
  <?php include_once __DIR__ . "/header.php";?>
    <div class="lookbook">
       
        <?php

        require_once __DIR__ . "/model/product.php";
        session_start();
        $_SESSION['products'] = [];

        foreach ($rows as $row) {
            $newHeels = new Heels(
                $row['id'],
                $row['name'],
                $row['thumbnail'],
                $row['look'],
                $row['quantity'],
                $row['price']
            );

            array_push($_SESSION['products'], $newHeels);
        }

        foreach ($_SESSION['products'] as $product) : ?>

            <div class="wrapper">
                <img src="<?php echo $product->getThumbnail() ?>">
                <div class="form">
                    <form action='' method='get'>
                        <button id="shop-button"><a href="shop.php?id=<?php echo htmlspecialchars($product->getId()) ?>">SHOP</a></button>
                    </form>
                </div>
            </div>

        <?php endforeach; ?>


    </div>
  
    <?php include_once __DIR__ . "/footer.php";?>
</body>

</html>