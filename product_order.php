<?php
error_reporting(1);
session_start();
$i=$_REQUEST['img'];
$_SESSION['sid']=$_POST['id'];
include("connection.php");
$i=$_REQUEST['img'];
if($_POST['ord'])
{ 
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$fullName=$_POST['fullName'];
$email=$_POST['email'];
$address=$_POST['address'];
$ordno=ord.rand(100,500);
if(mysql_query("insert into orders(firstName,lastName,fullname,email,address,order_no) values('$firstName','$lastName','$fullName','$email','$address','$ordno')"))
{
//echo "<script>location.href='ordersent.php?prod'</script>";
header("location:order_sent.php?order_no=$ordno");  }
else {$error= "user already exists";}}

?>



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
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">
     <link rel="icon" href="images/wifi_logo.png" type="image/png" sizes="16x16">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
<style>
 navbar {
        background-color: black;
    }

    .ppp {
    background-image: url('images/roo.jpg');
    background-position: auto;
    background-size: 100%;
    background-attachment: fixed;
    background-repeat: no-repeat;
}

/* Custom styles for the contact form */
.container {
   
    background-position: center;
    background-size: cover;
    padding: 40px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
}

form {
    background-color: rgba(255, 255, 255, 0.9);
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    max-width: 600px; /* Center the form and limit its width */
    margin: 0 auto;
}

form h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #333;
}

form .form-label {
    font-weight: bold;
    font-size: 18px;
    color: #333;
}

form .form-control {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
    margin-bottom: 20px;
    width: 100%;
    font-size: 16px;
    color: #555;
}

form button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 12px 24px;
    cursor: pointer;
    transition: background-color 0.3s ease;
    font-size: 18px;
}

form button:hover {
    background-color: #0056b3;
}


</style>
  </head>

<body class="">

  <!-- ***** Preloader Start ***** -->
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
        <a class="navbar-brand" href="index.html">
            Festava Live
        </a>
    
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
                    <a class="nav-link click-scroll" href="product.html">Product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link click-scroll" href="feedback.php">Feedback</a>
                </li>
            </ul>
    
            
        </div>
    </div>
</nav>


<main>
    <div class="container p-4 p-md-5 mb-4 text-white rounded bg-dark ppp">
        <h2 class="display-5">Contact Us</h2>
        <form action="#" method="POST">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="fullName" class="form-label">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phoneNumber" class="form-label">Phone Number</label>
                        <input type="tel" class="form-control" id="phoneNumber" name="phoneNumber" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="col-md-12">
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</main>


  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <p>Copyright © 2022 <a href="#">Liberty</a> NFT Marketplace Co., Ltd. All rights reserved.
          &nbsp;&nbsp;
          Designed by <a title="HTML CSS Templates" rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min2.js"></script>

  <script src="js/isotope.min.js"></script>
  <script src="js/owl-carousel.js"></script>

  <script src="js/tabs.js"></script>
  <script src="js/popup.js"></script>
  <script src="js/custom2.js"></script>





  </body>
</html>

