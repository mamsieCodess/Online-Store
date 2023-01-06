<?php session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://kit.fontawesome.com/648e6e8434.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Lexend+Giga:wght@400;600&family=Montserrat+Alternates&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="includes/css/styles.css">
  <style>
    .cart {
      margin-top: 100px;
      height: 450px;
      background-color: bisque;
      padding: 20px;
    }
    td{
      text-align: center;
      padding:5px;
    }

    @media screen and (max-width:900px) {
      .cart {
        margin-top: 200px;
      }
    }
  </style>
</head>

<body>
  <?php include_once __DIR__ . "/header.php"; ?>
  <div class="cart">
    <h3>Your cart:</h3>

    <?php
     $userId = $_SESSION['userId'];
     
    // Display the items in the cart
    include "includes/config/db.php";
    $query = "SELECT `*` FROM `cart` WHERE `customer_id` = ' $userId '";
    $result = $conn->query($query);
    echo '<table>';
    echo '<tr><th>Item</th><th>Quantity</th><th>Price</th><th>Total</th></tr>';
    while ($row = $result->fetch_assoc()) {
      $subtotals = $row['quantity_selected'] * $row['item_price'];

      echo '<tr>';
      echo '<td>' . $row['item_name'] . '</td>';
      echo '<td>' . $row['quantity_selected'] . '</td>';
      echo '<td>' . $row['item_price'] . '</td>';
      echo '<td>' . $subtotals.'</td>';
      echo '</tr>';
     
      $_SESSION['totals'] = [];
      array_push($_SESSION['totals'],$subtotals);
      
    }
    
    echo '<tr><th>Subtotal</th><td><td></td><td>'.array_sum($_SESSION['totals']).'</td><tr>';
    echo '</table>';
    ?>
  </div>
  <?php include_once __DIR__ . "/footer.php"; ?>
</body>

</html>