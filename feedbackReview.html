<?php
session_start();

if (!isset($_SESSION['adminCode'])) {
    header("Location: login.php");
    exit();
}

include("connect.php");

$query = "SELECT * FROM comments";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Received</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="css/styles.css">

    <script>
    function showAlert(message) {
        alert(message);
    }
    </script>

</head>
<body>

<header>
    <div class="logo">
        Meta Admin
    </div>
    <nav>
        <a href="userManagement.php">User Management</a>
        <a href="feedbackReview.php">User Feedback</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<main class="table-section">
    <h1>Feedback by users</h1>
    <table>
        <thead>
            <tr>
                <th>Comment ID</th>
                <th>User Email</th>
                <th>Comment</th>
                <th>Date and time created</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['ID']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['feedback']; ?></td>
                    <td><?php echo $row['feedback_date']; ?></td>
                    <td>
                        <form method="POST" action="feedbackRead.php">
                            <input type="hidden" name="commentID" value="<?php echo $row['ID']; ?>">
                            <button type="submit" name="readFeedback" class="delete-button">Issue resolved</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</main>

<footer>
    <p>&copy; 2024 Meta. All rights reserved.</p>
</footer>

</body>
</html>
