<?php
	include "../koneksi.php";
	
	$id = $_REQUEST['id_kematian'];
	
	$sql = mysqli_query($conn,"DELETE FROM data_kematian WHERE id_kematian='$id'");
	
	if($sql){
		header("location:../data_kematian.php");
	}else{
		echo "gagal meng-hapus";
	}

?>