<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header("Location: index.html"); // Redirect to the login page if not logged in
    exit();
}

// Retrieve the username from the session
$username = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link rel="stylesheet" type="text/css" href="./style.css" />
</head>
<body>
    <div class="container">
        <h2>Welcome, <?php echo $username; ?>!</h2>
        <p>This is your secure dashboard. Add your content here.</p>
        <a href="logout.php">Logout</a>
    </div>
</body>
</html>
