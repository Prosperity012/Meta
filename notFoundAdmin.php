<?php
// Redirect to the login page after a short delay
header("Refresh: 3; URL=login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Not found</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <section class="profile-section">
        <p align="center">User not found. The Admin code or password you have entered is incorrect</p>
    </section>
</body>
</html>
