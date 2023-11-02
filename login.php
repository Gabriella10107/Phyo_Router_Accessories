<?php
session_start();

// Include your database connection file
include("connection.php");

// Check if the user is already logged in


// Handle the login form submission
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Query the database to check if there's at least one matching user
    $sql = "SELECT * FROM register WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Fetch the first row (if there are multiple matching rows)
        $row = mysqli_fetch_assoc($result);

        // Set session variables based on the fetched row
        $_SESSION['email'] = $row['email'];
        $_SESSION['password'] = $row['password'];

        // Redirect to a welcome page or dashboard (e.g., sign_in.php)
        header("Location: sign_in.php");
        exit();
    } else {
        $error_message = "Invalid email or password. Please try again.";
    }
}

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boxicons/css/boxicons.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your external CSS file -->
    <title>Phyo's Galaxy Network</title>
    <link rel="icon" href="images/wifi_logo.png" type="image/png" sizes="16x16">
    <style>
        /* Custom styles for the login form */
        body {
            background: #f4f4f4;
            font-family: 'Arial', sans-serif;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .wrapper {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            max-width: 500px;
            width: 90%;
        }

        .site-header {
            background: #007BFF;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        .site-header i {
            font-size: 24px;
        }

        .nav {
            background: #f4f4f4;
            padding: 15px;
            text-align: center;
        }

        .nav-logo p {
            font-size: 24px;
            font-weight: 600;
            margin: 0;
            color: #333;
        }

        .form-box {
            background: #fff;
            padding: 20px;
        }

        .form-box header {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #333;
        }

        .input-box {
            margin-bottom: 20px;
            position: relative;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 2px solid #007BFF;
            background: transparent;
            color: #333;
            font-size: 18px;
        }

        .input-field:focus {
            outline: none;
        }

        .input-field::placeholder {
            color: #aaa;
        }

        .input-box i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 15px;
            color: #007BFF;
            font-size: 20px;
        }

        .submit {
            background: #007BFF;
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 12px 20px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .submit:hover {
            background: #0056b3;
            transform: scale(1.05);
        }

        .top span {
            font-size: 16px;
        }

        .top a {
            color: #007BFF;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <header class="site-header">
            <div class="container">
                <p class="d-flex me-4 mb-0 mp-2">
                    <i class="bi-person custom-icon me-2 mp-2"></i>
                </p>
            </div>
        </header>
        <nav class="nav">
            <div class="nav-logo">
                <p>LOGO .</p>
            </div>
        </nav>
        <div class="form-box">
            <header>Login</header>
            <form action="login.php" method="POST">
                <div class="input-box">
                    <input type="text" class="input-field" name="email" placeholder="Username or Email">
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-box">
                    <input type="password" class="input-field" name="password" placeholder="Password">
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-box">
                    <input type="submit" class="submit" name="login" value="Login">
                </div>
                <div class="top">
                    <span>Don't have an account? <a href="register.php" onclick="register()">Sign Up</a></span>
                </div>
                
            </form>
        </div>
    </div>
    <script src="script.js"></script> <!-- Link to your external JavaScript file -->
</body>
</html>
