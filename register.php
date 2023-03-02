<?php 
 include "connect.php";
 

session_start();
 
 
if (isset($_POST['submit'])) {
    $no_hp = $_POST['no_hp'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $lokasi = $_POST['lokasi'];
    $password = md5($_POST['password']);
    $repassword = md5($_POST['repassword']);
    $status = 0;
    
    if ($password = $repassword){
        // cek apakah ada data yang sama di table tbl_cu
        $q = "SELECT * FROM tbl_cu WHERE email = '$email'";
        $hasil = mysqli_query($conn, $q);
        if(!$hasil->num_rows){
            $q = "INSERT INTO tbl_cu VALUES('$no_hp', '$username', '$email', '$lokasi', '$password', '$repassword', '$status')";
            $result = mysqli_query($conn, $q);
            // dd($result);   
            if ($result){
                 echo "<script>alert('Selamat, registrasi berhasil!')</script>";
            } else {
                 echo "<script>alert('Gagal register')</script>";
            }
        }else{
             echo "<script>alert('Email sudah terdaftar, silahkan gunakan email yang lain')</script>";
        }
    
    } else{
         echo "<script>alert('Password tidak sama')</script>";
         
    }header("Location: loginuser.php");
}
 
?>
 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="iammges/x-icon" href="images/x-icon.ico">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />

    <link rel="stylesheet" type="text/css" href="loginstyle.css">
 
    <title>Register - Lapak Hosting</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p>
            <div class="input-group">
                <input type="text" placeholder="Username" name="username" required>
            </div>
            <div class="input-group">
                <input type="number" placeholder="No. Hp" name="no_hp" required >
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" required>
            </div>
             <div class="input-group">
                <input type="text" placeholder="Lokasi" name="lokasi" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="repassword" required>
            </div>
            <div class="input-group">
                <button type="submit" name="submit" class="btn">Register</button>
            </div>
            <p class="login-register-text">Anda sudah punya akun? <a href="loginuser.php">Login </a></p>
        </form>
    </div>
</body>
</html>