<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <script src="https://kit.fontawesome.com/648e6e8434.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="../includes/css/home.css">
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Lexend+Giga:wght@400;600&display=swap" rel="stylesheet">
</head>

<body>


    <div class="header">
        <div class="logo">
            <a href="home.php" id="logo"><h3> SLAY DRAGONS </h3></a>

        </div>
        <div class="menu">

            <ul>
                <li><a href="./home.php">HOME</a> </li>
                <li><a href="../views/lookbook.php">LOOKBOOK</a></li>
                <li><a href="../views/shop.php">SHOP</a></li>
                <li><a href="../views/about.php">ABOUT</a></li>
                <li><a href="../views/contact.php">CONTACT</a></li>

            </ul>

        </div>
        <div class="cart-options">
            <ul>
                <li><a href="#">CART</a> </li>
                <li><a href="#">PROFILE</a> </li>
            </ul>

        </div>
    </div>

    <div class="hero">

        <img src="../includes/images/2359910009_9_1_1.jpg" alt="hero">

        <div id="hero-heading">
            <p id="hero-title">CHASE DREAMS ... BUT IN HEELS</p>
            <input type="submit" href="../views/shop.php" id="hero-button-shop" name="hero-button-shop" value="SHOP">
        </div>
    </div>

    <main>

        <section class="featured-products">
            <h4>FEATURED PRODUCTS</h4>
            <div class="grid-container">
                <!--styles of occasions-->
               <div class="grid-item item1">
                <p>Boot Heels</p>
               </div>
               <div class="grid-item item2"><p>Flat Heels</p></div>
               <div class="grid-item item3"><p>Chunky Heels</p></div>
               <div class="grid-item item4"><p>Pointed Heels</p></div>
            </div>
        
        </section>
        <section class="new additions" style="height:400px">
            <h4>NEW ADDITIONS</h4>
            <p style="text-align: center;">Coming soon</p>

        </section>

        <div class="footer">
            <p>Copyright &copy; Mamo </p>

        </div>

    </main>
   



</body>

</html>