<?php

	include "../../db/koneksi.php";

		if(isset($_REQUEST['submit'])){

 			$no_kk = $_REQUEST['no_kk'];
 			$nik = $_REQUEST['nik'];
			$dusun = $_REQUEST['dusun'];
			$rt = $_REQUEST['rt_rw'];
			$kelurahan = $_REQUEST['kelurahan'];
			$kecamatan = $_REQUEST['kecamatan'];
			$provinsi = $_REQUEST['provinsi'];
			

			$sql = mysqli_query($conn, "insert into data_kk values('','$no_kk', '$nik', '$dusun', '$rt', '$kelurahan', '$kecamatan', '$provinsi')");

			if($sql)
			{
				echo "<script>alert('data berhasil disimpan');window.location='../kk.php'</script>";
			} else {
				echo "gagal menyimpan";
			}
	}
?>