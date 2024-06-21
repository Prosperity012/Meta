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
            <a href="info.php">About</a>
            <a href="contacts.php">Contact</a>
            <a href="login.php">Login</a>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search for Meta products" id="searchInput" onkeyup="showSuggestions()">
            <div class="search-suggestions" id="searchSuggestions"></div>
        </div>
    </header>

    <main class="shopping-section">
        <div class="product-list" id="productList">
            <section class="featured-products">
                <h1>Shop for products</h1>   
                <div class="product-list">
                    <div class="product" align="center">
                        <img src="product 1.png" alt="Product 1" sizes="50px"><br/>
                        <h3>Virtual Reality Glasses</h3>
                        <p>Immerse yourself in a new reality with our lightweight and affordable Virtual Reality Glasses, perfect for beginners.</p>
                        <p>Price: R 3,780</p><br/>
                        <p></p>
                        <button><a href="login.php">Add to cart</a></button><br/>
                    </div>
                    <div class="product" align="center">
                        <img src="product2.png" alt="Product 2" sizes="50px"><br/>
                        <h3>Meta Quest 3 VR Headsets</h3>
                        <p>Step into the future with the Meta Quest 3 VR Headsets, offering top-of-the-line visuals and comfort for serious gamers.</p>
                        <p>Price: R 6,000</p><br/>
                        <p></p>
                        <button><a href="login.php">Add to cart</a></button><br/>
                    </div>
                    <div class="product" align="center">
                        <img src="product3.png" alt="Product 3" sizes="50px"><br/>
                        <h3>Meta Desktop Speakers</h3>
                        <p>Enhance your audio experience with our High Quality Desktop Speakers, delivering rich and immersive sound for your home or office.</p>
                        <p>Price: R 2,500</p><br/>
                        <p></p>
                        <button><a href="login.php">Add to cart</a></button><br/>
                    </div>
                    <div class="product" align="center">
                        <img src="product4.png" alt="Product 4" sizes="50px"><br/>
                        <h3>Meta Oculus Quest 2 VR Headsets</h3>
                        <p>Enjoy seamless virtual experiences with our VR Headsets, designed for comfort and high performance.</p>
                        <p>Price: R 3,400</p><br/>
                        <p></p>
                        <button><a href="login.php">Add to cart</a></button><br/>
                    </div>
                    <div class="product" align="center">
                        <img src="product5.png" alt="Product 5" sizes="50px"><br/>
                        <h3>Meta Earphones Wireless</h3>
                        <p>Experience true freedom with our Wireless Meta Earphones, featuring superior sound quality and long battery life.</p>
                        <p>Price: R 850</p><br/>
                        <p></p>
                        <button><a href="login.php">Add to cart</a></button><br/>
                    </div>
                    <div class="product" align="center">
                        <img src="product6.png" alt="Product 6" sizes="50px"><br/>
                        <h3>Meta Smartwatch</h3>
                        <p>Stay connected and track your fitness goals with our versatile Smartwatch, combining style and functionality.</p>
                        <p>Price: R 2,200</p><br/>
                        <p></p>
                        <button><a href="login.php">Add to cart</a></button><br/>
                    </div>
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
    
        <script src="js_scripts/scripts.js"></script>
</body>

</html>