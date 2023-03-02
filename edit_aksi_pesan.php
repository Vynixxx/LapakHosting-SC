<?php
include 'connect.php';
$id_pemesanan = $_POST['id_pemesanan'];
$tgl_pesan = $_POST['tgl_pesan'];
$ID_Hosting = $_POST['ID_Hosting'];
$no_hp = $_POST['no_hp'];
$tgl_bayar = $_POST['tgl_bayar'];
$tgl_aktif = $_POST['tgl_aktif'];
$tgl_akhir = $_POST['tgl_akhir'];
$bukti_bayar = $_POST['bukti_bayar'];
$status = $_POST['status'];

mysqli_query(
    $conn,
    "UPDATE pemesanan SET id_pemesanan=$id_pemesanan, tgl_pesan='$tgl_pesan', ID_Hosting='$ID_Hosting', no_hp='$no_hp', 
tgl_bayar='$tgl_bayar', tgl_aktif='$tgl_aktif', tgl_akhir='$tgl_akhir', bukti_bayar='$bukti_bayar', status='$status' WHERE ID_Hosting='$ID_Hosting'");
header("location:datapemesanan.php");
    mysqli_close($conn);
?>
