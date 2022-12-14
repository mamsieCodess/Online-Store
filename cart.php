<?php session_start()?>
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
    .cart{
        margin-top:100px;
        height: 450px;
        background-color:bisque;
        padding:20px;
    }

    @media screen and (max-width:900px){
       .cart{
        margin-top: 200px;
    }
}
  </style>
</head>
<body>
<?php include_once __DIR__ . "/header.php"; ?>
    <div class="cart">
       <h3>Your cart:</h3>
       <p>Amount due is: R <?php echo  $_SESSION['cartTotal']; ?></p>
    </div>
    <?php include_once __DIR__ . "/footer.php"; ?>
</body>
</html>