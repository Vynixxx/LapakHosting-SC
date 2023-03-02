<?php

include 'connect.php';

$username=$_POST['username'];

$query = mysqli_query(
    $conn,
    " 
    DELETE FROM tbl_cu WHERE username='$username'
    "
);

if ($query) {
?>
<script type="text/javascript">
    alert("Hapus Data Berhasil");
    window.location='datauser.php';
</script>
<?php
} else {
    ?>
<script type="text/javascript">
    alert("Ada Kesalahan Saat Hapus Data");
    window.location='datauser.php';
</script>
<?php
}

    ?>