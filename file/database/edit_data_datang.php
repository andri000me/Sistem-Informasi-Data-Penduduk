<?php

	include "../../db/koneksi.php";

	if(isset($_REQUEST['update']))
	{

			$tanggal_datang = $_REQUEST['tanggal_datang'];
 			$nik = $_REQUEST['nik'];
 			$asal = $_REQUEST['asal'];
 			$id_datang = $_REQUEST['id_datang'];
			
			$update = mysqli_query($conn, "UPDATE data_datang SET tanggal_datang='$tanggal_datang', nik='$nik', asal='$asal' WHERE id_datang='$id_datang'");
 
			if($update)
			{
				echo '<script>alert("data berhasil diupdate");window.location="../data_datang.php"</script>';
			} else{
				echo '<script>alert("data gagal diupdate");window.location="../edit_data_pindah.php"</script>';
			}
	}
	
?>