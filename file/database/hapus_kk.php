<?php
	include "../koneksi.php";
	
	$id = $_REQUEST['id_kk'];
	
	$sql = mysqli_query($conn,"DELETE FROM data_kk WHERE id_kk='$id'");
	
	if($sql){
		header("location:../kk.php");
	}else{
		echo "gagal meng-hapus";
	}

?>