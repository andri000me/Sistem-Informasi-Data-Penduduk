<?php
	include "../koneksi.php";
	
	$id = $_REQUEST['id_akta'];
	
	$sql = mysqli_query($conn,"DELETE FROM data_akta WHERE id_akta='$id'");
	
	if($sql){
		header("location:../akta.php");
	}else{
		echo "gagal meng-hapus";
	}

?>