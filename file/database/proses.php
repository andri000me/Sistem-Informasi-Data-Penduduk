<?php

	include "../../db/koneksi.php";

		if(isset($_REQUEST['submit'])){

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
			$keterangan = $_REQUEST['keterangan'];

			$sql = mysqli_query($conn, "insert into data_ktp values('','$nik', '$nama', '$tempat_lahir', '$tanggal_lahir', '$jk', '$goldar', '$alamat', '$rt', '$kelurahan', '$kecamatan', '$agama', '$status', '$pekerjaan', '$kewarganegaraan', '$masa','$keterangan')");

			if($sql)
			{
				echo "<script>alert('data berhasil disimpan');window.location='../ktp.php'</script>";
			} else {
				echo "gagal menyimpan";
			}
	}
?>