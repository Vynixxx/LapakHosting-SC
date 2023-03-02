<?php
session_start();
require 'connect.php';
$ID_Hosting = $_GET['ID_Hosting'];
$tgl_pesan = date('Y-m-d');
$no_hp = $_SESSION["noHp"];
$query=mysqli_query($conn, "INSERT INTO pemesanan(tgl_pesan, ID_Hosting, no_hp) VALUES('$tgl_pesan','$ID_Hosting','$no_hp')");

if ($query) {
    ?>
    <script type="text/javascript">
        alert("Tambah Data Berhasil.");
    </script>
    <?php
}else{

        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    ?>
    <script type="text/javascript">
        alert("Terdapat Kesalahan Saat Memasukkan Data.");
    </script>
    <?php


}
header('Location: cartcheckout.php?ID_Hosting='.$ID_Hosting.'');

?>
