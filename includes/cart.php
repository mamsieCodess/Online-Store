<?php
function addToCart() {
    $_SESSION['cartTotal'] = $_POST['add'] + $_SESSION['cartTotal'];
}

function deleteFromCart() {
    $_SESSION['cartTotal'] = $_SESSION['cartTotal'] - $_POST['delete'];
}

function clearCart() {
    $_SESSION['cartTotal'] = 0;
}
?>