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

		$nik=$_REQUEST['nik'];
        $tempat_mati=$_REQUEST['tempat_mati'];
        $tanggal_mati=$_REQUEST['tanggal_mati'];
        $umur=$_REQUEST['umur'];
        $sebab_mati=$_REQUEST['sebab_mati'];
        $makam=$_REQUEST['makam'];
        $nama_pelapor=$_REQUEST['nama_pelapor'];
        $hubungan_pelapor=$_REQUEST['hubungan_pelapor'];
        $id_ktp=$_REQUEST['id_ktp'];

		$simpan=mysqli_query($conn, "insert into data_kematian(id_kematian,nik,tempat_mati,tanggal_mati,umur,sebab_mati,makam,nama_pelapor,hubungan_pelapor,id_ktp) 
			values('','$nik','$tempat_mati','$tanggal_mati','$umur','$sebab_mati','$makam','$nama_pelapor','$hubungan_pelapor','$id_ktp')");

		if($simpan)
		{
			mysqli_query($conn, "update data_ktp set keterangan='sudah meninggal' where id_ktp='$id_ktp'");
			echo "sukses";
		}else{
			echo "Error";
		}
}

?>