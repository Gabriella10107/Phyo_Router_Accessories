<?php
// Assuming order_sent.php is the correct file name
error_reporting(1);
session_start();
include("connection.php");

// Retrieve order number from the URL
$orderNo = $_GET['order_no'];

// Fetch order details from the database based on the order number using a prepared statement
$queryGetOrderDetails = "SELECT * FROM orders WHERE order_no = ?";
$stmt = mysqli_prepare($conn, $queryGetOrderDetails);
mysqli_stmt_bind_param($stmt, "s", $orderNo);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);
$orderDetails = mysqli_fetch_assoc($result);

// Check if order details are found
if (!$orderDetails) {
    // Handle the case where order details are not found
    echo "Order details not found.";
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            max-width: 600px;
            margin: auto;
            padding: 20px;
            background-color: #343a40;
            color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 50px;
        }

        h2 {
            text-align: center;
            color: #007bff;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }

        .go-to-homepage-btn {
            display: block;
            margin-top: 20px;
            text-align: center;
        }

        .go-to-homepage-btn a {
            text-decoration: none;
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .go-to-homepage-btn a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

    <!-- Your HTML content here -->
    <div class="container">
        <h2>Order Confirmation</h2>

        <!-- Display order details -->
        <p>Thank you for your order! Your order details:</p>
        <ul>
            <li><strong>Order Number:</strong> <?php echo $orderDetails['order_no']; ?></li>
            <li><strong>Full Name:</strong> <?php echo $orderDetails['fullName']; ?></li>
            <li><strong>Email:</strong> <?php echo $orderDetails['email']; ?></li>
            <!-- Add more order details as needed -->
        </ul>

        <!-- Go to homepage button -->
        <div class="go-to-homepage-btn">
            <a href="index.php">Go to Homepage</a>
        </div>
    </div>

    <!-- Add your footer content here -->
    <!-- ... -->

</body>
</html>
