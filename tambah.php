<?php
session_start();
require 'connect.php';

$SosialMedia=$_POST['SosialMedia'];
$Afiliasi=$_POST['Afiliasi'];
$Pengeluaran=$_POST['Pengeluaran'];
$Pemasukan=$_POST['Pemasukan'];

$query=mysqli_query($conn, "INSERT INTO tbl_promosi VALUES('','$SosialMedia','$Afiliasi','$Pengeluaran','$Pemasukan')");

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
header('location: danahosting.php');
?>
