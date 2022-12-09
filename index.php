<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://kit.fontawesome.com/648e6e8434.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="includes/css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="home.php" id="logo">
                <h3> SLAY DRAGONS </h3>
            </a>

        </div>
        <div class="menu">
            <ul>
                <li>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                        <button type="submit" name="menuButton" value="home">HOME</button>
                    </form>
                </li>
                <li>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                        <button type="submit" name="menuButton" value="lookbook">LOOKBOOK</button>
                    </form>
                </li>
                <li>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                        <button type="submit" name="menuButton" value="shop">SHOP</button>
                    </form>
                </li>
                <li>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                        <button type="submit" name="menuButton" value="about">ABOUT</button>
                    </form>
                </li>
                <li>
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
                        <button type="submit" name="menuButton" value="contact">CONTACT</button>
                    </form>
                </li>

            </ul>

        </div>
        <div class="cart-options">
            <ul>
                <li><a href="#">CART</a> </li>
                <li><a href="#">PROFILE</a> </li>
            </ul>

        </div>
    </div>
    <?php
    if (isset($_GET['menuButton'])) {

        switch ($_GET['menuButton']) {
            case 'home':
                include_once __DIR__ . "/views/home.php";
                break;

            case 'lookbook':
                include_once __DIR__ . "/views/lookbook.php";
                break;

            case 'shop':
                include_once __DIR__ . "/views/shop.php";
                break;

            case 'about':
                include_once __DIR__ . "/views/lookbook.php";
                break;

            case 'contact':
                include_once __DIR__ . "/views/contact.php";
                break;

            case 'cart':
                include_once __DIR__ . "/views/cart.php";
                break;
            default:
                //still thinking about the default
                break;
        }
    }
    ?>


    <div class="footer">
        <p>Copyright &copy; Mamo </p>

    </div>

</body>

</html>