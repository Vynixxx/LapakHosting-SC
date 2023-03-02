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
    <title>Affiliate</title>
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
      <div class="card-header display-6 bg-primary">Affiliates Program</div>
      <div class="card-body">
        <p class="card-text bg-primary">We Provide
          <br><br>
        </p>
      </div>
    </div>
  </div>
  <br><br><br>
  <div class="container">
    <p class="text-center h5">Affliates Program</p>
    <div class="h2 text-center text-uppercase">How To <span class="text-primary"><strong> Affliate</strong></span></div><br></div>
  <br><br>
  <div class="container">
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card">
        <center><svg xmlns="http://www.w3.org/2000/svg" width="13%" height="50%" fill="currentColor" class="bi bi-clipboard2-check-fill text-primary my-3" viewBox="0 0 16 16">
            <path d="M10 .5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5.5.5 0 0 1-.5.5.5.5 0 0 0-.5.5V2a.5.5 0 0 0 .5.5h5A.5.5 0 0 0 11 2v-.5a.5.5 0 0 0-.5-.5.5.5 0 0 1-.5-.5Z"/>
            <path d="M4.085 1H3.5A1.5 1.5 0 0 0 2 2.5v12A1.5 1.5 0 0 0 3.5 16h9a1.5 1.5 0 0 0 1.5-1.5v-12A1.5 1.5 0 0 0 12.5 1h-.585c.055.156.085.325.085.5V2a1.5 1.5 0 0 1-1.5 1.5h-5A1.5 1.5 0 0 1 4 2v-.5c0-.175.03-.344.085-.5Zm6.769 6.854-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708.708Z"/>
          </svg></center>
          <center>
          <div class="card-body">
            <h5 class="card-title">Register to Lapak Hosting</h5>
            <p class="card-text">Share processes and data security that you need to know and consider.</p>
          </div>
        </div>
        </center>
      </div>
      <div class="col">
        <div class="card">
          <center><svg xmlns="http://www.w3.org/2000/svg" width="13%" height="50%" fill="currentColor" class="bi bi-display-fill my-3 text-primary" viewBox="0 0 16 16">
            <path d="M6 12c0 .667-.083 1.167-.25 1.5H5a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1h-.75c-.167-.333-.25-.833-.25-1.5h4c2 0 2-2 2-2V4c0-2-2-2-2-2H2C0 2 0 4 0 4v6c0 2 2 2 2 2h4z"/>
          </svg></center>
          <center>
          <div class="card-body">
            <h5 class="card-title">Advertising On Your Website</h5>
            <p class="card-text">Our team ensures that your website is always safe and secure.</p>
          </div>
        </div>
        </center>
      </div>
      <div class="col">
        <div class="card">
          <center><svg xmlns="http://www.w3.org/2000/svg" width="13%" height="50%" fill="currentColor" class="bi bi-coin my-3 text-primary" viewBox="0 0 16 16">
            <path d="M5.5 9.511c.076.954.83 1.697 2.182 1.785V12h.6v-.709c1.4-.098 2.218-.846 2.218-1.932 0-.987-.626-1.496-1.745-1.76l-.473-.112V5.57c.6.068.982.396 1.074.85h1.052c-.076-.919-.864-1.638-2.126-1.716V4h-.6v.719c-1.195.117-2.01.836-2.01 1.853 0 .9.606 1.472 1.613 1.707l.397.098v2.034c-.615-.093-1.022-.43-1.114-.9H5.5zm2.177-2.166c-.59-.137-.91-.416-.91-.836 0-.47.345-.822.915-.925v1.76h-.005zm.692 1.193c.717.166 1.048.435 1.048.91 0 .542-.412.914-1.135.982V8.518l.087.02z"/>
            <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path d="M8 13.5a5.5 5.5 0 1 1 0-11 5.5 5.5 0 0 1 0 11zm0 .5A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
          </svg></center>
          <center>
          <div class="card-body">
            <h5 class="card-title">Get Monthly Income</h5>
            <p class="card-text">Monthly income that you can get with affiliates at Lapak Hosting.</p>
          </div>
        </div>
        </center>
      </div>
    </div>
  </div>
  <br><br><br><br><br>
  <section class="client-review-section ptb-100 gray-light-bg bg-secondary bg-opacity-25 pb-5 pt-5">
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
    <div class="container pt-2">
  <section class="content pt-5 pb-5">
  <p class="text-center h5">Any Questions?</p>
    <div class="h2 text-center text-uppercase">Ask a <span class="text-primary"><strong>Question</strong></span></div></div>
    <div class="container pb-5">
    <!-- Default box -->
    <div class="card mb-5">
      <div class="card-body row">
        <div class="col-lg-5 text-center d-flex align-items-center justify-content-center">
          <div class="">
            <h2>Lapak<strong>Hosting</strong></h2>
            <p class="lead mb-5">Bengkalis, Riau 28711<br>
              Phone: +6285162669547
            </p>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="form-group">
            <label for="inputName">Name</label>
            <input type="text" id="inputName" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputEmail">E-Mail</label>
            <input type="email" id="inputEmail" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputSubject">Subject</label>
            <input type="text" id="inputSubject" class="form-control" />
          </div>
          <div class="form-group">
            <label for="inputMessage">Message</label>
            <textarea id="inputMessage" class="form-control" rows="4"></textarea>
          </div>
          <div class="form-group">
            <input type="submit" class="btn btn-primary" value="Send message">
          </div>
        </div>
      </div>
    </div>

  </section>
  </div>
  
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