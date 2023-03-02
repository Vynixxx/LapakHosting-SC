<?php
session_start();
require 'connect.php';

$ID_Hosting=$_POST['ID_Hosting'];
$nama_paket=$_POST['nama_paket'];
$harga=$_POST['harga'];
$deskripsi=$_POST['deskripsi'];
$storage=$_POST['storage'];
$type=$_POST['type'];
$bandwidth=$_POST['bandwidth'];
$support=$_POST['support'];

$query=mysqli_query($conn, "INSERT INTO tbl_jenis_hosting VALUES('$ID_Hosting','$nama_paket','$harga','$deskripsi','$storage','$type','$bandwidth','$support')");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Tambah Data Berhasil.");
    <?php
}else{

        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    ?>
    <script type="text/javascript">
        alert("Terdapat Kesalahan Saat Memasukkan Data.");
    <?php

}
header('location: datahosting.php');
?>
