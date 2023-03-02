<?php

include 'connect.php';

$id_pemesanan=$_POST['id_pemesanan'];

$query = mysqli_query(
    $conn,
    " 
    DELETE FROM pemesanan WHERE id_pemesanan='$id_pemesanan'
    "
);

if ($query) {
?>
<script type="text/javascript">
    alert("Hapus Data Berhasil");
    window.location='datapemesanan.php';
</script>
<?php
} else {
    ?>
<script type="text/javascript">
    alert("Ada Kesalahan Saat Hapus Data");
    window.location='datapemesanan.php';
</script>
<?php
}

    ?>