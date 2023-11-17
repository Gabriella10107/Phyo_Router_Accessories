<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;        
        }

        th, td {

            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        } 

        th {
            background-color: #f2f2f2;
        }

        .delete-btn {
            background-color: #f44336;
            color: white;
            padding: 10px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
</head>
<body>
<?php
// Connect to your database (replace with your actual database credentials)
error_reporting(E_ALL);
include("connection.php");

// Handle delete requests
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["delete_id"])) {
    $delete_id = $_POST["delete_id"];

    // Perform the deletion query (replace 'items' with your actual table name)
    $delete_query = "DELETE FROM items WHERE id = $delete_id";
    if ($conn->query($delete_query) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Fetch data from the database
$sql = "SELECT id, img, prod_no, price, end_date FROM items";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>ID</th><th>Image</th><th>Product Number</th><th>Price</th><th>End Date</th><th>Action</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td><img src='" . $row["img"] . "' alt='Product Image' style='max-width: 100px; max-height: 100px;'></td>";
        echo "<td>" . $row["prod_no"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "<td>" . $row["end_date"] . "</td>";
        echo "<td>
                <form method='post' action='".$_SERVER["PHP_SELF"]."'>
                    <input type='hidden' name='delete_id' value='" . $row["id"] . "'>
                    <button type='submit' class='delete-btn'>Delete</button>
                </form>
              </td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>


</body>
</html>
