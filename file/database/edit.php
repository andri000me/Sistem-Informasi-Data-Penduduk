<?php

	include "../../db/koneksi.php";

	if(isset($_REQUEST['update']))
	{

			$id_ktp = $_REQUEST['id_ktp'];
 			$nik = $_REQUEST['nik'];
			$nama = $_REQUEST['nama'];
			$tempat_lahir = $_REQUEST['tempat_lahir'];
			$tanggal_lahir = $_REQUEST['tanggal_lahir'];
			$jk = $_REQUEST['jk'];
			$goldar = $_REQUEST['goldar'];
			$alamat = $_REQUEST['alamat'];
			$rt = $_REQUEST['rt_rw'];
			$kelurahan = $_REQUEST['kelurahan'];
			$kecamatan = $_REQUEST['kecamatan'];
			$agama = $_REQUEST['agama'];
			$status = $_REQUEST['status'];
			$pekerjaan = $_REQUEST['pekerjaan'];
			$kewarganegaraan = $_REQUEST['kewarganegaraan'];
			$masa = $_REQUEST['masa'];

			$update = mysqli_query($conn, "UPDATE data_ktp SET nik='$nik', nama='$nama', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jk='$jk', goldar='$goldar', alamat='$alamat', rt_rw='$rt', kelurahan='$kelurahan', kecamatan='$kecamatan', agama='$agama', status='$status', pekerjaan='$pekerjaan', kewarganegaraan='$kewarganegaraan', masa='$masa' WHERE id_ktp='$id_ktp'");
 
			if($update)
			{
				echo '<script>alert("data berhasil diupdate");window.location="../ktp.php"</script>';
			} else{
				echo '<script>alert("data gagal diupdate");window.location="../edit_data_ktp.php"</script>';
			}
	}
	
?>