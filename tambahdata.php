<?php
session_start();
require 'connect.php';

$ID_pemesaanan=$_POST['ID_pemesanan'];
$ID_customer=$_POST['ID_customer'];
$nama=$_POST['nama'];
$Email_Aktif=$_POST['Email_Aktif'];
$item=$_POST['item'];
$status=$_POST['status'];

$query=mysqli_query($conn, "INSERT INTO tbl_data VALUES('','','','','$item','$status')");

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
header('location: invoice.php');
?>
