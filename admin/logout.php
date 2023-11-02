<?php
// Start the session
session_start();

// Check if the user is already logged in
if (!isset($_SESSION['email']) || !isset($_SESSION['password'])) {
    // Redirect to the login page if not logged in
    header("Location: login.php");
    exit();
}

// Handle logout
if (isset($_POST['logout'])) {
    // Unset all session variables
    session_unset();

    // Destroy the session
    session_destroy();

    // Redirect to the login page after logout
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <style>
        /* Your CSS styles here */
    </style>
</head>
<body>
    <div class="container">
        <!-- Your page content goes here -->

        <form method="post">
            <a href="login.php">Back to Login</a> <!-- Link to the login page -->
            <button class="logout-button" type="submit" name="logout">Logout</button>
        </form>

        <!-- Your other page content continues here -->
    </div>
</body>
</html>
