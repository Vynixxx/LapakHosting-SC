<?php
session_start();
require 'connect.php';
if (!$_SESSION){
  header("Location: loginuser.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Information</title>
    <link rel="icon" type="iammges/x-icon" href="images/x-icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body">
    <div class="container">
      <a class="navbar-brand" href="clientarea.php">
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
      <div class="card-header display-6 bg-primary">Your Account</div>
      <br><br>
    </div>
  </div>
  <div class="mt-5 pt-2">
    <div class="container mt-5 pt-5">
      <div class="card">
      <div class="card-header bg-primary text-white">About Your Account</div>
      </div>
      <?php  
        $no_hp = $_SESSION['noHp'];
        $query = mysqli_query($conn,"SELECT * FROM tbl_cu WHERE no_hp='$no_hp'");
        $row = mysqli_fetch_array($query);
      ?>
        <div class="ms-5">
          <div class="mb-3 row my-3">
            <label for="staticEmail" class="col-sm-2 col-form-label">Name :</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="username" value="<?=$row['username']?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Phone Number :</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="no_hp" value="<?=$row['no_hp']?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Location :</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="lokasi" value="<?=$row['lokasi']?>">
            </div>
          </div>
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Email :</label>
            <div class="col-sm-10">
              <input type="text" readonly class="form-control-plaintext" id="email" value="<?=$row['email']?>">
            </div>
          </div>
        </div>
      </div>
      <?php ?>
      <?php 
        $no_hp = $_SESSION['noHp'];
        $query = mysqli_query($conn,"SELECT * FROM pemesanan WHERE no_hp='$no_hp'");
        $row = mysqli_fetch_array($query);
      ?>
      <div class="container mt-5 pt-5">
        <div class="card">
        <div class="card-header bg-primary text-white">Pesanan Anda</div>
      </div>
      <?php 
           $noHP = $_SESSION['noHp'];
           $query4 = mysqli_query($conn,"SELECT * from pemesanan 
           WHERE no_hp = '$noHP' order by id_pemesanan DESC");
           while ($row4 = mysqli_fetch_assoc($query4))
           {
      ?>
      <div class="container pt-4">
        <div class="ms-5">
          <div class="mb-3 row">
            <label for="staticEmail" class="col-sm-2 col-form-label">Hosting Limit :</label>
              <div class="col-sm-10">
                <input type="text" readonly class="form-control-plaintext" id="limit_hosting" value="<?=$row4['tgl_aktif']?>">
                <?php echo $row4['tgl_akhir'];?>
              </div>
          </div>
        </div>
      </div>
      <?php }?>

        <?php
          //$idhosting= $row['ID_Hosting'];
           $noHP = $_SESSION['noHp'];
           $query2 = mysqli_query($conn,"SELECT * from tbl_jenis_hosting AS th INNER JOIN pemesanan AS p ON p.ID_Hosting = th.ID_Hosting 
           WHERE p.no_hp = '$noHP' order by p.id_pemesanan DESC");
          //$query2 = mysqli_query($conn,"SELECT * FROM tbl_jenis_hosting WHERE ID_Hosting='$idhosting'");
          while ($row2 = mysqli_fetch_assoc($query2)) 
          {
        ?>
        <div class="ms-5">
          <div class="mb-3 row">
            <!-- label for="staticEmail" class="col-sm-2 col-form-label">Jenis Hosting :</label -->
              <div class="col-sm-10">
                <?php
                  echo "No.order : ".$row2['id_pemesanan']." - ".$row2['nama_paket']." (".$row2['tgl_pesan'].")";
                  
                ?>
              </div>
          </div>
        </div>
        <?php
          }
        ?>
      </div>
    </div>
    <div class="container my-4">
      <div class="ms-4">
        <div class="ms-4">
          <p><a href="logoutuser.php" class="btn btn-outline-danger text-decoration-none">
            Logout        
          </a></p>
        </div>
      </div>
    </div>
  </div>
  <div class="mt-5 pt-5">
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
        
                      <a href="./clientarea.php" class="logo "><img src="images/footer.png" class="img-responsive" alt="Gudang Hoster"></a>
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
    </div>
</body>
</html>