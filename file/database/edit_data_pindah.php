<?php

	include "../../db/koneksi.php";

	if(isset($_REQUEST['update']))
	{

			$tanggal_pindah = $_REQUEST['tanggal_pindah'];
 			$nik = $_REQUEST['nik'];
 			$keterangan = $_REQUEST['keterangan'];
			
			$update = mysqli_query($conn, "UPDATE data_pindah SET tanggal_pindah='$tanggal_pindah', keterangan='$keterangan' WHERE nik='$nik'");
 
			if($update)
			{
				echo '<script>alert("data berhasil diupdate");window.location="../data_pindah.php"</script>';
			} else{
				echo '<script>alert("data gagal diupdate");window.location="../edit_data_pindah.php"</script>';
			}
	}
	
?>