<?php
	include "../koneksi.php";
	$op=isset($_REQUEST['op'])?$_REQUEST['op']:null;
if($op=='ambilbarang'){
	$data=mysqli_query($conn, "SELECT * from data_ktp");
	echo "<option>NIK</option>";
	while($r=mysqli_fetch_array($data)){
		echo "<option value='$r[nik]'>$r[nik]</option>";
	}
}else if($op=='ambil_kk'){
	$data=mysqli_query($conn, "SELECT * from data_kk");
	echo "<option>No KK</option>";
	while($r=mysqli_fetch_array($data)){
		echo "<option value='$r[no_kk]'>$r[no_kk]</option>";
	}
}else if($op=='simpan'){

		$no_kk=$_REQUEST['no_kk'];
        $nik=$_REQUEST['nik'];

		$simpan=mysqli_query($conn, "insert into detail_kk(id_detail_kk,no_kk,nik) 
			values('','$no_kk','$nik')");

		if($simpan)
		{
			echo "sukses";
		}else{
			echo "Error";
		}
}



?>