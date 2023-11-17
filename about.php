<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" />
    <!-- Google web font "Open Sans" -->
    <link rel="stylesheet" href="css/all.min.css" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/templatemo-style.css" />
    <title>Sided Bootstrap 4 Theme</title>


    <!-- CSS FILES -->        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;400;700&display=swap" rel="stylesheet">
                
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/templatemo-festava-live.css" rel="stylesheet">
     <link rel="icon" href="images/wifi_logo.png" type="image/png" sizes="16x16">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">



     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
<style>
 
    .navbar {
        background-color: black;
    }

    .ppp {
    background-image: url('images/background.jpg');
    background-position: auto;
    background-size: 100%;
    background-repeat: no-repeat;
    background-mini-size: 100%;
    background-attachment: fixed;
    background-repeat: no-repeat;
}

/* Reset margin and padding for the navbar and its children */
.navbar,
.navbar-collapse,
.navbar-toggler {
    margin: 0;
    padding: 0;
}

/* Reset margin and padding for the body */
body {
    margin: 0;
    padding: 0;
}


</style>
  </head>
<!--

Sided Template
https://templatemo.com/tm-527-sided
-->


 

  <body>


          <header class="site-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-person custom-icon me-2"></i>
                        <strong class="text-dark">Welcome to Phyo's Galaxy Network</strong>
                    </p>
                </div>
            </div>
        </div>
    </header>

    <!-- Navbar from the first code -->
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


    <div class="ppp">
      <!-- Logo & Intro -->
      <section id="logo" class="tm-section-logo">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12 offset-sm-0 col-md-6 offset-md-6">
              <div class="tm-site-name-container">
                <div class="tm-site-name-container-inner">
                  <h1 class="text-uppercase tm-text-primary tm-site-name">
                    Sided
                  </h1>
                  <p class="tm-text-primary tm-site-description">
                    new theme just for you
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- Section 2 -->
      <section id="section_7" class="tm-section-4">
        <div class="container-fluid">
          <div class="row">
            <div
              class="col-md-12 col-lg-6 tm-section-image-container tm-img-left-container"
            >
              <img src="images/Support mic Waterproof POE Mini Security IP Camera.jpg" alt="Image" class="img-fluid" />
            </div>
            <div class="col-md-12 col-lg-6 pl-lg-0">
              <div class="tm-section-text-container-3 tm-bg-gray h-100">
                <h2 class="tm-section-title-mb">Fusce metus mauris</h2>
                <hr class="tm-hr-mb" />
                <p class="tm-p-mb">
                  Suspendisse ultricies scelerisque tellus, id sollicitudin
                  magna aliquet porttitor. Orci varius natoque penatibus et
                  magnis dis parturient montes, nascetur ridiculus mus. Quisque
                  pharetra mauris in libero.
                </p>
                <div class="text-right">
                  <a href="#section_1" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


      <!-- Section 1 -->
      <section id="section_1" class="tm-p-2-section-1 tm-sm-bg-blue">
        <div class="container-fluid">
          <div class="row flex-column-reverse flex-lg-row">
            <div class="col-md-12 col-lg-6 tm-text-left-container">
              <div class="tm-section-text-container-3 tm-bg-white-alpha h-100">
                <h2 class="tm-section-title-mb">Vivamus dignissim dui ac</h2>
                <hr class="tm-hr-mb" />
                <p class="tm-p-mb">
                  Sided Template has 3 HTML pages. <a href="index.html">Index</a>, <a href="page-2.html">Page 2</a> and <a href="page-3.html">Page 3</a>.
                  This is Bootstrap v4.2.1 layout. You may visit <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo page</a> for latest updates. Thank you.
                </p>
                <div class="text-right">
                  <a href="#section_2" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
            <div
              class="col-md-12 col-lg-6 tm-section-image-container tm-img-right-container"
            >
              <img
                src="images/Linksys WRT32x AC3200.png"
                alt="Image" 
                class="img-fluid tm-img-right"
              />
            </div>
          </div>
        </div>
      </section>

      <!-- Section 2 -->
      <section id="section_2" class="tm-section-4">
        <div class="container-fluid">
          <div class="row">
            <div
              class="col-md-12 col-lg-6 tm-section-image-container tm-img-left-container"
            >
              <img src="images/new.jpg" alt="Image" style="height: 500px;" class="img-fluid" />
            </div>
            <div class="col-md-12 col-lg-6 pl-lg-0">
              <div class="tm-section-text-container-3 tm-bg-gray h-100">
                <h2 class="tm-section-title-mb">Fusce metus mauris</h2>
                <hr class="tm-hr-mb" />
                <p class="tm-p-mb">
                  Suspendisse ultricies scelerisque tellus, id sollicitudin
                  magna aliquet porttitor. Orci varius natoque penatibus et
                  magnis dis parturient montes, nascetur ridiculus mus. Quisque
                  pharetra mauris in libero.
                </p>
                <div class="text-right">
                  <a href="#section_3" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


       <!-- Section 3 -->
      <section id="section_3" class="tm-p-2-section-1 tm-sm-bg-blue">
        <div class="container-fluid">
          <div class="row flex-column-reverse flex-lg-row">
            <div class="col-md-12 col-lg-6 tm-text-left-container">
              <div class="tm-section-text-container-3 tm-bg-white-alpha h-100">
                <h2 class="tm-section-title-mb">Vivamus dignissim dui ac</h2>
                <hr class="tm-hr-mb" />
                <p class="tm-p-mb">
                  Sided Template has 3 HTML pages. <a href="index.html">Index</a>, <a href="page-2.html">Page 2</a> and <a href="page-3.html">Page 3</a>.
                  This is Bootstrap v4.2.1 layout. You may visit <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo page</a> for latest updates. Thank you.
                </p>
                <div class="text-right">
                  <a href="#section_4" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
            <div
              class="col-md-12 col-lg-6 tm-section-image-container tm-img-right-container"
            >
              <img
                src="images/Tapo Mini Smart Security.jpg"
                alt="Image" style="height: 500px;"
                class="img-fluid tm-img-right"
              />
            </div>
          </div>
        </div>

         <!-- Section 4 -->
      
<!-- Section 2 -->
      <section id="section_4" class="tm-section-4">
        <div class="container-fluid">
          <div class="row">
            <div
              class="col-md-12 col-lg-6 tm-section-image-container tm-img-left-container"
            >
              <img src="images/Pix-Link WR09 network wifi 300M router.jpg" alt="Image" class="img-fluid" />
            </div>
            <div class="col-md-12 col-lg-6 pl-lg-0">
              <div class="tm-section-text-container-3 tm-bg-gray h-100">
                <h2 class="tm-section-title-mb">Fusce metus mauris</h2>
                <hr class="tm-hr-mb" />
                <p class="tm-p-mb">
                  Suspendisse ultricies scelerisque tellus, id sollicitudin
                  magna aliquet porttitor. Orci varius natoque penatibus et
                  magnis dis parturient montes, nascetur ridiculus mus. Quisque
                  pharetra mauris in libero.
                </p>
                <div class="text-right">
                  <a href="#section_5" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>


         <!-- Section 5 -->
      <section id="section_5" class="tm-p-2-section-1 tm-sm-bg-blue">
        <div class="container-fluid">
          <div class="row flex-column-reverse flex-lg-row">
            <div class="col-md-12 col-lg-6 tm-text-left-container">
              <div class="tm-section-text-container-3 tm-bg-white-alpha h-100">
                <h2 class="tm-section-title-mb">Vivamus dignissim dui ac</h2>
                <hr class="tm-hr-mb" />
                <p class="tm-p-mb">
                  Sided Template has 3 HTML pages. <a href="index.html">Index</a>, <a href="page-2.html">Page 2</a> and <a href="page-3.html">Page 3</a>.
                  This is Bootstrap v4.2.1 layout. You may visit <a rel="nofollow" href="https://www.facebook.com/templatemo">templatemo page</a> for latest updates. Thank you.
                </p>
                <div class="text-right">
                  <a href="#section_7" class="btn btn-primary">Read More</a>
                </div>
              </div>
            </div>
            <div
              class="col-md-12 col-lg-6 tm-section-image-container tm-img-right-container"
            >
              <img
                src="images/background.jpg" 
                alt="Image" style="height: 500px;"
                class="img-fluid tm-img-right"
              />
            </div>
          </div>
        </div>

    </div>
    <!-- /.columns-bg -->
  </body>
</html>
