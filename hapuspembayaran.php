<?php

include 'connect.php';

$ID_Hosting=$_POST['ID_Hosting'];

$query = mysqli_query(
    $conn,
    " 
    DELETE FROM tbl_transaksi WHERE ID_Hosting='$ID_Hosting'
    "
);

if ($query) {
?>
<script type="text/javascript">
    alert("Hapus Data Berhasil");
    window.location='invoice.php';
</script>
<?php
} else {
    ?>
<script type="text/javascript">
    alert("Ada Kesalahan Saat Hapus Data");
    window.location='invoice.php';
</script>
<?php
}

    ?>