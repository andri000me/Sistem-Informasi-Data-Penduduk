<?php
	include "../koneksi.php";
	
	$id = $_REQUEST['id_ktp'];
	
	$sql = mysqli_query($conn,"DELETE FROM data_ktp WHERE id_ktp='$id'");
	
	if($sql){
		header("location:../ktp.php");
	}else{
		echo "gagal meng-hapus";
	}

?>