<?php
	date_default_timezone_set('Asia/Jakarta');
	session_start();

	$conn=mysqli_connect('localhost','root','','data_penduduk');
	if(mysqli_connect_error()){
		echo mysqli_connect_error();
	}

	function base_url($url = null){
		$base_url = "http://localhost/data_penduduk";
		if($url != null){
			return $base_url."/".$url;
		}else{
			return $base_url;
		}
	}
?>