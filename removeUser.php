<?php
session_start();

if (!isset($_SESSION['adminCode'])) {
    header("Location: login.php");
    exit();
}

include("connect.php");

if (isset($_POST['deleteUser'])) {
    $userID = $conn->real_escape_string($_POST['userID']);

    $deleteQuery = "DELETE FROM users WHERE ID = '$userID'";
    if ($conn->query($deleteQuery) === TRUE) {
        echo "<script>showAlert('User deleted successfully.'); window.location.href = 'userManagement.php';</script>";
        exit();
    } else {
        echo 
            "<script>
                showAlert('Error: " . $conn->error . "');
                window.location.href = 'userManagement.php';
            </script>";
    }
}
?>
