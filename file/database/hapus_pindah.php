<?php
	include "../koneksi.php";
	
	$id = $_REQUEST['id_pindah'];
	
	$sql = mysqli_query($conn,"DELETE FROM data_pindah WHERE id_pindah='$id'");
	
	if($sql){
		header("location:../data_pindah.php");
	}else{
		echo "gagal meng-hapus";
	}

?>