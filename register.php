<?php
include 'connect.php';

if(isset($_POST['signUp'])){
    $firstName = $conn->real_escape_string($_POST['fName']);
    $lastName = $conn->real_escape_string($_POST['lName']);
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $password = md5($password);
    $cellphone = $conn->real_escape_string($_POST['cellphone']);
    $address = $conn->real_escape_string($_POST['address']);
    $country = $conn->real_escape_string($_POST['country']);
    $city = $conn->real_escape_string($_POST['city']);

    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);
    if($result->num_rows > 0){
        echo "This Email Address Already Exists";
    } else {
        $insertQuery = "INSERT INTO users (firstName, lastName, email, password, cellphone, address, country, city) 
                        VALUES ('$firstName', '$lastName', '$email', '$password', '$cellphone', '$address', '$country', '$city')";
        if($conn->query($insertQuery) === TRUE){
            header("location: login.php");
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

if(isset($_POST['signIn'])){
    $email = $conn->real_escape_string($_POST['email']);
    $password = $conn->real_escape_string($_POST['password']);
    $password = md5($password);

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    } else {
        header("location: notFound.php");
    }
}
?>
