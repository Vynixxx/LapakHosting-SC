<?php
include 'connect.php';
$no_hp = $_POST['no_hp'];
$username = $_POST['username'];
$email = $_POST['email'];
$lokasi = $_POST['lokasi'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$status = $_POST['status'];

mysqli_query(
    $conn,
    "UPDATE tbl_cu SET no_hp='$no_hp', username='$username', email='$email', password='$password', 
Lokasi='$lokasi', repassword='$repassword', Password='$password', status='$status' WHERE no_hp='$no_hp'"
);
header("location:datauser.php");
    mysqli_close($conn);
    ?>
