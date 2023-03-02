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
    <title>Shopping Cart - Lapak Hosting</title>
    <link rel="icon" type="iammges/x-icon" href="images/x-icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body">
    <div class="container">
      <a class="navbar-brand" href="Client Area.html">
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
              <a class="nav-link active" aria-current="page" href="clientarea.php">Home</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="hosting.php">Hosting</a></li>
                <li><a class="dropdown-item" href="domain.php">Domain</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contact.php">Contact Us</a>
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
          <a class="btn" title="Your account" href="user.php">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
              <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
            </svg>              
          </a> 
          </div>     
        </div>
      </div>
    </div>
  </nav>
  <div class="card text-bg-primary mb-auto" style="max-width: 100%;">
    <div class="container"><br><br>
      <div class="card-header display-6 bg-primary">Cart</div>
      <div class="card-body">
        <p class="card-text bg-primary">Your cart
          <br><br>
        </p>
      </div>
    </div>
  </div>
  <div class="container text pt-5 mt-5">    
    <h3 class="ms-3">
            Search for Domain  
    </h3>
    <div>
    <p class="ms-3">Configure your desired options and continue to checkout.</p>
    </div>
    <div class="container">
    <div class="form-check pt-4">
      <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
      <label class="form-check-label" for="flexRadioDefault1">
        Register a new domain
      </label>
    </div>
    <div class="domain-input-group clearfix" id="domainregister" style="display: block;">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-1 offset-sm-1">
                <div class="row domains-row">
                    <div class="col-xs-9 col-9">
                        <div class="input-group">
                            <span class="input-group-addon me-3">www.</span>
                            <input type="text" id="registersld" value="" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="" data-original-title="Please enter your domain">
                        </div>
                    </div>
                    <div class="col-xs-3 col-3">
                        <select id="registertld" class="form-control">
                            <option value=".com">.com</option>
                            <option value=".net">.net</option>
                            <option value=".id">.id</option>
                            <option value=".co.id">.co.id</option>
                            <option value=".or.id">.or.id</option>
                            <option value=".my.id">.my.id</option>
                            <option value=".web.id">.web.id</option>
                            <option value=".ac.id">.ac.id</option>
                            <option value=".biz.id">.biz.id</option>
                            <option value=".ponpes.id">.ponpes.id</option>
                            <option value=".sch.id">.sch.id</option>
                            <option value=".biz">.biz</option>
                            <option value=".blog">.blog</option>
                            <option value=".club">.club</option>
                            <option value=".eu">.eu</option>
                            <option value=".icu">.icu</option>
                            <option value=".info">.info</option>
                            <option value=".me">.me</option>
                            <option value=".mobi">.mobi</option>
                            <option value=".online">.online</option>
                            <option value=".org">.org</option>
                            <option value=".site">.site</option>
                            <option value=".top">.top</option>
                            <option value=".us">.us</option>
                            <option value=".vip">.vip</option>
                            <option value=".xyz">.xyz</option>
                            <option value=".cloud">.cloud</option>
                            <option value=".computer">.computer</option>
                            <option value=".digital">.digital</option>
                            <option value=".network">.network</option>
                            <option value=".software">.software</option>
                            <option value=".tech">.tech</option>
                            <option value=".website">.website</option>
                            <option value=".codes">.codes</option>
                            <option value=".store">.store</option>
                            <option value=".stream">.stream</option>
                            <option value=".review">.review</option>
                            <option value=".download">.download</option>
                            <option value=".work">.work</option>
                            <option value=".trade">.trade</option>
                            <option value=".asia">.asia</option>
                            <option value=".science">.science</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn primary-solid-btn btn-block bg-primary text-white">
                  <div class="ps-3 pe-3">Check</div>
                </button>
            </div>
        </div>
        <div class="form-check pt-4">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
            Transfer your domain from another registrar
          </label>
        </div>
        <div class="domain-input-group clearfix" id="transferdomain" style="display: block;">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-1 offset-sm-1">
                <div class="row domains-row">
                    <div class="col-xs-9 col-9">
                        <div class="input-group">
                            <span class="input-group-addon me-3">www.</span>
                            <input type="text" id="transferld" value="" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="" data-original-title="Please enter your domain">
                        </div>
                    </div>
                    <div class="col-xs-3 col-3">
                        <select id="transfertld" class="form-control">
                            <option value=".com">.com</option>
                            <option value=".net">.net</option>
                            <option value=".id">.id</option>
                            <option value=".co.id">.co.id</option>
                            <option value=".or.id">.or.id</option>
                            <option value=".my.id">.my.id</option>
                            <option value=".web.id">.web.id</option>
                            <option value=".ac.id">.ac.id</option>
                            <option value=".biz.id">.biz.id</option>
                            <option value=".ponpes.id">.ponpes.id</option>
                            <option value=".sch.id">.sch.id</option>
                            <option value=".biz">.biz</option>
                            <option value=".blog">.blog</option>
                            <option value=".club">.club</option>
                            <option value=".eu">.eu</option>
                            <option value=".icu">.icu</option>
                            <option value=".info">.info</option>
                            <option value=".me">.me</option>
                            <option value=".mobi">.mobi</option>
                            <option value=".online">.online</option>
                            <option value=".org">.org</option>
                            <option value=".site">.site</option>
                            <option value=".top">.top</option>
                            <option value=".us">.us</option>
                            <option value=".vip">.vip</option>
                            <option value=".xyz">.xyz</option>
                            <option value=".cloud">.cloud</option>
                            <option value=".computer">.computer</option>
                            <option value=".digital">.digital</option>
                            <option value=".network">.network</option>
                            <option value=".software">.software</option>
                            <option value=".tech">.tech</option>
                            <option value=".website">.website</option>
                            <option value=".codes">.codes</option>
                            <option value=".store">.store</option>
                            <option value=".stream">.stream</option>
                            <option value=".review">.review</option>
                            <option value=".download">.download</option>
                            <option value=".work">.work</option>
                            <option value=".trade">.trade</option>
                            <option value=".asia">.asia</option>
                            <option value=".science">.science</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <button type="submit" class="btn primary-solid-btn btn-block bg-primary text-white">
                  <div class="ps-3 pe-3">Check</div>
                </button>
            </div>
        </div>
        <div class="form-check pt-4">
          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
          <label class="form-check-label" for="flexRadioDefault1">
          I will use my existing domain and update my nameservers
          </label>
        </div>
        <div class="domain-input-group clearfix" id="existdomain" style="display: block;">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-1 offset-sm-1">
                <div class="row domains-row">
                    <div class="col-xs-9 col-9">
                        <div class="input-group">
                            <span class="input-group-addon me-3">www.</span>
                            <input type="text" id="existsld" value="" class="form-control" autocapitalize="none" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="" data-original-title="Please enter your domain">
                        </div>
                    </div>
                    <div class="col-xs-3 col-3">
                        <select id="existtld" class="form-control">
                            <option value=".com">.com</option>
                            <option value=".net">.net</option>
                            <option value=".id">.id</option>
                            <option value=".co.id">.co.id</option>
                            <option value=".or.id">.or.id</option>
                            <option value=".my.id">.my.id</option>
                            <option value=".web.id">.web.id</option>
                            <option value=".ac.id">.ac.id</option>
                            <option value=".biz.id">.biz.id</option>
                            <option value=".ponpes.id">.ponpes.id</option>
                            <option value=".sch.id">.sch.id</option>
                            <option value=".biz">.biz</option>
                            <option value=".blog">.blog</option>
                            <option value=".club">.club</option>
                            <option value=".eu">.eu</option>
                            <option value=".icu">.icu</option>
                            <option value=".info">.info</option>
                            <option value=".me">.me</option>
                            <option value=".mobi">.mobi</option>
                            <option value=".online">.online</option>
                            <option value=".org">.org</option>
                            <option value=".site">.site</option>
                            <option value=".top">.top</option>
                            <option value=".us">.us</option>
                            <option value=".vip">.vip</option>
                            <option value=".xyz">.xyz</option>
                            <option value=".cloud">.cloud</option>
                            <option value=".computer">.computer</option>
                            <option value=".digital">.digital</option>
                            <option value=".network">.network</option>
                            <option value=".software">.software</option>
                            <option value=".tech">.tech</option>
                            <option value=".website">.website</option>
                            <option value=".codes">.codes</option>
                            <option value=".store">.store</option>
                            <option value=".stream">.stream</option>
                            <option value=".review">.review</option>
                            <option value=".download">.download</option>
                            <option value=".work">.work</option>
                            <option value=".trade">.trade</option>
                            <option value=".asia">.asia</option>
                            <option value=".science">.science</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="col-sm-2 pb-5">
                <button type="submit" class="btn primary-solid-btn btn-block bg-primary text-white">
                  <div class="ps-3 pe-3">Check</div>
                </button>
            </div>
        </div>
    </div>
    </div>
    </div>
    
  </div>
  </div>
  <div class="mt-5 pt-5">
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
            <a class="nav-link text-white" href="hosting.php">Hosting</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="domain.php">Domain</a>
          </li> 
        </ul>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="footer-nav-wrap text-white">
      <h4 class="text-white">COMPANY</h4>
        <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="affiliates.php">Affliates</a>
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
            <a class="nav-link text-white" href="security.php">Security</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="legality.php">Legality</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white" href="whois.php">WHOIS Lookup</a>
          </li>
        </ul>
    </div>
  </div>
  <div class="col-md-3 col-sm-6">
    <div class="footer-nav-wrap text-white">
        <h4 class="text-white">SUPPORT</h4>
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="contact.php">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="knowledge.php">Knowledge Base</a>
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
  </div>
</body>
</html>