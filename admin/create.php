<?php
error_reporting(E_ALL);
include("connection.php");

// Create 'items' table if not exists
$sql = "CREATE TABLE IF NOT EXISTS items (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    img VARCHAR(255) NOT NULL,
    prod_no VARCHAR(50) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    end_date DATE NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'items' created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close the connection after table creation
$conn->close();
?>
g
<?php
error_reporting(E_ALL);
include("connection.php");

if (isset($_POST['sub'])) {
    $img = $_FILES['img']['name'];
    $prod_no = $_POST['prod_no'];
    $price = $_POST['price'];
    $end_date = $_POST['end_date'];

    // Use mysqli for database interaction
    $qry = "INSERT INTO items (img, prod_no, price, end_date) VALUES ('$img', '$prod_no', '$price', '$end_date')";
    $result = mysqli_query($conn, $qry) or die("Save items query fail.");

    if ($result) {
        // Create the directory if it doesn't exist
        $uploadDir = "up_images/";
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir);
        }

        // Move the uploaded file to the specified directory
        $targetPath = $uploadDir . $img;
        move_uploaded_file($_FILES['img']['tmp_name'], $targetPath);
        
        $err = "<font size='+2'>Item inserted successfully</font>";
    } else {
        echo "Item is not inserted";
    }
}

// Close the connection after database interaction
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Add Item</title>
    <style>
        /* Add your custom styles here */
        body {
            background-color: #f8f9fa;
            padding: 20px;
        }
        .form-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        .two{
            margin-left: ;
        }
    </style>
</head>
<body>

<div class="container form-container">
    <h2 class="mb-4">Add Item</h2>
    <form method="post" action="" enctype="multipart/form-data">
        <div class="form-group">
            <label for="img">Upload Image:</label>
            <input type="file" class="form-control-file" id="img" name="img" accept="image/*" required>
            <small class="form-text text-muted">Please choose an image file (JPEG, PNG, GIF).</small>
        </div>

        <div class="form-group">
            <label for="prod_no">Product Number:</label>
            <input type="text" class="form-control" id="prod_no" name="prod_no" required>
        </div>
        <div class="form-group">
            <label for="price">Price (ETH):</label>
            <input type="text" class="form-control" id="price" name="price" required>
        </div>
        <div class="form-group">
            <label for="end_date">End Date:</label>
            <input type="date" class="form-control" id="end_date" name="end_date" required>
        </div>

        <div class="row">
            <div class="col-md-6">
                <a href="index.php" class="btn btn-secondary btn-block">Back</a>
            </div>
            <div class="col-md-6">
                <button type="submit" name="sub" class="btn btn-primary btn-block" id="two">Add Item</button>
            </div>
        </div>
    </form>
</div>





<!-- Add Bootstrap JS and Popper.js scripts -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
