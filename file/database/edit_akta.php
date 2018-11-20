<?php

	include "../../db/koneksi.php";

	if(isset($_REQUEST['update']))
	{

			$id_akta = $_REQUEST['id_akta'];
			$no_akta = $_REQUEST['no_akta'];
			$nama_lengkap = $_REQUEST['nama_lengkap'];
			$tanggal_lahir = $_REQUEST['tanggal_lahir'];
			$tempat_lahir = $_REQUEST['tempat_lahir'];
			$nama_ayah = $_REQUEST['nama_ayah'];
			$jk = $_REQUEST['jk'];
			
			$update = mysqli_query($conn, "UPDATE data_akta SET no_akta='$no_akta', nama_lengkap='$nama_lengkap', tanggal_lahir='$tanggal_lahir', tempat_lahir='$tempat_lahir', nama_ayah='$nama_ayah', jk='$jk' WHERE id_akta='$id_akta'");
 
			if($update)
			{
				echo '<script>alert("data berhasil diupdate");window.location="../akta.php"</script>';
			} else{
				echo '<script>alert("data gagal diupdate");window.location="../edit_data_akta.php"</script>';
			}
	}
	
?>