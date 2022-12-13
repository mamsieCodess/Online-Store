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
        .contact-page {
            margin-top: 120px;
            height: fit-content;
            padding: 40px 100px;
            text-align: center;
        }
        .contact-page i{
            color:gray ;
        }
        p{
            color:white;
        }

        .contact-page i {
            font-size: 45px;
        }

        .contact-page a {
            text-decoration: none;
            color: #ff1e00;
        }

        .contact-page a:hover {
            color: white;
        }

        @media screen and (max-width: 900px) {


            .contact-page {
                margin-top: 170px;
            }
        }
    </style>
</head>

<body>
<?php include_once __DIR__ . "/header.php";?>
    <div class="contact-page">

        <span><i class="fa-solid fa-envelope"></i>
            <p><a href="mailto:slaydragons@gmail.com">slaydragons@gmail.com</a> </p>
        </span>


        <span><i class="fa-solid fa-phone"></i>
            <p>+27 638 027 587</p>
        </span>
        <span><i class="fa-solid fa-link"></i>
            <p> <a href="https://www.slaydragons.com">www.slaydragons.com</a> </p>
        </span>
        <span><i class="fa-brands fa-linkedin"></i>
            <p> <a href="https://www.linkedin.com/in/slaydragons">@slaydragons</a> </p>
        </span>
    </div>
    <?php include_once __DIR__ . "/footer.php";?>
</body>

</html>