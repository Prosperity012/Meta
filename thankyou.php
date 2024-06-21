<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include("connect.php");

// Redirect to the shop page after a short delay
//header("Refresh: 5; URL=shop.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

    <header>
        <div class="logo">
            Meta
        </div>
        <nav>
            <a href="homepage.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="about.php">About</a>
            <a href="contact.php">Contact</a>
        </nav>
    </header>

    <section class="checkout-main">
        <main>
            <h1 align="center">Thank You for Your Purchase!</h1>
            <h3>Your payment has been successfully processed. Thank you for shopping with Meta</h3>
            <p>You will be redirected to the shop page in a few seconds.</p>
            <p>If you are not redirected, <a href="shop.php">click here</a> to continue shopping.</p>
        </main>
    </section>

    <footer>
        <p>&copy; 2024 Meta. All rights reserved.</p>
    </footer>
</body>
</html>
