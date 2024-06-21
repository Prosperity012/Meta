<?php
session_start();

if (!isset($_SESSION['adminCode'])) {
    header("Location: login.php");
    exit();
}

include("connect.php");

if (isset($_POST['readFeedback'])) {
    $userID = $conn->real_escape_string($_POST['commentID']);

    $deleteQuery = "DELETE FROM comments WHERE ID = '$userID'";
    if ($conn->query($deleteQuery) === TRUE) {
        ?>
        <script>
            window.alert("Comment Removed. Reason: The issue has been reslved");
            window.location.href='feedbackReview.php';
        </script>
        <meta http-equiv="refresh" content="1;url=feedbackReview.php"/>
        <?php
        exit();
    } else {
        echo "<script>showAlert('Error: " . $conn->error . "'); window.location.href = 'feedbackReview.php';</script>";
    }
}
?>
