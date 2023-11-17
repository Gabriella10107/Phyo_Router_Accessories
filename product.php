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

            <?php 
                session_start();
                if (isset($_SESSION['email']) && isset($_SESSION['password'])) {
                    echo "<a href='profile.php' class='btn btn-primary d-lg-block d-none me-2'><i class='fas fa-user'></i> My Account</a>";
                } else {
                    echo "
                    <a class='btn btn-primary me-2' href='register.php'>Register</a>
                    <a class='btn btn-success' href='login.php'>Login</a>
                    ";
                }
            ?>
        </div>
    </div>
</nav>

  <!-- ***** Header Area End ***** -->

  <div class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Liberty NFT Market</h6>
          <h2>Discover Some Top Items</h2>
          <span><a href="#">Home </a> >>==<a href="#">Explore</a></span>
        </div>
      </div>
    </div>
    <div class="featured-explore">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="owl-features owl-carousel">
              <div class="item">
                <div class="thumb">
                  <img src="images/Simple.jpg" alt="" style="border-radius: 20px;">
                  <div class="hover-effect">
                    <div class="content">
                      <h4>Triple Mutant Ape Bored</h4>
                      <span class="author">
                        <img src="images/Simple.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="images/new.jpg" alt="" style="border-radius: 20px;">
                  <div class="hover-effect">
                    <div class="content">
                      <h4>Bored Ape Kennel Club</h4>
                      <span class="author">
                        <img src="images/new.jpg" alt="" style="width: 50px; height: 50px; border-radius: 50%;">
                        <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="images/Linksys WRT32x AC3200.png" alt="" style="border-radius: 20px;height: 274px;width: 500px;">
                  <div class="hover-effect">
                    <div class="content">
                      <h4>Genesis Club by KMT</h4>
                      <span class="author">
                        <img src="images/Linksys WRT32x AC3200.png" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="thumb">
                  <img src="images/Support mic Waterproof POE Mini Security IP Camera.jpg" alt="" style="border-radius: 20px;height: 280px;">
                  <div class="hover-effect">
                    <div class="content">
                      <h4>Crypto Aurora Guy</h4>
                      <span class="author">
                        <img src="images/Support mic Waterproof POE Mini Security IP Camera.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                        <h6>Liberty Artist<br><a href="#">@libertyart</a></h6>
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="discover-items">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="section-heading">
            <div class="line-dec"></div>
            <h2>Discover Some Of Our <em>Items</em>.</h2>
          </div>
        </div>
        <div class="col-lg-7">
          <form id="search-form" name="gs" method="submit" role="search" action="#">
            <div class="row">
              <div class="col-lg-4">
                <fieldset>
                    <input type="text" name="keyword" class="searchText" placeholder="Type Something..." autocomplete="on" required>
                </fieldset>
              </div>
              <div class="col-lg-3">
                <fieldset>
                    <select name="Category" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                        <option selected>All Categories</option>
                        <option type="checkbox" name="option1" value="Music">Music</option>
                        <option value="Digital">Digital</option>
                        <option value="Blockchain">Blockchain</option>
                        <option value="Virtual">Virtual</option>
                    </select>
                </fieldset>
              </div>
              <div class="col-lg-3">
                <fieldset>
                    <select name="Price" class="form-select" aria-label="Default select example" id="chooseCategory" onchange="this.form.click()">
                        <option selected>Available</option>
                        <option value="Ending-Soon">Ending Soon</option>
                        <option value="Coming-Soon">Coming Soon</option>
                        <option value="Closed">Closed</option>
                    </select>
                </fieldset>
              </div>
              <div class="col-lg-2">                        
                <fieldset>
                    <button class="main-button">Search</button>
                </fieldset>
              </div>
            </div>
          </form>
        </div>
        <div class="col-lg-6">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="banner">Double Item</span>
              </div>
              <div class="col-lg-6 col-sm-6">
                <span class="author">
                  <img src="images/SANNCE 8CH HD-TVI 1080N .jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/SANNCE 8CH HD-TVI 1080N .jpg" alt="" style="border-radius: 20px;height:280px;">
                <h4>Mutant Ape Bored</h4>
              </div>
              <div class="col-lg-6 col-sm-6">
                <span class="author">
                  <img src="images/Support mic Waterproof POE Mini Security IP Camera.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Support mic Waterproof POE Mini Security IP Camera.jpg" alt="" style="border-radius: 20px;">
                <h4>His Other Half</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-lg-3 col-sm-6">
                    <span>Current Bid: <br> <strong>8.16 ETH</strong></span>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <span>Category: <br> <strong>Digital Art</strong></span>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <span>Collection:: <br> <strong>2/2</strong></span>
                  </div>
                  <div class="col-lg-3 col-sm-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/Gaming_Router.jpg" alt="" style="max-width: 50px; height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Gaming_Router.jpg" alt="" style="border-radius: 20px;height:260px; ">
                <h4>Genesis Meta Boom</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>5.15 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>26th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>login_check.php
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/Asus Debuts Wi-Fi 7.jpg" alt="" style="max-width: 50px; height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Asus Debuts Wi-Fi 7.jpg" alt="" style="border-radius: 20px;height:260px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>3.63 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>24th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/Mercusys MR70X Router.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Mercusys MR70X Router.jpg" alt="" style="border-radius: 20px;">
                <h4>Pixel Sand Box</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>28th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/roo.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/roo.jpg" alt="" style="border-radius: 20px;height: 254px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/Mercusys MW325R 300 Mbps Wireless N.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Mercusys MW325R 300 Mbps Wireless N.jpg" alt="" style="border-radius: 20px;">
                <h4>Pixel Sand Box</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>28th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/TP LINK 886 Wireless Router.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/TP LINK 886 Wireless Router.jpg" alt="" style="border-radius: 20px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>




        
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/line.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/line.jpg" alt="" style="border-radius: 20px;height:246px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>



        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/TPLINK WR841N .jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/TPLINK WR841N .jpg" alt="" style="border-radius: 20px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>





        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/Totolink N302R+ 300 Mbps Ethernet Single-Band Wi-Fi Router.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Totolink N302R+ 300 Mbps Ethernet Single-Band Wi-Fi Router.jpg" alt="" style="border-radius: 20px;">
                <h4>Pixel Sand Box</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>28th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/Switch_Glass.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Switch_Glass.jpg" alt="" style="border-radius: 20px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>





        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/UCOCARE Spy.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/UCOCARE Spy.jpg" alt="" style="border-radius: 20px;height:200px;">
                <h4>Pixel Sand Box</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>28th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/Imou WiFi Security Camera.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Imou WiFi Security Camera.jpg" alt="" style="border-radius: 20px;height:200px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>





        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/Tapo Mini Smart Security.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Tapo Mini Smart Security.jpg" alt="" style="border-radius: 20px;height:218px;">
                <h4>Pixel Sand Box</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>28th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/public safety CCTV.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/public safety CCTV.jpg" alt="" style="border-radius: 20px;height:220px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>




        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/OEM HIK 2MP 4MP 6MP 8MP Bullet .jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/OEM HIK 2MP 4MP 6MP 8MP Bullet .jpg" alt="" style="border-radius: 20px;">
                <h4>Pixel Sand Box</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>4.68 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>28th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/Support mic Waterproof POE Mini Security IP Camera.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/Support mic Waterproof POE Mini Security IP Camera.jpg" alt="" style="border-radius: 20px;">
                <h4>Another Half Ape</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                  <a href="login_check.php">View Details</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="item">
            <div class="row">
              <div class="col-lg-12">
                <span class="author">
                  <img src="images/CCTV Security 4MP.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/CCTV Security 4MP.jpg" alt="" style="border-radius: 20px;">
                <h4>Invisible NFT Land</h4>
              </div>
              <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                  <div class="col-6">
                    <span>Current Bid: <br> <strong>2.03 ETH</strong></span>
                  </div>
                  <div class="col-6">
                    <span>Ends In: <br> <strong>25th Nov</strong></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-12">
                <div class="main-button">
                 <a href="product_order.php?img=your_image_filename.jpg&name=Product Name&price=Your Price">View Details</a>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3">
    <div class="item">
        <div class="row">
            <div class="col-lg-12">
                <span class="author">
                    <img src="images/DH IPC-HDW1431S 4MP WDR IR Mini Dome.jpg" alt="" style="max-width: 50px; max-height: 50px; border-radius: 50%;">
                </span>
                <img src="images/DH IPC-HDW1431S 4MP WDR IR Mini Dome.jpg" alt="" style="border-radius: 20px;">
                <h4>Another Half Ape</h4>
            </div>
            <div class="col-lg-12">
                <div class="line-dec"></div>
                <div class="row">
                    <div class="col-6">
                        <span>Current Bid: <br> <strong>2.64 ETH</strong></span>
                    </div>
                    <div class="col-6">
                        <span>Ends In: <br> <strong>25th Nov</strong></span>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="main-button">
                    <a href="product_order.php?img=your_image_filename.jpg">View Details</a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
error_reporting(1);
include("connection.php");

// Assuming $conn is your MySQLi connection
$result = mysqli_query($conn, "SELECT * FROM items");

while ($arr = mysqli_fetch_array($result)) {
    echo "<div class='col-lg-3'>
              <div class='item'>
                <div class='row'>
                  <div class='col-lg-12'>
                    <span class='author'>
                      <img src='admin/up_images/{$arr['img']}' alt='no image' style='max-width: 50px; max-height: 50px; border-radius: 50%;'>
                    </span>
                    <img src='admin/up_images/{$arr['img']}' alt='no image' style='border-radius: 20px;'>
                    <h4>{$arr['prod_no']}</h4>
                  </div>
                  <div class='col-lg-12'>
                    <div class='line-dec'></div>
                    <div class='row'>
                      <div class='col-6'>
                        <span>Current Bid: <br> <strong>{$arr['price']} ETH</strong></span>
                      </div>
                      <div class='col-6'>
                        <span>Ends In: <br> <strong>{$arr['end_date']}</strong></span>
                      </div>
                    </div>
                  </div>
                  <div class='col-lg-12'>
                    <div class='main-button'>
                       <a href='product_order.php?id={$arr['id']}&img={$arr['img']}&price={$arr['price']}'>View Details</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>";
}
?>

          </div>
        </div>
      </div>
    </div>
  </div>
  


   



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
