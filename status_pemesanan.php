<?php
include 'connect.php';

$status = $_GET['s'];
if($status == '1')
{
    $st = 2;
}
else
{
    $st = 1;
}


$id_pemesanan = $_GET['id'];

mysqli_query(
    $conn,
    "UPDATE pemesanan SET status='$st' WHERE id_pemesanan ='$id_pemesanan'"
);
header("location:datapemesanan.php");
    mysqli_close($conn);
    ?>
