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
        .pagination {
            display: inline-block;
        }

        .pagination a {
            color: #007BFF;
            padding: 8px 16px;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #007BFF;
            border-radius: 4px;
            margin: 0 4px;
        }

        .pagination a:hover {
            background-color: #007BFF;
            color: #fff;
        }

        .pagination .current {
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

        .create-btn {
            background-color: #28a745;
            /* Green */
            color: white;
        }

        .delete-btn {

            background-color: #dc3545;
            /* Red */
            color: black;

        }

        .item {
            height: 400px;
            /* Set a fixed height for each item div */
            overflow: hidden;
            /* Hide any content that exceeds the fixed height */
        }

        .item img {
            width: 100%;
            /* Make sure the image takes up 100% of the div width */
            height: auto;
            /* Maintain the image's aspect ratio */
            display: block;
            /* Remove any extra spacing below the image */
            margin: 0 auto;
            /* Center the image horizontally */
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
            <nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="index.html">Phyo's Network Live</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a href='logout.php' class='btn btn-primary d-lg-block d-none me-2'><i class='fas fa-user'></i> Admin</a>";
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
// Your PHP code here...
?>


<?php
error_reporting(1);
// Include your database connection file
include("connection.php");

// Number of results to show per page
$records_per_page = 5;

// Check if a page number is specified in the URL, or set it to the first page
if (isset($_GET['page']) && is_numeric($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 1;
}

// Calculate the starting point for the results to display
$start_from = ($page - 1) * $records_per_page;

// Select values from the "review" table using MySQLi with LIMIT for pagination
$query = "SELECT * FROM review LIMIT $start_from, $records_per_page";
$result = mysqli_query($conn, $query);

// Check if the query was successful
if ($result) {
    echo '<html>
        <head>
            <style>
                .container {
                    width: 80%;
                    margin: 0 auto;
                    text-align: center;
                }
                table {
                    width: 100%;
                    border-collapse: collapse;
                }
                table, th, td {
                    border: 1px solid black;
                }
                th, td {
                    padding: 10px;
                    text-align: left;
                }
                th {
                    background-color: #007BFF;
                    color: white;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h2>Admin Feedback</h2>
                <table>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Suggestion</th>
                    </tr>';

    while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['name'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['mobile'] . '</td>';
        echo '<td>' . $row['suggestion'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';

    // Add a delete button for the table
    echo '<form action="delete_table.php" method="post">';
   
    echo '</form>';

    // Pagination links
    $query = "SELECT COUNT(*) as total_records FROM review";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $total_records = $row['total_records'];
    $total_pages = ceil($total_records / $records_per_page);

    if ($total_pages > 1) {
        echo '<div class="pagination">';
        for ($i = 1; $i <= $total_pages; $i++) {
            echo '<a href="feedback.php?page=' . $i . '">' . $i . '</a> ';
        }
        echo '</div>';
    }

    echo '</div>
        </body>
        </html>';
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
<style>
    .pagination {
        display: inline-block;
    }

    .pagination a {
        color: #007BFF;
        padding: 8px 16px;
        text-decoration: none;
        background-color: #fff;
        border: 1px solid #007BFF;
        border-radius: 4px;
        margin: 0 4px;
    }

    .pagination a:hover {
        background-color: #007BFF;
        color: #fff;
    }

    .pagination .current {
        background-color: #007BFF;
        color: #fff;
    }
</style>
