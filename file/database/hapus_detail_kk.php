<?php
	include "../koneksi.php";
	
	$id = $_REQUEST['id_detail_kk'];
	
	$sql = mysqli_query($conn,"DELETE FROM detail_kk WHERE id_detail_kk='$id'");
	
	if($sql){
		header("location:../Detail_kk.php");
	}else{
		echo "gagal meng-hapus";
	}

?>