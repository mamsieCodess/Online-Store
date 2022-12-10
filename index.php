<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SLAY DRAGONS</title>
    <script src="https://kit.fontawesome.com/648e6e8434.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@400;600&display=swap" rel="stylesheet">
    <style>
        /*@media screen and (min-width: 901px) from 901px and above */
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            background-color: black;
            color: white;
            font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        }

        .header {
            display: flex;
            background-color: black;
            justify-content: space-between;
            padding: 20px 30px 10px;
            color: white;
            position: fixed;
            top: 0;
            width: 100%;
            overflow: hidden;
            z-index: 2;
        }

        .header a {
            text-decoration: none;
            color: white;
        }

        li a:hover {
            color: #ff1e00;
        }

        .logo {
            color: white;
        }

        #logo {
            font-family: "Lexend Giga", sans-serif;
            color: #ff1e00;
        }

        ul {
            display: flex;
            width: fit-content;
        }

        li {
            margin-right: 15px;
            list-style-type: none;
        }

        li:hover {
            color: #ff1e00;
        }

        .cart-options {
            color: white;
            display: flex;
        }

        .cart-options>li {
            margin-left: 10px;
        }

        .cart-options>li:hover {
            color: #ff1e00;
        }

        .hero {
            height: 450px;
            display: flex;
            justify-content: center;
            font-size: x-large;
            color: white;
            margin-top: 50px;
        }

        .hero img {
            background-color: black;
            opacity: 0.3;
            width: 100%;
        }

        #hero-heading {
            position: absolute;
            text-align: center;
            margin: 250px 200px;
        }

        #hero-title {
            font-weight: bolder;
            font-size: 35px;
            margin-bottom: 50px;
            font-family: "Lexend Giga", sans-serif;
        }

        #hero-subtitle span {
            font-family: "Lexend Giga", sans-serif;
            color: #ff1e00;
        }

        #hero-button-shop {
            background-color: #ff1e00;
            border: none;
        }

        #hero-button-shop:hover {
            background-color: #ffffff;
            color: #ff1e00;
        }

        .featured-products {
            height: auto;
        }

        h4 {
            padding: 10px;
            color: #ff1e00;
            font-family: "Lexend Giga", sans-serif;
            text-align: center;
        }

        .featured-products p {
            font-size: larger;
            background-color: black;
            margin-top: 100px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: auto auto auto;
            height: 400px;
            gap: 20px;
            padding: 0 50px;
        }

        .grid-container div:hover {
            opacity: 1;
        }

        .item1 {
            grid-column: 1;
            grid-row: 1 / span 2;
            background: url("../images/3.jpg");
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.5;
        }

        .item2 {
            background: url("../images/2.jpg");
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.5;
        }

        .item4 {
            background: url("../images/5.jpg");
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.5;
        }

        .item3 {
            grid-column: 3;
            grid-row: 1 / span 2;
            background: url("../images/1.jpg");
            background-size: contain;
            background-repeat: no-repeat;
            opacity: 0.5;
        }

        .about-page{
            margin:110px 0;
            height:max-content;
            color:white;
            padding: 20px;
            background-color: rgb(255,255,255,0.1);
        }
        .about-page h2{
            text-align: center;
            color: #ff1e00;
            font-family: "Lexend Giga", sans-serif;
            
        }
        #team span{
            color:#ff1e00;
        }

        #team{
            display: flex;
            justify-content: center;
        }
        #team img {
            width:200px;
            padding-left:20px;
        }

        #mission_vision{
            text-align: center;
           

        }
        .about-page h5{
            padding: 20px;
        }
        
        .about-page section{
            padding: 20px;
        }
        .contact-page {
            margin-top:100px;
           height: fit-content;
           padding: 40px 100px ;
           text-align: center;
        }
        
        i{
            font-size: 45px;
        }
        .contact-page a{
            text-decoration: none;
            color:#ff1e00;
        }
        .contact-page a:hover{
            color:white;
        }

        .footer {
            bottom: 0;
            position: fixed;
            background-color: #ff1e00;
            text-align: center;
            width: 100%;
        }

        .footer p {
            padding-top: 75px;
        }

        @media screen and (max-width: 900px) {

            /*between 900px and 400px*/
            .hero img {
                width: 100%;
            }

            #hero-heading {
                margin: 100px 100px 0;
            }

            .hero {
                margin-top: 140px;
            }

            .header {
                display: block;
                text-align: center;
                font-size: 20px;
                padding: 10px 0 0 0;
            }

            .logo {
                padding-bottom: 10px;
            }

            .menu {
                display: flex;
                justify-content: center;
            }

            .cart-options {
                display: flex;
                justify-content: center;
            }

            .header>div:hover {
                border: 1px solid #ff1e00;
            }

            .featured-products {
                margin: 0;
            }

            .about-page{
                margin-top: 150px;
            }

            .contact-page {
                margin-top: 150px;
            }
        }

        @media screen and (max-width: 400px) {

            /*for 400px screen and below*/
            #hero-heading {
                margin: 0;
                padding: 10px;
            }
        }
    </style>
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="index.php" id="logo">
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
                include_once __DIR__ . "/views/about.php";
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