<?php
// Include your database configuration
include 'config.php';

// Retrieve user input
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check user credentials
    $query = "SELECT * FROM mydatabase WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Successful login
        echo "Login successful!";
    } else {
        // Invalid login
        echo "Invalid username or password";
    }
}

// Close the database connection
$conn->close();
?>
