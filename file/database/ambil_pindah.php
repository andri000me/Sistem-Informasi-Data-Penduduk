<?php
	include "../koneksi.php";
	$op=isset($_REQUEST['op'])?$_REQUEST['op']:null;
if($op=='ambilbarang'){
	$data=mysqli_query($conn, "SELECT * from data_ktp");
	echo "<option>NIK</option>";
	while($r=mysqli_fetch_array($data)){
		echo "<option value='$r[nik]'>$r[nik]</option>";
	}
}else if($op=='ambildata'){
	$nik=$_REQUEST['nik'];
	$dt=mysqli_query($conn, "select * from data_ktp where nik='$nik'");
	$d=mysqli_fetch_array($dt);
	echo $d['id_ktp'];
}else if($op=='simpan'){

		$tanggal_pindah=$_REQUEST['tanggal_pindah'];
        $nik=$_REQUEST['nik'];
        $keterangan=$_REQUEST['keterangan'];
        $id_ktp=$_REQUEST['id_ktp'];

		$simpan=mysqli_query($conn, "insert into data_pindah(id_pindah,tanggal_pindah,nik,keterangan,id_ktp) 
			values('','$tanggal_pindah','$nik','$keterangan','$id_ktp')");

		if($simpan)
		{
			mysqli_query($conn, "update data_ktp set keterangan='pindah' where id_ktp='$id_ktp'");
			echo "sukses";
		}else{
			echo "Error";
		}
}


?>