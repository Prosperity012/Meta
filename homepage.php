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
    <title>Home Meta</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>

<header>
    <div class="logo"></div>
    <nav>
        <p><strong>- Home -</strong>    
        <a href="shop.php">Shop</a>
        <a href="About.php">About</a>
        <a href="Contact.php">Contact</a>
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
        </p>
    </nav>
    
    <div class="search-bar">
        <input type="text" placeholder="Search for Meta products" id="searchInput" onkeyup="showSuggestions()">
        <div class="search-suggestions" id="searchSuggestions"></div>
    </div>
</header>

    <div class="shopping-section">

    <div>
        <h2>
                Welcome to the Meta E-commerse site where you can browse, shop<br/>and discover a variety of our amazing Meta products and gadgets.
        </h2>   
        <h3 align="center">Happy Browsing <?php if(isset($_SESSION['email'])){
                $email=$_SESSION['email'];
                $query=mysqli_query($conn, "SELECT * FROM users WHERE users.email='$email'");
                    while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'];
                    }
                } 
                ?> :)</h3>
        <button><a href="shop.php">Browse Products</a></button>
    </div>

        <section class="featured-products">
            <h2>Featured Products</h2>
            <div class="product-list">
                <div class="product">
                    <img src="images/product1.png" alt="Product 1">
                    <h3>Virtual Reality Glasses</h3>
                    <p>Immerse yourself in a new reality with our lightweight and affordable Virtual Reality Glasses, perfect for beginners.</p>
                </div>
                <div class="product">
                    <img src="images/product2.png" alt="Product 2">
                    <h3>Meta Quest 3 VR Headsets</h3>
                    <p>Step into the future with the Meta Quest 3 VR Headsets, offering top-of-the-line visuals and comfort for serious gamers.</p>
                </div>
                <div class="product">
                    <img src="images/product3.png" alt="Product 3">
                    <h3>Meta Dektop Speakers</h3>
                    <p>Enhance your audio experience with our High Quality Desktop Speakers, delivering rich and immersive sound for your home or office.</p>
                </div>
                <div class="product">
                        <img src="images/product5.png" alt="Product 5" sizes="50px"><br/>
                        <h3>Meta Earphones Wireless</h3>
                        <p>Experience true freedom with our Wireless Meta Earphones, featuring superior sound quality and long battery life.</p>
                </div>
            </div>
        </section>
    </div>

    <main>
            <div class="shopping-section">
                <section>
                    <h1>About</h1>
                    <p> 
                        Welcome to Meta E-commerce, your number one source for all new technology and Virtual Reality products. 
                        We're dedicated to giving you the very best of Meta Products, with a focus on dependability, customer service and uniqueness.
                    </p>
                    <p> 
                        Founded in 2024 by Mr. P Matlala, Meta has come a long way from its beginnings in Cambridge. 
                        When Mr. P Matlala first started out, his passion for Virtual Reality and higher technology products drove them to do tons of 
                        research so that Meta can offer you the world's most advanced technology experience and a chance to connect with others. 
                        We now serve customers all over the world, and are thrilled that we're able to turn our passion into our own website.</p>
                    <p>
                        We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please 
                        don't hesitate to contact us.
                    </p>
                    <p>
                        <strong>Sincerely,</strong><br>
                        Mr. P Matlala
                    </p>
                </section>
        
                <section>

                    <div class="team-list">
                        <div class="team-member">
                        <img src="images/matlala.png.jpg" alt="Founder photo">
                        <h3>Our Founder & CEO</h3>
                        <h5>Mr. P Matlala</h5>
                    </div>
                </section>
                
            </div>
        </main>    
    <footer>
        <p>&copy; 2024 Meta. All rights reserved.</p>
        <div class="social-icons">
            <a href="#"><img src="facebook.png" alt="Facebook"></a>
            <a href="#"><img src="twitter.png" alt="Twitter"></a>
            <a href="#"><img src="instagram.png" alt="Instagram"></a><br/>
        </div>
    </footer>
    
        <script src="scripts.js"></script>
 
</body>
</html>