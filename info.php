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
            <a href="contacts.php">Contact</a>
            <a href="login.php">Login</a>
        </nav>
        <div class="search-bar">
            <input type="text" placeholder="Search for Meta products" id="searchInput" onkeyup="showSuggestions()">
            <div class="search-suggestions" id="searchSuggestions"></div>
        </div>
    </header>

    <body>
    <main>
            <div class="contact-section">
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
                    <h1>Our Team</h1>
                    <div class="team-list">
                        <div class="team-member">
                        <img src="images/matlala.png.jpg" alt="Manager photo">
                        <h3>Founder & CEO</h3>
                        <h5>Mr. P Matlala</h5>
                    </div>
                
                    <div class="team-member">
                    <img src="images/matlala.png.jpg" alt="Manager photo">
                        <h3>Product Manager</h3>
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
    
        <script src="script.js"></script>
    </body>
</body>

</html>