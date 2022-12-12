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
    <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Lexend+Giga:wght@400;600&family=Montserrat+Alternates&display=swap" rel="stylesheet">
<style>
    * {
  box-sizing: border-box;
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
  font-family: "Julius Sans One", sans-serif;
}

.header a {
  text-decoration: none;
  color: white;
}

.menu button {
  color: #ff1e00;
  background-color: black;
}

.menu button:hover {
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

.cart-options {
  color: white;
  display: flex;
}

.cart-options > li {
  margin-left: 10px;
}

.cart-options > li:hover {
  color: #ff1e00;
}

.cart-options i:hover {
  color: #ff1e00;
}

h4 {
  padding: 10px;
  color: #ff1e00;
  font-family: "Lexend Giga", sans-serif;
  text-align: center;
}

.container {
  display: flex;
  justify-content: center;
}
.container img {
  height: 350px;
  padding: 20px;
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
    font-size: small;
  }

  .cart-options {
    display: flex;
    justify-content: center;
  }

  .container {
    display: block;
    text-align: center;
  }
  .container img {
    max-height: 250px;
    padding: 20px;
  }
}

@media screen and (max-width: 400px) {
  /*for 400px screen and below*/
}

</style>
</head>
<body style="background-color: black; color:white">
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
                <li><i class="fa-solid fa-cart-shopping"></i></li>
                <li><i class="fa-solid fa-user"></i> </li>
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