<?php
include 'connect.php';
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lapak Hosting - Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <link rel="icon" type="iammges/x-icon" href="images/x-icon.png">  
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="dashboard.php" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
    
      <li class="nav-item">
        <a href="logout.php" class="nav-link btn btn-danger ">
          <p>LOGOUT</p>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="dashboard.php" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Welcome Admin!</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="dashboard.php" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
          with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./dashboard.php" class="nav-link">
                  <i class="fa fa-user-cog"></i>
                  <p>Admin Dashboard</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="invoice.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pembayaran</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="datauser.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="danahosting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dana Lapak Hosting</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="datahosting.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Hosting</p>
                </a>
              </li>
                 <li class="nav-item">
                  <a href="datapemesanan.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Data Pemesanan</p>
                  </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->   
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-6">
                    <!-- general form elements -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Data User</h3>
                        </div>
                        <?php
                        $ID_Hosting = $_GET['ID_Hosting'];
                        $data = mysqli_query($conn, "SELECT * from pemesanan WHERE ID_Hosting ='$ID_Hosting'");
                        // dd(mysqli_fetch_array($data));
                        while ($row = mysqli_fetch_array($data)) {
                        ?>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form action="edit_aksi_pesan.php" method="post">
                                <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputSocialMediaPromo">ID Pemesanan</label>
                                    <input type="text" class="form-control" name="id_pemesanan" placeholder="ID Pemesanan" value="<?php echo $row['id_pemesanan']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputAfiliasi">Tanggal Pemesanan</label>
                                    <input type="date" class="form-control" name="tgl_pesan" placeholder="Tanggal Pemesanan" value="<?php echo $row['tgl_pesan']; ?>">
                                </div>
                                 <div class="form-group">
                                    <label for="exampleInputAfiliasi">ID Hosting</label>
                                    <input type="text" class="form-control" name="ID_Hosting" placeholder="ID Hosting" value="<?php echo $row['ID_Hosting']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPengeluaran">Nomor Hp</label>
                                    <input type="number" class="form-control" name="no_hp" placeholder="Nomor Hp" value="<?php echo $row['no_hp']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSocialMediaPromo">Tanggal Bayar</label>
                                    <input type="date" class="form-control" name="tgl_bayar" placeholder="Tanggal Bayar" value="<?php echo $row['tgl_bayar']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSocialMediaPromo">Tanggal Aktif</label>
                                    <input type="date" class="form-control" name="tgl_aktif" placeholder="Tanggal Aktif" value="<?php echo $row['tgl_aktif']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSocialMediaPromo">Tanggal Akhir</label>
                                    <input type="date" class="form-control" name="tgl_akhir" placeholder="Tanggal Akhir" value="<?php echo $row['tgl_akhir']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSocialMediaPromo">Bukti Bayar</label>
                                    <input type="text" class="form-control" name="bukti_bayar" placeholder="Bukti Bayar" value="<?php echo $row['bukti_bayar']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSocialMediaPromo">Status</label>
                                    <input type="text" class="form-control" name="status" placeholder="Jenis Hosting" value="<?php echo $row['status']; ?>">
                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>            
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>