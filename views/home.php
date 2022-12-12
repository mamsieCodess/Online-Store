<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .hero{
            background-color: black;
        }
        .hero {
    height: 450px;
    display: flex;
    justify-content: center;
    font-size: x-large;
    color: white;
    margin-top: 50px;
    font-family: 'Julius Sans One', sans-serif;
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

.featured-products {
        margin: 0;
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
    
<div class="hero">

    <img src="includes/images/2359910009_9_1_1.jpg" alt="hero">

    <div id="hero-heading">
        <p id="hero-title">CHASE DREAMS ... BUT IN HEELS</p>
        <input type="submit" href="../views/shop.php" id="hero-button-shop" name="hero-button-shop" value="SHOP">
    </div>
</div>

<section class="featured-products">
    <h4>FEATURED PRODUCTS</h4>
    <div class="container">
       <span>
        <label>Platforms</label>
        <img src="https://static.zara.net/photos///2023/W/1/1/p/2337/010/202/2/w/750/2337010202_6_1_1.jpg?ts=1667908929016"></span>
        <span>
        <label>Pointed Heels</label>
        <img src="https://static.zara.net/photos///2022/I/1/1/p/2107/010/040/2/w/750/2107010040_6_1_1.jpg?ts=1667384988568"></span>
        <span>
        <label>Chunky</label>
        <img src="https://static.zara.net/photos///2022/I/1/1/p/1344/010/070/2/w/750/1344010070_6_1_1.jpg?ts=1659970560343"></span>
        <span>
        <label>Block</label>
        <img src="https://static.zara.net/photos///2022/V/1/1/p/3316/910/002/2/w/750/3316910002_6_1_1.jpg?ts=1646652791387"></span>
      
    </div>

</section>
<section class="new additions" style="height:400px">
    <h4>NEW ADDITIONS</h4>
    <p style="text-align: center;">Coming soon</p>

</section>

</body>
</html>