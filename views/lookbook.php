<?php

require_once __DIR__ . "./../includes/config/db.php";

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
    <style>
        .lookbook {
            margin-top: 100px;
            padding: 10px;
            display: flex;
            justify-content: center;
            text-align: center;
            flex-wrap: wrap;
            height: 300px;
        }

        .wrapper {
            margin: 5px;
            position:relative;
        }

        img {
            width: 250px;
            height: 300px;
            margin-bottom: 5px;
            opacity: 1;
            display: block;
            width: 100%;
            transition: .5s ease;
            backface-visibility: hidden;
        }

        img:hover {
        height: 350px;
        }


        .form {
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        .wrapper:hover img {
            opacity: 0.3;
        }

        .wrapper:hover .form {
            opacity: 1;
        }

        .shop-button {
            background-color: #04AA6D;
            color: white;
            font-size: 16px;
            padding: 16px 32px;
        }

        @media screen and (max-width: 900px) {
            .lookbook {
                margin-top: 150px;
            }
        }
    </style>
</head>

<body>



    <div class="lookbook">
        <?php

        require_once __DIR__ . "./../model/product.php";
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
                <img src="<?php echo $product->getLook() ?>">
                <div class="form">
                    <form action='' method='get'>
                        <button id="shop-button"><a href="views/shop.php?id=<?php echo htmlspecialchars($product->getId()) ?>">SHOP</button>
                    </form>
                </div>
            </div>

        <?php endforeach; ?>


    </div>
</body>

</html>