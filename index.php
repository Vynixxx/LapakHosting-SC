<?php
    
include 'connect.php';
 
error_reporting(0);
 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | Lapak Hosting</title>
    <link rel="icon" type="iammges/x-icon" href="images/x-icon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="images/logo4.png" width="203" height="68" alt="Lapak Hosting">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvasLg" aria-controls="navbarOffcanvasLg">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="navbarOffcanvasLg" aria-labelledby="navbarOffcanvasLgLabel">
        <div class="offcanvas-header">
          <img src="images/logo4.png" width="203" height="68" alt="Lapak Hosting">
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="hostinglog.php">Hosting</a></li>
                <li><a class="dropdown-item" href="domainlog.php">Domain</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="aboutlog.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contactlog.php">Contact Us</a>
            </li>
          </ul>
          <div>
            <a class="btn btn-thite" href="hostinglog.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
            </a>
            <a href="loginuser.php" class="btn btn-outline-primary text-opacity-50">Login</a>
          </div>
        </div>
      </div>
    </div>
  </nav>
  <div class="card text-bg-primary mb-auto" style="max-width: 100%;">
    <div class="container"><br><br><br><br>
      <div class="card-header display-6">Start growing your business in this digital era<br>by choosing hosting at Lapak Hosting</div>
      <div class="card-body">
        <p class="card-text">If your site is your personal business, we want you to be successful.<br> There are many website hosting options, <br>but the quality we provide is the best in the area.
          <br><br><br><br><br>
        </p>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
          <a href="domainlog.php"><center><svg xmlns="http://www.w3.org/2000/svg" width="13%" height="50%" fill="currentColor" class="bi bi-globe my-3" viewBox="0 0 16 16">
            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm7.5-6.923c-.67.204-1.335.82-1.887 1.855A7.97 7.97 0 0 0 5.145 4H7.5V1.077zM4.09 4a9.267 9.267 0 0 1 .64-1.539 6.7 6.7 0 0 1 .597-.933A7.025 7.025 0 0 0 2.255 4H4.09zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a6.958 6.958 0 0 0-.656 2.5h2.49zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5H4.847zM8.5 5v2.5h2.99a12.495 12.495 0 0 0-.337-2.5H8.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5H4.51zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5H8.5zM5.145 12c.138.386.295.744.468 1.068.552 1.035 1.218 1.65 1.887 1.855V12H5.145zm.182 2.472a6.696 6.696 0 0 1-.597-.933A9.268 9.268 0 0 1 4.09 12H2.255a7.024 7.024 0 0 0 3.072 2.472zM3.82 11a13.652 13.652 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5H3.82zm6.853 3.472A7.024 7.024 0 0 0 13.745 12H11.91a9.27 9.27 0 0 1-.64 1.539 6.688 6.688 0 0 1-.597.933zM8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855.173-.324.33-.682.468-1.068H8.5zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.65 13.65 0 0 1-.312 2.5zm2.802-3.5a6.959 6.959 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5h2.49zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7.024 7.024 0 0 0-3.072-2.472c.218.284.418.598.597.933zM10.855 4a7.966 7.966 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4h2.355z"/>
          </svg></center></a>
          <center>
          <div class="card-body">
            <h5 class="card-title">Domain</h5>
            <p class="card-text">Register your domain right now here.</p>
          </div>
        </div>
        </center>
      </div>
      <div class="col">
        <div class="card">
          <a href="hostinglog.php"><center><svg xmlns="http://www.w3.org/2000/svg" width="13%" height="50%" fill="currentColor" class="bi bi-server my-3" viewBox="0 0 16 16">
            <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
            <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
            <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
          </svg></center></a>
          <center>
          <div class="card-body">
            <h5 class="card-title">Hosting</h5>
            <p class="card-text">Choose the right hosting package for your site.</p>
          </div>
        </div>
        </center>
      </div>
      <div class="col">
        <div class="card">
          <a href="https://m.me/Phoenix"><center><svg xmlns="http://www.w3.org/2000/svg" width="13%" height="50%" fill="currentColor" class="bi bi-headset my-3" viewBox="0 0 16 16">
            <path d="M8 1a5 5 0 0 0-5 5v1h1a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V6a6 6 0 1 1 12 0v6a2.5 2.5 0 0 1-2.5 2.5H9.366a1 1 0 0 1-.866.5h-1a1 1 0 1 1 0-2h1a1 1 0 0 1 .866.5H11.5A1.5 1.5 0 0 0 13 12h-1a1 1 0 0 1-1-1V8a1 1 0 0 1 1-1h1V6a5 5 0 0 0-5-5z"/>
          </svg></center></a>
          <center>
          <div class="card-body">
            <h5 class="card-title">Admin Availability 24/7</h5>
            <p class="card-text">We're always online 24 hours to help you</p>
          </div>
        </div>
        </center>
      </div>
    </div>
  </div>
  <br><br><br><br><br><br>
  <section class="card text-bg-primary mb-auto">
    <br><br><br><br>
    <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div class="col-md-12 col-lg-6">
          <div class="cta-content-wrap text-white">
            <h2 class="text-white">24/7 Hosting Technical Support, To Our Customers</h2>
            <p>Innovate objectively, decisively, maintain progressively, pursue the imperative of information quality which is very important. </p>
          </div>
          <div class="support-action d-inline-flex flex-wrap">
              <a href="mailto:support@lapakhosting.com" class="mr-3"><i class="fas fa-comment mr-1 color-accent"></i> <span class="text-white">support@lapakhosting.com</span></a>
            </div>
            <a href="tel:+6285162669547" class="mb-0"><i class="fas fa-phone-alt mr-1 color-accent"></i> <span class="text-white">+62-851-6266-9547</span></a>
          </div>
          <div class="col-lg-2"></div>
          <div class="col-md-6 col-lg-4 hidden-md hidden-sm hidden-xs">
          <div class="cta-img-wrap text-center">
            <img src="images/admin/admin.png" width="250" class="img-fluid" alt="server room">
          </div>
        </div>
      </div>
    </div>
    <br><br><br><br>
    </section>
  <br><br><br>
  <section class="client-review-section ptb-100 gray-light-bg">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-12 col-lg-12">
        <div class="section-heading-center text-center">
          <h2>What Customers Say About Us?</h2>
          <p class="lead">We can promise you a lot, so we let our customers speak for us.</p>
        </div>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6 col-lg-4">
        <div class="single-testimonial white-bg rounded">
            <ul class="list-inline ratting-list">
              <li class="list-inline-item"><span class="fas fa-star"></span></li>
              <li class="list-inline-item"><span class="fas fa-star"></span></li>
              <li class="list-inline-item"><span class="fas fa-star"></span></li>
              <li class="list-inline-item"><span class="fas fa-star"></span></li>
              <li class="list-inline-item"><span class="fas fa-star"></span></li>
            </ul>
          <div class="ratting-content">
            <h5>Awesome technical support</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet urna eu volutpat mollis. Morbi quis lectus faucibus, cursus risus sit amet, vulputate eros. Nam at massa nisi.</p>
          </div>
          <div class="ratting-author">
            <h6>Alex Khamer</h6>
          </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="single-testimonial white-bg rounded">
        <ul class="list-inline ratting-list">
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
        </ul>
        <div class="ratting-content">
          <h5>Pleasant support experience</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet urna eu volutpat mollis. Morbi quis lectus faucibus, cursus risus sit amet, vulputate eros. Nam at massa nisi.</p>
        </div>
        <div class="ratting-author">
          <h6>Peter Anderson</h6>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-4">
      <div class="single-testimonial white-bg rounded">
        <ul class="list-inline ratting-list">
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
          <li class="list-inline-item"><span class="fas fa-star"></span></li>
        </ul>
        <div class="ratting-content">
          <h5>Contacted support Midnight</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi imperdiet urna eu volutpat mollis. Morbi quis lectus faucibus, cursus risus sit amet, vulputate eros. Nam at massa nisi.</p>
        </div>
        <div class="ratting-author">
          <h6>Jolio Darix</h6>
        </div>
      </div>
      </div>
      </div>
    </div>
  </section>
  <br><br><br><br><br><br>
  <footer id="footer" class="footer-section">

  <div class="footer-top gradient-bg bg-primary">
    <div class="container">
      <br><br><br><br><br>
      <div class="row"> 
        <div class="col-md-3">
          <div class="row footer-top-wrap">
            <div class="col-sm-12">
              <div class="footer-nav-wrap text-white">

                <a href="/index.php" class="logo "><img src="images/footer.png" class="img-responsive" alt="Gudang Hoster"></a>
                  <p class="mt-20">Lapak Hosting is the best domain and web hosting service in Indonesia with guaranteed quality and 99.9% server uptime.</p>
              </div>
          </div>
      </div>
  </div>
  <div class="col-md-9">
    <div class="row footer-top-wrap">
    <div class="col-md-3 col-sm-6">
    <div class="footer-nav-wrap text-white">
    <h4 class="text-white">PRODUCTS</h4>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-white" href="hostinglog.php">Hosting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="domainlog.php">Domain</a>
          </li> 
        </ul>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="footer-nav-wrap text-white">
      <h4 class="text-white">COMPANY</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="aboutlog.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="affiliateslog.php">Affliates</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="https://www.facebook.com/groups/lapakhostingcommunity">Community</a>
            </li>
        </ul>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="footer-nav-wrap text-white">
        <h4 class="text-white">LEGAL</h4>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link text-white" href="securitylog.php">Security</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="legalitylog.php">Legality</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="whoislog.php">WHOIS Lookup</a>
          </li>
        </ul>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="footer-nav-wrap text-white">
        <h4 class="text-white">SUPPORT</h4>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="contactlog.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="knowledgelog.php">Knowledge Base</a>
            </li>
          </ul>
        </div>
      </div>
      </div>
      </div>
    </div>
  </div>
  <br><br><br>
    <div class="container">
      <div class="back-to-top-btn">
        <a href="#" class="back-to-top"><i class="fas fa-chevron-up"></i></a>
      </div>
    </div>
  </div>


  <div class="footer-bottom py-3 text-bg-primary bg-opacity-100">
    <div class="container">
      <div class="row align-items-center justify-content-between display-flex">
        <div class="col-md-8 col-lg-8 col-sm-7 col-xs-12">
          <p class="copyright-text pb-0 mb-0 text-white">Copyright © 2022 Lapak Hosting. All Rights Reserved.</p>
        </div>
      </div>
    </div>
    <br>
  </div>

  </footer>
</body>
</html>