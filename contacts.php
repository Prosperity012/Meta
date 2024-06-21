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
        <div class="logo">
            Meta
        </div>
        <nav>
            <a href="index.php">Home</a>
            <a href="Store.php">Shop</a>
            <a href="info.php">About</a>
            <a href="login.php">Login</a>
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

<footer>
        <p>&copy; 2024 Meta. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="facebook.png" alt="Facebook"></a>
            <a href="#"><img src="twitter.png" alt="Twitter"></a>
            <a href="#"><img src="instagram.png" alt="Instagram"></a><br/>
        </div>
    </footer>

<script src="script.js"></script>
</body>
</html>
