<?php

session_start();
require_once __DIR__ . "/model/product.php";
require_once __DIR__ . "/includes/cart.php";

//to be able to add things to a cart you ahve to be logged in
if(!isset($_SESSION['userId'])){
    header('location:login.php');
    exit;
}else{
    /*if there is no post variable storing the id data, to to the database and get a row of data 
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

if (!isset($_SESSION['cartTotal'])) {
    $_SESSION['cartTotal'] = clearCart();
}

if (isset($_POST['add'])) {
    addToCart();
    $customer_id = $_SESSION['userId'];
    $item_name = $newheels->getName();
    $item_price  = $newheels->getPrice();
    $item_quantity =  $_POST['quantity'];

    $sql = "INSERT INTO `cart`(customer_id,item_name,item_price,quantity_selected)
    VALUES (?,?,?,?) "; //placeholders
        $stmt = $conn->prepare($sql); //prepared statement
        $stmt->bind_param('isii',$customer_id,$item_name ,$item_price, $item_quantity,); //bind parameters
         //then start a session with the entered details in session variables
         session_start();
         $_SESSION['quantity'] = $item_quantity;
        $stmt->execute();
}

if (isset($_POST['delete'])) {
    deleteFromCart();
}

if (isset($_POST['clear'])) {
    clearCart();
}

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
            color: #ff1e00;
            margin-bottom: 40px;
        }

        #add-to-cart {
            margin-top: 10px;
            background-color: #ff1e00;
            text-decoration: none;
            color: black;
            font-size: large;
        }
        #add-to-cart:hover {
            background-color: #ffffff;
            color: #ff1e00;
        }

        #cart-button{
            margin-top: 20px;
        }
        @media screen and (max-width:900px) {
            .shop-container {
                margin-top: 200px;
            }
            .shop-container div {
                height: 400px;
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
                <p id="title"><?php echo  $newheels->getName()?></p>
               
            </span>
            <span>
                <p><?php echo $newheels->displayStock().'('.$newheels->getQuantity().')'?></p>

                <?php if ($newheels->getQuantity() != 0) : ?>
                    <p>Price: R <?php echo $newheels->getPrice() ?></p>

                    <form action="" method="POST">
                        <input type="number" id="quantity" name="quantity" placeholder="quantity">
                        <button type="submit" id="add-to-cart" value='<?php echo $newheels->getPrice() ?>' name="add">Add to Cart</button>
                    </form>

                    <form action="" method="POST">
                        <button type="submit" id="add-to-cart" value='<?php echo $newheels->getPrice() ?>' name="delete">Remove from cart</button>
                    </form>
                    <form action="" method="POST">
                        <button type="submit" id="add-to-cart" value='<?php echo $newheels->getPrice() ?>' name="clear">Clear Cart</button>
                    </form>

                <?php endif ?>

                <form action="cart.php" method="get" class="cart-form">
        <input type="hidden" name="cart" value="<?php echo $_SESSION['cartTotal'];?>">
        <button type="submit" id="cart-button">
            View Cart
        </button>
    </form>
            </span>
        </div>
    </div>
    <?php include_once __DIR__ . "/footer.php"; ?>
</body>

</html>