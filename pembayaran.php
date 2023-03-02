<?php 
include "connect.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="icon" type="iammges/x-icon" href="images/x-icon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg bg-body">
    <div class="container">
      <a class="navbar-brand" href="clientarea">
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
      <div class="card-header display-6 bg-primary">Payment</div>
          <br><br>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="invoice p-3 mb-3 pt-5">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Lapak Hosting
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <?php  
                    $ID_Pemesanan = $_GET['idPesan'];
                    $query = mysqli_query($conn,"SELECT * from pemesanan AS th INNER JOIN tbl_jenis_hosting AS p ON p.ID_Hosting = th.ID_Hosting WHERE th.id_pemesanan = '$ID_Pemesanan'");
                    $row = mysqli_fetch_assoc($query);
              ?>
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col pt-3">
                   <form action="aksigambar.php" method="post" enctype="multipart/form-data">
                  <strong>Order Number :                   
                    <input type="text" readonly class="form-control-plaintext" id="id_pemesanan" name="idpemesanan" value="<?php echo $row['id_pemesanan'] ?>">
                  </strong>
                    <p class="pt-3">Upload Proof of Payment :</p>
                    <div class="mb-3">
                   
                      <input type="file" class="form-control" name="buktibayar">
                      <p><i><div class="small">Maximum File : <span class="text-danger">*300kb</span></i> (.jpg, .jpeg, .png)</div></p>
                      <input type="submit" name="Upload" value="Upload" class="btn btn-secondary mt-1"></input>
                    </form>
                  </div>
                  <button type="submit" id="Submit" class="btn btn-success float-right mt-2" data-bs-toggle="modal" data-bs-target="#submit"><i class="far fa-credit-card"></i> Check
                        Payment
                    </button>
                </div>            
              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">
                  <p class="lead">Payment Methods :</p>
                    <img src="images/mandiri.png"  style="width: 13%;" alt="mandiri">
                    <img src="images/dana.png"  style="width: 13%;"  alt="dana">
                    <img src="images/ovo.png"  style="width: 13%;"  alt="ovo">
                    <img src="images/gopay.png"  style="width: 13%;"  alt="gopay">
                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Amount Due <?php echo date('d-m-Y'); ?></p>
                  <div class="table-responsive">
                    <table class="table">
                      <tr>
                        <th>Total:</th>
                        <th>
                          <?php
                            echo $row['harga'];
                          ?>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              <!-- this row will not appear when printing -->
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  </div>
  <!-- Modal -->
<div class="modal fade" id="submit" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="submit">Payment Methods</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="h4">Mandiri</div>
        <p>Account Number : 1720003165588</p>
        <p>In the Name of : Deviana Fitri  </p>
      <div class="h4">Dana</div>
        <p>Account Number : 083172006837</p>
        <p>In the Name of : Siti Fatimah</p>
      <div class="h4">OVO</div>
        <p>Account Number : 082211515802</p>
        <p>In the Name of : Putri Rizkiah</p>
      <div class="h4">Gopay</div>
        <p>Account Number : 085271065445</p>
        <p>In the Name of : Andre Wahyudi</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
  <footer id="footer" class="footer-section pt-5 mt-4">

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
</body>
</html>