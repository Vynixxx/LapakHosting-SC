<?php

include 'connect.php';

$ID_Reseller=$_POST['ID_Reseller'];

$query = mysqli_query(
    $conn,
    " 
    DELETE FROM tbl_promosi WHERE ID_Reseller='$ID_Reseller'
    "
);

if ($query) {
?>
<script type="text/javascript">
    alert("Hapus Data Berhasil");
    window.location='danahosting.php';
</script>
<?php
} else {
    ?>
<script type="text/javascript">
    alert("Ada Kesalahan Saat Hapus Data");
    window.location='danahosting.php';
</script>
<?php
}

    ?>