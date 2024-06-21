<?php
session_start();
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
        <strong>- Shop -</strong>
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

<main class="shopping-section">
    <div class="product-list" id="productList">
            <section class="featured-products">
                <h1>Shop for products</h1>   
                <div class="product-list">
                        <div class="product">
                            <img src="images/product1.png" alt="Virtual Reality Glasses" sizes="50px"><br/>
                            <h3>Virtual Reality Glasses</h3>
                            <p>Immerse yourself in a new reality with our lightweight and affordable Virtual Reality Glasses, perfect for 
                                beginners</p>
                            <p>Price: R3780</p>
                            <button onclick="addToCart('Virtual Reality Glasses', 3780)">Add to cart</button><br/>
                        </div>
                        <h3></h3>
                        <div class="product">
                            <img src="images/product2.png" alt="Meta Quest 3 VR Headsets" sizes="50px"><br/>
                            <h3>Meta Quest 3 VR Headsets</h3>
                            <p>Step into the future with the Meta Quest 3 VR Headsets VR Headsets, offering top-of-the-line visuals and 
                                comfort for serious gamers.</p>
                            <p>Price: R6000</p>
                            <button onclick="addToCart('Meta Quest 3 VR Headsets', 6000)">Add to cart</button><br/>
                        </div>
                        <h3></h3>
                        <div class="product">
                            <img src="images/product3.png" alt="Meta Desktop Speakers" sizes="50px"><br/>
                            <h3>Meta Desktop Speakers</h3>
                            <p>Enhance your audio experience with our High Quality Desktop Speakers, delivering rich and immersive 
                                sound for your home or office.</p>
                            <p>Price: 2500</p>
                            <button onclick="addToCart('Meta Desktop Speakers', 2500)">Add to cart</button><br/>
                        </div>
                        <h3></h3>
                        <div class="product">
                            <img src="images/product4.png" alt="Product 4" sizes="50px"><br/>
                            <h3>Meta Oculus Quest 2 VR headsets</h3>
                            <p>Enjoy seamless virtual experiences with our VR Headsets, designed for comfort and high performance.</p>
                            <p>Price: R3400</p>
                            <button onclick="addToCart('Meta Oculus Quest 2 VR headsets', 3400)">Add to cart</button><br/>
                        </div>
                        <h3></h3>
                        <div class="product">
                            <img src="images/product5.png" alt="Meta Earphones Wireless" sizes="50px"><br/>
                            <h3>Meta Earphones Wireless</h3>
                            <p>Experience true freedom with our Wireless Meta Earphones, featuring superior sound quality and long battery life.</p>
                            <p>Price: R850</p>
                            <button onclick="addToCart('Meta Earphones Wireless', 850)">Add to cart</button><br/>
                        </div>
                        <h3></h3>
                        <div class="product">
                            <img src="images/product6.png" alt="Meta Smartwatch" sizes="50px"><br/>
                            <h3>Meta Smartwatch</h3>
                            <p>Stay connected and track your fitness goals with our versatile Smartwatch, combining style and functionality.</p>
                            <p>Price: R2200</p>
                            <button onclick="addToCart('Meta Smartwatch', 2200)">Add to cart</button><br/>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="cart">
            <h2>Shopping Cart</h2>
            <ul id="cartList"></ul>
            <p id="totalPrice">Total: R0</p>
            <button onclick="checkout()">Checkout</button>
        </div>

    </main>

    <footer>
            <p>&copy; 2024 Meta. All rights reserved.</p>
            <div class="social-icons">
                <a href=""><img src="images/Facebook.png" alt="Facebook"></a>
                <a href=""><img src="images/twitter.png" alt="Twitter"></a>
                <a href=""><img src="images/Instagram.png" alt="Instagram"></a>
            </div>
        </footer>
    
        <script src="scripts.js"></script>

        <script>
            let cart = [];

            function addToCart(productName, price) {
            const product = { name: productName, price: price };
            cart.push(product);
            displayCart();
            }

            function displayCart() {
            const cartList = document.getElementById('cartList');
            cartList.innerHTML = '';
            let total = 0;
            cart.forEach((product, index) => {
                cartList.innerHTML += `<li>${product.name} - R${product.price.toFixed(2)} <button onclick="removeFromCart(${index})">Remove</button></li>`;
                total += product.price;
            });
            document.getElementById('totalPrice').innerText = `Total: R${total.toFixed(2)}`;
            }

            function removeFromCart(index) {
            cart.splice(index, 1);
            displayCart();
            }

            function checkout() {
            sessionStorage.setItem('cart', JSON.stringify(cart));
            window.location.href = 'checkout.php';
            }
        </script>
</body>

</html>
