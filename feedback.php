<?php
session_start();
include("connection.php");

// Check if the "review" table exists, and create it if not
$tableCheckQuery = "SHOW TABLES LIKE 'review'";
$tableExists = $conn->query($tableCheckQuery);

if ($tableExists->num_rows == 0) {
    $createTableQuery = "CREATE TABLE review (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(255),
        email VARCHAR(255),
        password VARCHAR(255),
        mobile VARCHAR(15),
        suggestion TEXT
    )";

    if ($conn->query($createTableQuery) === TRUE) {
        echo "Table 'review' created successfully.";
    } else {
        echo "Error creating table: " . $conn->error;
    }
}

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT); // Hash the password
    $mobile = $_POST['mobile'];
    $suggestion = $_POST['suggestion'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO review (name, email, password, mobile, suggestion) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email, $hashedPassword, $mobile, $suggestion);

    if ($stmt->execute()) {
        // Redirect to a success page or wherever you want
        header("Location: success.html");
        exit;
    } else {
        // Display a general error message
        $error = "Error submitting the form. Please try again later.";
    }

    // Close the prepared statement
    $stmt->close();
}

// Rest of your HTML/PHP code for displaying the form goes here
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Phyo's Network Live - Login Form</title>

        <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!--

TemplateMo 583 Festava Live

https://templatemo.com/tm-583-festava-live

-->

    </head>
    
    <body>

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

                   <nav class="navbar navbar-expand-lg bg-dark">
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
                    <a class="nav-link click-scroll" href="about.php">About</a>
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
           </ul>
        </div>
    </div>
</nav>




            <section class="ticket-section section-padding">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-10 mx-auto">
                            <form class="custom-form ticket-form mb-5 mb-lg-0" action="#" method="post" role="form">
                                <h2 class="text-center mb-4">Get started here</h2>

                                <div class="ticket-form-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="name" id="ticket-form-name" class="form-control" placeholder="Username" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="text" name="password" id="ticket-form-name" class="form-control" placeholder="password" required>
                                        </div>

                                        <div class="col-lg-6 col-md-6 col-12">
                                            <input type="email" name="email" id="ticket-form-email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email address" required>
                                        </div>
                                    </div>
                    
                                    <div class="col-lg-6 col-md-6 col-12">
            <input type="text" name="mobile" id="ticket-form-mobile" class="form-control" placeholder="Mobile Number" required>
        </div>


                                    <h6>Suggestion</h6>
                                    </div>

                                   
                                    <textarea name="suggestion" rows="3" class="form-control" id="ticket-form-message" placeholder="Additional Request"></textarea>

                                    <div class="col-lg-4 col-md-10 col-8 mx-auto">
                                        <button type="submit" name="submit" class="form-control">Submit</button>
                                    </div>
                                </div>
                            </form>
                    </div>
                </div>
            </section>
        </main>


        <footer class="site-footer">
            <div class="site-footer-top">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <h2 class="text-white mb-lg-0">Festava Live</h2>
                        </div>

                        <div class="col-lg-6 col-12 d-flex justify-content-lg-end align-items-center">
                            <ul class="social-icon d-flex justify-content-lg-end">
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-twitter"></span>
                                    </a>
                                </li>
    
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-apple"></span>
                                    </a>
                                </li>
    
                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-instagram"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-youtube"></span>
                                    </a>
                                </li>

                                <li class="social-icon-item">
                                    <a href="#" class="social-icon-link">
                                        <span class="bi-pinterest"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

                       <div class="container">
                <div class="row">

                    <div class="col-lg-6 col-12 mb-4 pb-2">
                        <h5 class="site-footer-title mb-3">Links</h5>

                        <ul class="site-footer-links">
                            <li class="site-footer-link-item">
                                <a href="index.html" class="site-footer-link">Home</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="about.html" class="site-footer-link">About</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="#" class="site-footer-link">Product</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="services.html" class="site-footer-link">Services</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="contact.html" class="site-footer-link">Contact</a>
                            </li>

                            <li class="site-footer-link-item">
                                <a href="feedback.html" class="site-footer-link">Feedback</a>
                            </li>

                            <a href="login.html" class="btn custom-btn d-lg-block d-none">Login</a>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-12 mb-4 mb-lg-0">
                        <h5 class="site-footer-title mb-3">Have a question?</h5>

                        <p class="text-white d-flex mb-1">
                            <a href="tel: 090-080-0760" class="site-footer-link">
                                090-080-0760
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <a href="mailto:hello@company.com" class="site-footer-link">
                                hello@company.com
                            </a>
                        </p>
                    </div>

                    <div class="col-lg-3 col-md-6 col-11 mb-4 mb-lg-0 mb-md-0">
                        <h5 class="site-footer-title mb-3">Location</h5>

                        <p class="text-white d-flex mt-3 mb-2">
                        Silang Junction South, Tagaytay, Cavite, Philippines</p>

                        <a class="link-fx-1 color-contrast-higher mt-3" href="#">
                            <span>Our Maps</span>
                            <svg class="icon" viewBox="0 0 32 32" aria-hidden="true"><g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><circle cx="16" cy="16" r="15.5"></circle><line x1="10" y1="18" x2="16" y2="12"></line><line x1="16" y1="12" x2="22" y2="18"></line></g></svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-3 col-12 mt-5">
                            <p class="copyright-text">Copyright © 2036 Festava Live Company</p>
                        </div>

                        <div class="col-lg-8 col-12 mt-lg-5">
                            <ul class="site-footer-links">
                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">Terms &amp; Conditions</a>
                                </li>

                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">Privacy Policy</a>
                                </li>

                                <li class="site-footer-link-item">
                                    <a href="#" class="site-footer-link">Your Feedback</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

<!--

T e m p l a t e M o

-->
        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.sticky.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>