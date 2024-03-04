<?php
include 'config.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM mydatabase WHERE username='$username' AND password='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Successful login
        $_SESSION['username'] = $username; // Set the session variable
        header("Location: welcome.php"); // Redirect to the welcome page
        exit();
    } else {
        // Invalid login
        echo "Invalid username or password";
    }
}

$conn->close();
?>
