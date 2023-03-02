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
    <title>Knowledge Base</title>
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
          <a class="btn btn-white" href="cart.php">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill" viewBox="0 0 16 16">
                <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
              </svg>
            </a>       
          </div>
          <div>
            <a href="loginuser.php" class="btn btn-outline-primary text-opacity-50">Login</a>
          </div>  
        </div>
      </div>
    </div>
  </nav>
   <div class="card text-bg-primary mb-auto" style="max-width: 100%;">
    <div class="container"><br><br>
      <div class="card-header display-6 bg-primary">Knowledge Base</div>
        <br><br>
    </div>
  </div>
  <div class="container pt-5 mt-5">
    <div class="h3 text-center text-uppercase py-1">What Is <br><span class="text-primary"><strong>Hosting & Domain</strong></span></div>

    </div>
  </div>
  <div class="container pt-5 mt-3">
    <div class="row">
    <div class="col-sm-6">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-primary border-bottom">Hosting</h5>
          <p class="card-text pt-4">A domain is an address listed on a website that ends in an extension that you type into a browser's address bar to open a website. In more detail, 
          a domain is a name chosen as the identity of a web server or computer to make it easier to access. 
          Without this name, you would have to type a string of numbers called an internet protocol address 
          into your browser's address bar every time you visit a website.</p>
        </div>
      </div>
    </div>
    <div class="col-sm-6 pb-5">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-primary border-bottom">Domain</h5>
          <p class="card-text pt-4">A domain is an address listed on a website that ends in an extension that you type into a browser's address bar to open a website. In more detail, 
          a domain is a name chosen as the identity of a web server or computer to make it easier to access. 
          Without this name, you would have to type a string of numbers called an internet protocol address 
          into your browser's address bar every time you visit a website.</p>
        </div>
      </div>
    </div>
  </div>
 </div>
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