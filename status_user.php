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
$no_hp = $_GET['id'];

mysqli_query(
    $conn,
    "UPDATE tbl_cu SET status='$st' WHERE no_hp ='$no_hp'"
);
header("location:datauser.php");
    mysqli_close($conn);
    ?>
