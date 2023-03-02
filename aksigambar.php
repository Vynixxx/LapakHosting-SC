<!DOCTYPE html>
<html>
	<head>
		<title>Upload Gambar</title>
		<link rel="icon" type="iammges/x-icon" href="images/x-icon.png">  
	</head>
	<body>
		<?php 
		include 'connect.php';
		if($_POST['Upload']){
			$id = $_POST['idpemesanan'];
            $ekstensi_yang_diperbolehkan = ['jpg','png'];  
            $nama = $_FILES['buktibayar']['name'];
            $x = explode('.',$nama);
            $ekstensi = strtolower(end($x));
            $ukuran = $_FILES['buktibayar']['size'];
            $direktori_penyimpanan = 'upload/';

            if (in_array($ekstensi, $ekstensi_yang_diperbolehkan)) {
                if ($ukuran < (500*1024)){
                    if(move_uploaded_file($_FILES['buktibayar']['tmp_name'], $direktori_penyimpanan.$nama));
					$query = mysqli_query($conn,"UPDATE pemesanan SET bukti_bayar='$nama', status='2' WHERE id_pemesanan='$id'");
					if($query){
                        echo 'upload berhasil';
					//header location :nama.php?idPesan=$id
                    }else{
                        echo 'gagal upload';
                    }
                }else{
					echo 'Ukuran File terlalu besar';
				}
            }else{
				echo 'Ekstensi yang di upload salah!';
			}
		}
		?>
		
		<!-- <table> 
			<?php 
			$data = mysql_query("select * from upload");
			while($d = mysql_fetch_array($data)){
			?>
			<tr>
				<td>
					<img src="<?php echo "file/".$d['buktibayar']; ?>">
				</td>		
			</tr>
			<?php } ?>
		</table>-->
	</body>
</html>