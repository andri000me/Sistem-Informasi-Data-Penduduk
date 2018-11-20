<?php

	include "../../db/koneksi.php";

		if(isset($_REQUEST['submit'])){

 			$tanggal_datang = $_REQUEST['tanggal_datang'];
			$nik = $_REQUEST['nik'];
			$asal = $_REQUEST['asal'];

			$sql = mysqli_query($conn, "insert into data_datang values('','$tanggal_datang', '$nik', '$asal')");

			if($sql)
			{
				echo "<script>alert('data berhasil disimpan');window.location='../data_datang.php'</script>";
			} else {
				echo "gagal menyimpan";
			}
	}
?>