<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include("connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop Meta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
    <div class="logo"></div>
    <nav>
        <p>
        <a href="homepage.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="About.php">About</a>
        <strong>- Contact -</strong>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
        </p>
    </nav>
    
    <div class="search-bar">
        <input type="text" placeholder="Search for Meta products" id="searchInput" onkeyup="showSuggestions()">
        <div class="search-suggestions" id="searchSuggestions"></div>
    </div>
</header>

<section class="contact-section">
    <h1>Contact Us</h1>
    <p>
        If you have any questions, comments, queries, or concerns, feel free to reach out to us using our contact details
        provided below or fill out the contact form provided below.
    </p>

    <h1>Our Contact Details</h1>
    <p><strong>Email:</strong> metacustomerservice@outlook.com</p>
    <p><strong>Call Center:</strong> +27 100 200 300</p>
    <p><strong>Working Hours:</strong><br/></p>
    <p>Monday to Friday, 8:00 AM - 5:00 PM</p>
    <p>Saturdays, 8:00 AM - 3:00 PM</p>

</section>

<section class="container">

    <h2 class="form-title">Contact Form</h2>

    <form method="post" action="submit_feedback.php">
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="fstname" id="fstname" placeholder="First Name" required>
            <label for="fstname">First Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lstname" id="lstname" placeholder="First Name" required>
            <label for="fstname">Last Name</label>
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="text" name="email" id="email" placeholder="First Name" required>
            <label for="email">Email</label>
            <p>Comment section:</p>
        </div>
        <div class="input-box">
            <textarea type="text" name="feedback" id="feedback" placeholder="Enter comment..." required></textarea>
        </div>
        <p class="or">-----------------------------------------------------------------------------------------------------------------------</p>
        <input type="submit" class="btn" value="Submit" name="send" >
    </form>

</section>

<footer>
        <p>&copy; 2024 Meta. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="images/Facebook.png" alt="Facebook"></a>
            <a href="#"><img src="images/twitter.png" alt="Twitter"></a>
            <a href="#"><img src="images/Instagram.png" alt="Instagram"></a><br/>
        </div>
    </footer>

<script src="script.js"></script>
</body>
</html>
