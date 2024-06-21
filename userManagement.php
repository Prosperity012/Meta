<?php
session_start();

if (!isset($_SESSION['adminCode'])) {
    header("Location: login.php");
    exit();
}

include("connect.php");

$query = "SELECT * FROM users";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
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
    <h1>Manage Users</h1>
    <table>
        <thead>
            <tr>
                <th>User ID</th>
                <th>Email</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address</th>
                <th>Date Registered</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['firstName']; ?></td>
                    <td><?php echo $row['lastName']; ?></td>
                    <td><?php echo $row['address']; ?>, <?php echo $row['city']; ?></td>
                    <td><?php echo $row['date_created']; ?></td>
                    <td>
                        <form method="POST" action="removeUser.php">
                            <input type="hidden" name="userID" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="deleteUser" class="delete-button">Delete</button>
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
