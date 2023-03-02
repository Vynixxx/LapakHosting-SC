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
    <title>Client Area - Hosting</title>
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
    <div class="container"><br><br>
      <div class="card-header display-6 bg-primary">Hosting Area</div>
      <div class="card-body">
        <p class="card-text bg-primary">Your cart
          <br><br>
        </p>
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="container">
    <p class="text-center h5">Price</p>
    <div class="h2 text-center text-uppercase">Choose Your <br><span class="text-primary"><strong>hosting package</strong></span></div><br></div>
  <br><br>
  <div class="container">
    <div class="card-group">
    <div class="card">
      <svg xmlns="http://www.w3.org/2000/svg" width="70%" height="70%" fill="currentColor" class="bi bi-server mx-5 my-4" style="color: blue;" viewBox="0 0 16 16">
        <path d="M1.333 2.667C1.333 1.194 4.318 0 8 0s6.667 1.194 6.667 2.667V4c0 1.473-2.985 2.667-6.667 2.667S1.333 5.473 1.333 4V2.667z"/>
        <path d="M1.333 6.334v3C1.333 10.805 4.318 12 8 12s6.667-1.194 6.667-2.667V6.334a6.51 6.51 0 0 1-1.458.79C11.81 7.684 9.967 8 8 8c-1.966 0-3.809-.317-5.208-.876a6.508 6.508 0 0 1-1.458-.79z"/>
        <path d="M14.667 11.668a6.51 6.51 0 0 1-1.458.789c-1.4.56-3.242.876-5.21.876-1.966 0-3.809-.316-5.208-.876a6.51 6.51 0 0 1-1.458-.79v1.666C1.333 14.806 4.318 16 8 16s6.667-1.194 6.667-2.667v-1.665z"/>
      </svg>     
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-lg-center my-2">Warrior Hosting</h5>
        <p class="card-text text-lg-center">The High performance cloud platform ever</p>
        <p class="card-text text-lg-center"><small class="text-primary h4">Rp.</small></p>
        <p class="card-text text-lg-center"><small class="text-primary h1">70.000</small><span>/month</span></p>
        <center><div class="btn btn-primary my-2"><a href="../loginuser/login.php" class="text-white text-decoration-none">Buy Now</a></div></center>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-lg-center my-2">Master Hosting</h5>
        <p class="card-text text-lg-center">The High performance cloud platform ever</p>
        <p class="card-text text-lg-center"><small class="text-primary h4">Rp.</small></p>
        <p class="card-text text-lg-center"><small class="text-primary h1">170.000</small><span>/month</span></p>
        <center><div class="btn btn-primary my-2"><a href="../loginuser/login.php" class="text-white text-decoration-none">Buy Now</a></div></center>
      </div>
    </div>
    <div class="card">
      <div class="card-body">
        <h5 class="card-title text-lg-center my-2">Epic Hosting</h5>
        <p class="card-text text-lg-center">The High performance cloud platform ever</p>
        <p class="card-text text-lg-center"><small class="text-primary h4">Rp.</small></p>
        <p class="card-text text-lg-center"><small class="text-primary h1">250.000</small><span>/month</span></p>
        <center><div class="btn btn-primary my-2"><a href="../loginuser/login.php" class="text-white text-decoration-none">Buy Now</a></div></center>
      </div>
    </div>
  </div>
  </div>
  <br><br><br><br><br>
  <div class="container">
    <div class="card-group text-center">
      <div class="card">
        <div class="card-body">
          <p class="card-text">Visits per month</p>
      </div>
      <div class="card-body">
          <p class="card-text">Hosted Domain</p>
      </div>
      <div class="card-body">
          <p class="card-text">SSD Storage</p>
      </div>
      <div class="card-body">
          <p class="card-text">Hosting type</p>
      </div>
      <div class="card-body">
          <p class="card-text">Bandwidth per month</p>
      </div>
      <div class="card-body">
          <p class="card-text">24/7 phone support</p>
      </div>
    </div>
    <div class="card">
        <div class="card-body">
          <p class="card-text">Up to 1000</p>
      </div>
      <div class="card-body">
          <p class="card-text">∞</p>
      </div>
      <div class="card-body">
          <p class="card-text">25 GB</p>
      </div>
      <div class="card-body">
          <p class="card-text">Dedicated</p>
      </div>
      <div class="card-body">
          <p class="card-text">1000 GB</p>
      </div>
      <div class="card-body">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
          <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
        </svg>            
      </div>
    </div>
    <div class="card">
        <div class="card-body">
          <p class="card-text">Up to 2.000<p>
      </div>
      <div class="card-body">
          <p class="card-text">∞</p>
      </div>
      <div class="card-body">
          <p class="card-text">50 GB</p>
      </div>
      <div class="card-body">
          <p class="card-text">Dedicated</p>
      </div>
      <div class="card-body">
          <p class="card-text">1000 GB</p>
      </div>
      <div class="card-body">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
          <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
        </svg>      
      </div>
    </div>
    <div class="card">
        <div class="card-body">
          <p class="card-text">Up to 4.000</p>
      </div>
      <div class="card-body">
          <p class="card-text">∞</p>
      </div>
      <div class="card-body">
          <p class="card-text">100 GB</p>
      </div>
      <div class="card-body">
          <p class="card-text">Dedicated</p>
      </div>
      <div class="card-body">
          <p class="card-text">1000 GB</p>
      </div>
      <div class="card-body">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-lg" viewBox="0 0 16 16">
          <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
        </svg>      
      </div>
    </div>
  </div>
  </div>
    <br><br><br><br>
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