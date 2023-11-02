<?php
session_start();
include("connection.php");

// SQL statement to create the "register" table if it doesn't exist
$createTableSQL = "CREATE TABLE IF NOT EXISTS register (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    name VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    phone VARCHAR(20) NOT NULL
)";

// Execute the SQL statement to create the table
if ($conn->query($createTableSQL) === TRUE) {
    // The table was created successfully or already exists
} else {
    echo "Error creating table: " . $conn->error;
}

$errors = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
    $password = $_POST["password"];
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_SPECIAL_CHARS);
    $address = filter_input(INPUT_POST, "address", FILTER_SANITIZE_SPECIAL_CHARS);
    $phone = $_POST["phone"];

    if (empty($email) || empty($password)) {
        $errors[] = "Both email and password are required.";
    }

    // Additional validation for email, password, and other fields here.

    if (empty($errors)) {
        // Hash the password
       

        // Use a prepared statement to insert data
        $sql = "INSERT INTO register (email, password, name, address, phone) VALUES (?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssss", $email, $password, $name, $address, $phone);

        if ($stmt->execute()) {
            header("Location: reg_success.php");
            exit; // Ensure script execution stops here
        } else {
            echo "Registration failed. Please try again later.";
        }

        $stmt->close();
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phyo's Galaxy Network</title>
    <style>
        body {
            background: url("images/save.jpg") no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            max-width: 600px;
            background: rgba(0, 0, 0, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            color: #fff;
            text-align: center;
            padding: 30px;
        }

        .container header {
            font-size: 30px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .input-box {
            margin-bottom: 20px;
            position: relative;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            border: none;
            border-bottom: 2px solid #FFA500;
            background: transparent;
            color: #fff;
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
            top: 15px;
            left: 5px;
            color: #FFA500;
            font-size: 24px;
        }

        .submit {
            background: #FFA500;
            color: #000;
            border: none;
            border-radius: 30px;
            padding: 10px 20px;
            font-size: 18px;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }

        .submit:hover {
            background: #ff7f00;
            transform: scale(1.05);
        }

        .top span {
            font-size: 16px;
        }

        .top a {
            color: #FFA500;
            text-decoration: none;
            font-weight: 600;
            margin-left: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>Sign Up</header>
        <form action="" method="POST">
            <div class="input-box">
                <i class="bx bx-envelope"></i>
                <input type="text" class="input-field" name="email" placeholder="Email">
            </div>
            <div class="input-box">
                <i class="bx bx-lock-alt"></i>
                <input type="password" class="input-field" name="password" placeholder="Password">
            </div>
            <div class="input-box">
                <i class="bx bx-envelope"></i>
                <input type="text" class="input-field" name="name" placeholder="name">
            </div>
            <div class="input-box">
                <i class="bx bx-envelope"></i>
                <input type="text" class="input-field" name="address" placeholder="address">
            </div>
            <div class="input-box">
                <i class="bx bx-envelope"></i>
                <input type="text" class="input-field" name="phone" placeholder="phone">
            </div>

            <div class="input-box">
                <input type="submit" class="submit" name="register" value="Register">
            </div>
        </form>
        <div class="top">
            <span>Have an account? <a href="login.php" onclick="login()">Login</a></span>
        </div>
    </div>
</body>
</html>
