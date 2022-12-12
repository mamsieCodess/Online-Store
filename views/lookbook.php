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
            justify-content:space-around;
            flex-wrap:wrap;
        }

        .wrapper {
            margin: 5px;
            position:relative;
            height: 350px;
            width: 250px;

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
                        <button id="shop-button"><a href="views/shop.php?id=<?php echo htmlspecialchars($product->getId()) ?>">SHOP</a></button>
                    </form>
                </div>
            </div>

        <?php endforeach; ?>


    </div>

</body>

</html>