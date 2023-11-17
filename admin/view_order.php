<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Liberty NFT Marketplace - Explore Listing Page</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min2.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="css/fontawesome.css">
    <link rel="stylesheet" href="css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/bootstrap-icons.css" rel="stylesheet">
    <link href="css/templatemo-festava-live.css" rel="stylesheet">
    <link rel="icon" href="images/wifi_logo.png" type="image/png" sizes="16x16">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- Your custom styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h2 {
            text-align: center;
            color: #333;
            padding: 20px 0;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th,
        td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }

        .navbar {
            background-color: black;
        }

        .ppp {
            background-image: url('images/roo.jpg');
            background-position: auto;
            background-size: 100%;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }
    </style>
</head>

<body class="">
    <main>
        <header class="site-header">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-person custom-icon me-2"></i>
                            <strong class="text-dark">Networking Routers & Cables 2023</strong>
                        </p>
                    </div>
                </div>
            </div>
        </header>
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="index.html">Phyo's Network Live</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav align-items-lg-center ms-auto me-lg-5">
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="product.php">Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="services.php">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link click-scroll" href="feedback.php">Feedback</a>
                        </li>
                        <li class="nav-item">
                            <a href='logout.php' class='btn btn-primary d-lg-block d-none me-2'><i
                                    class='fas fa-user'></i> Admin</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Your PHP code and HTML content here -->
    </main>
</body>

</html>
<?php
// Include your database connection file
include("connection.php");

// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Fetch orders from the database
$query = "SELECT * FROM orders";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- ... (rest of your HTML code) -->

<body>

    <h2>Admin - Orders</h2>

    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Order Number</th>
            <th>Selected Image</th>
            <th>Price</th>
            <th>Created At</th>
        </tr>

        <?php
        // Loop through each row in the result set
        while ($row = mysqli_fetch_assoc($result)) {
            echo '<tr>';
            echo '<td>' . $row['id'] . '</td>';
            echo '<td>' . $row['fullName'] . '</td>';
            echo '<td>' . $row['email'] . '</td>';
            echo '<td>' . $row['address'] . '</td>';
            echo '<td>' . $row['order_no'] . '</td>';
            echo '<td>' . $row['selectedImage'] . '</td>';
            echo '<td>' . $row['price'] . '</td>';
            echo '<td>' . $row['created_at'] . '</td>';
            echo '</tr>';
        }
        ?>

    </table>

</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
