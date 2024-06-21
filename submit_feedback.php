<?php
session_start();

if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

include("connect.php");

if (isset($_POST['send'])) {
    $firstName = $conn->real_escape_string($_POST['fstname']);
    $lastName = $conn->real_escape_string($_POST['lstname']);
    $email = $conn->real_escape_string($_POST['email']);
    $feedback = $conn->real_escape_string($_POST['feedback']);

    $insertQuery = "INSERT INTO comments (firstName, lastName, email, feedback) 
                    VALUES ('$firstName', '$lastName', '$email', '$feedback')";
    if ($conn->query($insertQuery) === TRUE) {
        header("Location: feedback_submitted.php");
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}
?>
