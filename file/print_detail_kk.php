<?php
	ob_start();
	session_start();
	if(!isset($_SESSION['nama'])){
		header("location:../login.php");
	}else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail Kartu Keluarga</title>
<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">

	<script type="text/javascript">
	function PrintDoc(){

		var toPrint=document.getElementById('tabel');
		var popupWin = window.open('');
		popupWin.document.open();
		popupWin.document.write('<html><title>::Print Data::</title><link rel="stylesheet" type="text/css" href="../css/bootstrap.css" /></head><body onload="window.print()">')
		popupWin.document.write(toPrint.outerHTML);
		popupWin.document.write('</html>');
		popupWin.document.close();

	}
	</script>
</head>
<body>
	<h3><center>Laporan Detail Kartu Keluarga</center></h3>

			<table class="table table-striped table-bordered dt-responsive nowrap" id="tabel">
				<thead>
					<tr>
						<th>#</th>
						<th>No KK</th>
						<th>Dusun</th>
						<th>Kelurahan</th>
						<th>Kecamatan</th>
						<th>Nama</th>
						<th>RT / RW</th>
						<th>Pekerjaan</th>
						<th>Kewarganegaraan</th>
						<th>Alamat</th>
					</tr>
				</thead>
				<tbody>
				<?php
					include "koneksi.php";

					$no=1;

					$nik = $_REQUEST['nik'];

					$sql = mysqli_query($conn, "select data_kk.no_kk, data_kk.dusun, data_kk.kelurahan, data_kk.kecamatan, data_ktp.nama, data_ktp.rt_rw, data_ktp.pekerjaan, data_ktp.kewarganegaraan, data_ktp.alamat
						from data_ktp, data_kk
						where data_kk.nik=data_ktp.nik and data_ktp.nik='$nik'");
			
					while($row = mysqli_fetch_array($sql)){
				?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $row['no_kk']; ?></td>
							<td><?php echo $row['dusun']; ?></td>
							<td><?php echo $row['kelurahan']; ?></td>
							<td><?php echo $row['kecamatan']; ?></td>
							<td><?php echo $row['nama']; ?></td>
							<td><?php echo $row['rt_rw']; ?></td>
							<td><?php echo $row['pekerjaan']; ?></td>
							<td><?php echo $row['kewarganegaraan']; ?></td>
							<td><?php echo $row['alamat']; ?></td>
						</tr>
						<?php

						$no++;
					}
			?>
		</tbody>
	</table>
	<br/>
	<center>
		<button class="btn btn-danger" onclick="PrintDoc();">Cetak</button>
		<button type="button" onclick="window.history.go(-1)" class="btn btn-warning">Kembali</button>
	</center>
		
</body>
</html>
<?php } ?>