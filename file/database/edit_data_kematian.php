<?php

	include "../../db/koneksi.php";

	if(isset($_REQUEST['update']))
	{

			$id_kematian = $_REQUEST['id_kematian'];
 			$nik = $_REQUEST['nik'];
			$tempat_mati = $_REQUEST['tempat_mati'];
			$tanggal_mati = $_REQUEST['tanggal_mati'];
			$umur = $_REQUEST['umur'];
			$sebab_mati = $_REQUEST['sebab_mati'];
			$makam = $_REQUEST['makam'];
			$nama_pelapor = $_REQUEST['nama_pelapor'];
			$hubungan_pelapor = $_REQUEST['hubungan_pelapor'];
			$id_ktp = $_REQUEST['id_ktp'];
			
			$update = mysqli_query($conn, "UPDATE data_kematian SET nik='$nik', tempat_mati='$tempat_mati', tanggal_mati='$tanggal_mati', umur='$umur', sebab_mati='$sebab_mati', makam='$makam', nama_pelapor='$nama_pelapor', hubungan_pelapor='$hubungan_pelapor', id_ktp='$id_ktp' WHERE id_kematian='$id_kematian'");
 
			if($update)
			{
				echo '<script>alert("data berhasil diupdate");window.location="../data_kematian.php"</script>';
			} else{
				echo '<script>alert("data gagal diupdate");window.location="../edit_data_kematian.php"</script>';
			}
	}
	
?>