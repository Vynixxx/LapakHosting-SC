<?php
include 'connect.php';

$status = $_GET['s'];
if($status == '0')
{
    $st = 1;
}
else
{
    $st = 0;
}
$ID_Hosting = $_GET['id'];

mysqli_query(
    $conn,
    "UPDATE tbl_transaksi SET status='$st' WHERE ID_Hosting ='$ID_Hosting'"
);
header("location:invoice.php");
    mysqli_close($conn);
    ?>
