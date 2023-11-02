<?php
session_start();

if (isset($_SESSION['email']) || isset($_SESSION['password'])) {
    // Unset and destroy all session variables
    session_unset();
    session_destroy();
    session_write_close();
    setcookie(session_name(), '', 0, '/');
    session_regenerate_id(true);

    // Set the logout message
    $_SESSION['logout_message'] = "Logout Successful";

    // Redirect to the login page
    header("Location: index.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <!-- Your head content here -->
</head>
<body>
    <!-- Your other HTML content here -->

    <?php if (isset($_SESSION['logout_message'])) : ?>
        <div class="logout-message">
            <?php echo $_SESSION['logout_message']; ?>
        </div>
        <div class="go-to-login">
            <a href="login.php">Go to Login Page</a>
        </div>
        <?php unset($_SESSION['logout_message']); ?>
    <?php endif; ?>

    <!-- Rest of your HTML content here -->
</body>
</html>
