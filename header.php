<div class="header">
        <div class="logo">
            <a href="index.php" id="logo">
                <h3> SLAY DRAGONS </h3>
            </a>

        </div>
        <div class="menu">
            <ul>
               <li><a href="index.php">HOME</a></li>
               <li><a href="./lookbook.php">LOOKBOOK</a></li>
               <li><a href="./shop.php">SHOP</a></li>
               <li><a href="./about.php">ABOUT</a></li>
               <li><a href="./contact.php">CONTACT</a></li>
            </ul>
        </div>
        <div class="cart-options">
            <ul>
                <li><i class="fa-solid fa-cart-shopping"><span style="padding: 0 5px;font-size:small">
                <?php echo $_SESSION['cartTotal']; ?>
                </span></i></li>
                <li><i class="fa-solid fa-user"></i> </li>
            </ul>

        </div>
    </div>
    