<?php 
require("../tools/function.php");
$tell = get_company('tell');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, viewport-fit=cover, shrink-to-fit=no">
    <meta name="description" content="Suha - Multipurpose Ecommerce Mobile HTML Template">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="theme-color" content="#100DD1">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- The above tags *must* come first in the head, any other head content must come *after* these tags -->
    <!-- Title -->
    <title>Suha - Multipurpose Ecommerce Mobile HTML Template</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <!-- Favicon -->
    <link rel="icon" href="img/icons/icon-72x72.png">
    <!-- Apple Touch Icon -->
    <link rel="apple-touch-icon" href="img/icons/icon-96x96.png">
    <link rel="apple-touch-icon" sizes="152x152" href="img/icons/icon-152x152.png">
    <link rel="apple-touch-icon" sizes="167x167" href="img/icons/icon-167x167.png">
    <link rel="apple-touch-icon" sizes="180x180" href="img/icons/icon-180x180.png">
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/brands.min.css">
    <link rel="stylesheet" href="css/solid.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- Web App Manifest -->
    <link rel="manifest" href="manifest.json">
  </head>
  <body>
    <!-- Preloader-->
    <div class="preloader" id="preloader">
      <div class="spinner-grow text-secondary" role="status">
        <div class="sr-only"></div>
      </div>
    </div>
    <!-- Header Area-->
    <div style="background: #2d3693;color: white" class="header-area" id="headerArea">
      <div class="container h-100 d-flex align-items-center justify-content-between rtl-flex-d-row-r">
        <!-- Back Button-->
        <div  class="back-button me-2"><a href="index.php">
          <i style="color: white" class="fa-solid fa-arrow-left-long"></i></a></div>
        <!-- Page Title-->
        <div class="page-heading">
          <h6 style="color:white" class="mb-0">Order Status</h6>
        </div>
        <!-- Navbar Toggler-->
        <div style="background: white;" class="suha-navbar-toggler ms-2" data-bs-toggle="offcanvas" data-bs-target="#suhaOffcanvas" aria-controls="suhaOffcanvas">
          <div><span></span><span></span><span></span></div>
        </div>
      </div>
    </div>
   <div style="background: #6abe45;" class="offcanvas offcanvas-start suha-offcanvas-wrap" tabindex="-1" id="suhaOffcanvas" aria-labelledby="suhaOffcanvasLabel">
      <!-- Close button-->
      <button class="btn-close btn-close-white" type="button" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      <!-- Offcanvas body-->
      <div class="offcanvas-body">
        <!-- Sidenav Profile-->
        <div class="sidenav-profile">
          <div class="user-profile"><img src="img/logo.png" alt=""></div>
          <div class="user-info">
            <h5 class="user-name mb-1 text-white">Aaran market</h5>
           
          </div>
        </div>
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav ps-0">
        
          <li><a href="settings.html"><i class="fa-solid fa-sliders"></i>My Order</a></li>
            <li><a href="lastorder.php"><i class="fa-solid fa-sliders"></i>Last Order</a></li>
              <li><a href="settings.html"><i class="fa-solid fa-sliders"></i>WhatsApp</a></li>
        </ul>
      </div>
    </div>
    <div class="my-order-wrapper" style="margin-top: -450px;">
      <div class="container">
        <div class="card">
          <div class="card-body p-4">
            <!-- Single Order Status-->
            <div class="single-order-status active">
              <div class="order-icon"><i class="fa-solid fa-bag-shopping"></i></div>
              <div class="order-text">
                <h6>Order placed</h6><span>2 Feb 2022 - 12:38 PM</span>
              </div>
              <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
            </div>
            <!-- Single Order Status-->
            <div class="single-order-status active">
              <div class="order-icon"><i class="fa-solid fa-box-open"></i></div>
              <div class="order-text">
                <h6>Product packaging</h6><span>3 Feb 2022</span>
              </div>
              <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
            </div>
        
        
            <!-- Single Order Status-->
            <div class="single-order-status active">
              <div class="order-icon"><i class="fa-solid fa-heart-circle-check"></i></div>
              <div class="order-text">
                <h6>Delivered</h6><span>Estimate: 7 Feb 2022</span>
              </div>
              <div class="order-status"><i class="fa-solid fa-circle-check"></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Internet Connection Status-->
    <div class="internet-connection-status" id="internetStatus"></div>
    <!-- Footer Nav-->
    <div style="background: #2d3693" class="footer-nav-area" id="footerNav">
      <div class="suha-footer-nav">
        <ul class="h-200 d-flex align-items-center justify-content-between ps-0 d-flex rtl-flex-d-row-r">


          <li><a href="https://wa.me/252<?php echo $tell?>"><i class="fa-brands fa-whatsapp"></i>Whatsapp</a></li>
          <li><a href="tel:<?php echo $tell?>"><i class="fa-solid fa-phone"></i>Call</a></li>
           <li>
            <a data="" href="salad.php" class="set_data">
              <span data="" class="cart-count">1</span>
              <i class="fa-solid fa-cart-shopping"></i>
         
         </a></li>
         
        </ul>
      </div>
    </div>
    <!-- All JavaScript Files-->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/jquery.passwordstrength.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/theme-switching.js"></script>
    <script src="js/no-internet.js"></script>
    <script src="js/active.js"></script>
    <script src="js/pwa.js"></script>
  </body>
</html>