<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include("connect.php");

// Redirect to the shop page after a short delay
header("Refresh: 15; URL=Contact.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <div class="logo">
            Meta
        </div>
        <nav>
            <h2>Feedback recieved</h2>
        </nav>
    </header>

    <section class="checkout-main">
        <main>
            <h1 align="center">Thank You  
                <?php if(isset($_SESSION['email'])){
                    $email=$_SESSION['email'];
                    $query=mysqli_query($conn, "SELECT * FROM users WHERE users.email='$email'");
                        while($row=mysqli_fetch_array($query)){
                        echo $row['firstName'];
                        }
                    } 
                ?> for your feedback
            </h1>
            <p>Your feedback is now under review. Our team will contact you once your feedback has been reviewed</p>
            <p></p>
            <p>You will now be redirected back to the contact page in a few seconds.</p>
            <p>If you are not redirected or want to return to your page, <a href="Contact.php">click here</a>.</p>
        </main>
    </section>

    <footer>
        <p>&copy; 2024 Meta. All rights reserved.</p>
    </footer>
</body>
</html>
