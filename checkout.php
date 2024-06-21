<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

$cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : [];

$total = 0;
foreach ($cart as $item) {
    $total += $item['price'];
}

include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout - Meta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
    <div class="logo"></div>
    <nav>
        <a href="homepage.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="About.php">About</a>
        <a href="Contact.php">Contact</a>
        <a href="profile.php">Profile</a>
    </nav>
    <div class="search-bar">
        <input type="text" placeholder="Search for Meta products" id="searchInput" onkeyup="showSuggestions()">
        <div class="search-suggestions" id="searchSuggestions"></div>
    </div>
</header>

<main class="shopping-section">
    <h1>Order summary</h1>
    <div>
        <ul>
            <?php foreach ($cart as $item): ?>
                <p><li><?php echo htmlspecialchars($item['name']) .' - R' . number_format($item['price'], 2); ?></li></p>
            <?php endforeach; ?>
        </ul>
        <p align="right"><strong>Total: R<?php echo number_format($total, 2); ?></strong></p>
    </div>
    
    <div>
        <h3>Shipping location:</h3>
        <p>
        <?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT * FROM users WHERE users.email='$email'");
                    while($row=mysqli_fetch_array($query)){
                    echo $row['city'];
                    }
                } 
            ?>
            , 
            <?php
            if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT * FROM users WHERE users.email='$email'");
                    while($row=mysqli_fetch_array($query)){
                    echo $row['address'];
                    }
                } 
            ?>
        </p>
    </div>
</main>

<section class="checkout-main">
    <h1>Payment</h1>
        <p>Total to be paid: R<?php echo number_format($total, 2); ?></p>
        <section class="container">
            <h2 class="form-title">Please fill in you payment details</h2>
            <form method="post" action="thankyou.php">
                <div class="input-group">
                    <input type="text" id="cardNumber" placeholder="1111 2222 3333 4444" name="cardNumber" required pattern="[0-9]{16}">
                    <label for="cardNumber">Card Number</label>
                </div>
                <div class="input-group">
                    <input type="text" id="expiryDate" placeholder="MM/YY" name="expiryDate" required pattern="(0[1-9]|1[0-2])\/([0-9]{2})">
                    <label for="expiryDate">Expiry Date</label>
                </div>
                <div class="input-group">
                    <input type="text" id="cvv" placeholder="000" name="cvv" required pattern="[0-9]{3}">
                    <label for="cvv">CVV</label>
                </div>
                <div class="input-group">
                    <input type="text" id="cardHolder" placeholder="Card Holder Name" name="cardHolder" required>
                    <label for="cardHolder">Card Holder Name</label>
                </div>
                <div align="right">
                    <img src="https://img.icons8.com/color/36/000000/visa.png" alt="Visa">
                    <img src="https://img.icons8.com/color/36/000000/mastercard.png" alt="Mastercard">
                    <img src="https://img.icons8.com/color/36/000000/amex.png" alt="Amex">
                    <img src="https://img.icons8.com/color/36/000000/paypal.png" alt="PayPal">
                </div>
                <div></div>
                <button onclick="cashout()">Purchase</button>

            </form>
        </section>
    </section>

<footer>
    <p>&copy; 2024 Meta. All rights reserved.</p>
    <div class="social-icons">
        <a href="#"><img src="images/Facebook.png" alt="Facebook"></a>
        <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
        <a href="#"><img src="images/Instagram.png" alt="Instagram"></a><br/>
    </div>
</footer>

<script>
        function cashout() {
        return validateForm
        sessionStorage.removeItem('cart');
        window.location.href = 'thankyou.php';
        }

    document.addEventListener('DOMContentLoaded', () => {
        const cart = JSON.parse(sessionStorage.getItem('cart'));
        if (cart && cart.length > 0) {
            fetch('save_cart.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ cart: cart })
            }).then(() => {
                sessionStorage.removeItem('cart');
            });
        }
    });

    function validateForm() {
            const cardNumber = document.getElementById('cardNumber');
            const expiryDate = document.getElementById('expiryDate');
            const cvv = document.getElementById('cvv');
            // Validate card number
            const cardNumberPattern = /^[0-9]{16}$/;
            if (!cardNumberPattern.test(cardNumber.value)) {
                alert("Please input a valid card number");
                return false;
            }
            // Validate expiry date
            const expiryDatePattern = /^(0[1-9]|1[0-2])\/?([0-9]{2})$/;
            if (!expiryDatePattern.test(expiryDate.value)) {
                alert("Expiry date must be in the format MM/YY.");
                return false;
            }
            // Validate CVV
            const cvvPattern = /^[0-9]{3}$/;
            if (!cvvPattern.test(cvv.value)) {
                alert("CVV must be exactly 3 digits.");
                return false;
            }
            return true;
        }
    </script>

</body>
</html>
