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
