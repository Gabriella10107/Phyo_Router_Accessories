<?php
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['password'])){
    // If the user is not logged in, redirect to the login page
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Logged in Successful</title>
    <style>
        body {
            background-image: url(''); /* Replace with your anime-style background image */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            font-family: 'Arial', sans-serif;
            text-align: center;
            animation: fadeIn 2s;
        }

        .container {
            background: rgba(255, 255, 255, 0.8); /* Semi-transparent white background */
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            margin: 100px auto; /* Added margin for centering */
            padding: 20px;
            animation: slideIn 2s;
        }

        h2 {
            color: #333;
            animation: pulse 1s infinite;
        }

        p {
            color: #555;
        }

        a {
            color: #0077FF;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }

        @keyframes pulse {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.05); }
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Logged in Successfully</h2>
        <p>You have successfully logged in. You are already logged in.</p>
        <p><a href="index.php">Go To Home Page</a></p>
      
        <!-- Your content for the registered user can go here -->
    </div>
</body>
</html>
