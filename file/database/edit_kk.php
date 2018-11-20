<?php

	include "../../db/koneksi.php";

	if(isset($_REQUEST['update']))
	{

			$id_kk = $_REQUEST['id_kk'];
 			$no_kk = $_REQUEST['no_kk'];
			$dusun = $_REQUEST['dusun'];
			$rt = $_REQUEST['rt_rw'];
			$kelurahan = $_REQUEST['kelurahan'];
			$kecamatan = $_REQUEST['kecamatan'];
			$provinsi = $_REQUEST['provinsi'];
			
			$update = mysqli_query($conn, "UPDATE data_kk SET no_kk='$no_kk', dusun='$dusun', rt_rw='$rt', kelurahan='$kelurahan', kecamatan='$kecamatan', provinsi='$provinsi' WHERE id_kk='$id_kk'");
 
			if($update)
			{
				echo '<script>alert("data berhasil diupdate");window.location="../kk.php"</script>';
			} else{
				echo '<script>alert("data gagal diupdate");window.location="../edit_data_kk.php"</script>';
			}
	}
	
?>