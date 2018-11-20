<?php

	include "../../db/koneksi.php";

		if(isset($_REQUEST['submit'])){

 			$no_akta = $_REQUEST['no_akta'];
			$nama_lengkap = $_REQUEST['nama_lengkap'];
			$tanggal_lahir = $_REQUEST['tanggal_lahir'];
			$tempat_lahir = $_REQUEST['tempat_lahir'];
			$nama_ayah = $_REQUEST['nama_ayah'];
			$jk = $_REQUEST['jk'];
			

			$sql = mysqli_query($conn, "insert into data_akta values('','$no_akta', '$nama_lengkap', '$tanggal_lahir', '$tempat_lahir', '$nama_ayah', '$jk')");

			if($sql)
			{
				echo "<script>alert('data berhasil disimpan');window.location='../akta.php'</script>";
			} else {
				echo "gagal menyimpan";
			}
	}
?>