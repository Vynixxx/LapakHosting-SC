<?php
include 'connect.php';
$pemasukan = $_POST['pemasukan'];

mysqli_query(
    $conn,
    "UPDATE dana SET pemasukan='$pemasukan'"
);
header("location:data_pemasukan.php");
    mysqli_close($conn);
    ?>
