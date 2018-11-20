<?php
	include "../koneksi.php";
	
	$id = $_REQUEST['id_datang'];
	
	$sql = mysqli_query($conn,"DELETE FROM data_datang WHERE id_datang='$id'");
	
	if($sql){
		header("location:../data_datang.php");
	}else{
		echo "gagal meng-hapus";
	}

?>