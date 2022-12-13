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
  <title>SLAY DRAGONS</title>
  <script src="https://kit.fontawesome.com/648e6e8434.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Julius+Sans+One&family=Lexend+Giga:wght@400;600&family=Montserrat+Alternates&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="includes/css/styles.css">
  <title>Home</title>
  <style>
    .container {
      display: flex;
      flex-wrap: wrap;
    }

    .container img {
      height: 350px;
      padding: 20px;
    }
  </style>
</head>

<body style="background-color: black; color:white">
  <?php include_once __DIR__ . "/header.php"; ?>

  <div class="hero">

    <img src="includes/images/2359910009_9_1_1.jpg" alt="hero">

    <div id="hero-heading">
      <p id="hero-title">CHASE DREAMS ... BUT IN HEELS</p>
    </div>
  </div>

  <section class="featured-products">
    <h4>FEATURED PRODUCTS</h4>
    <div class="container">
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
          <img src="<?php echo $product->getLook() ?>">
          <div class="form">
            <form action='' method='get'>
              <button id="shop-button"><a href="shop.php?id=<?php echo htmlspecialchars($product->getId()) ?>">SHOP</a></button>
            </form>
          </div>
        </div>

      <?php endforeach; ?>

    </div>

  </section>
  <section class="new additions" style="height:400px">
    <h4>NEW ADDITIONS</h4>
    <p style="text-align: center;">Coming soon</p>

  </section>
  <?php include_once __DIR__ . "/footer.php"; ?>

</body>

</html>