<?php
include 'connect.php';

$ID_Hosting = $_POST['ID_Hosting'];
$nama_paket = $_POST['nama_paket'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];
$storage = $_POST['storage'];
$type = $_POST['type'];
$bandwidth = $_POST['bandwidth'];
$support = $_POST['support'];


mysqli_query(
    $conn,
    "UPDATE tbl_jenis_hosting SET ID_Hosting='$ID_Hosting', nama_paket='$nama_paket', harga='$harga', deskripsi='$deskripsi', storage='$storage', type='$type', bandwidth='$bandwidth', support='$support'  WHERE ID_Hosting='$ID_Hosting'"
);
header("location:datahosting.php");
    mysqli_close($conn);
    ?>
