<!DOCTYPE html>
<html>
<head>
	<title>Kartu Tanda Penduduk</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
</head>
<body style="background: #ffffff;font-family: cyan;">
	<header style="background-color:#28324E;width: 100%;">
		<div id="container">
			<img src="../gambar/pwk.jpg" style="width: 110px;height: 110px">
	</header>
	<nav>
		<ul>
			<li><a href="../index.php"><img src="../gambar/home.png" style="width: 20px;height: 15px;"> Home</a></li>
			<li><a href="ktp.php"><img src="../gambar/dokumen.png" style="width: 20px;height: 15px;"> Kartu Tanda Penduduk</a></li>
			<li><a href="kk.php"><img src="../gambar/dokumen.png" style="width: 20px;height: 15px;"> Kartu Keluarga</a></li>
			<li><a href="akta.php"><img src="../gambar/dokumen.png" style="width: 20px;height: 15px;"> Akta Kelahiran</a></li>
			<li><a href="data_kematian.php"><img src="../gambar/dokumen.png" style="width: 20px;height: 15px;"> Data Kematian</a></li>
			<li><a href="Detail_kk.php"><img src="../gambar/dokumen.png" style="width: 20px;height: 15px;"> Detail KK</a></li>
			<li><a href="data_pindah.php"><img src="../gambar/dokumen.png" style="width: 20px;height: 15px;"> Data Pindah</a></li>
			<li><a href="data_datang.php"><img src="../gambar/dokumen.png" style="width: 20px;height: 15px;"> Data datang</a></li>
			<li><a href="laporan.php"><img src="../gambar/dokumen.png" style="width: 20px;height: 15px;"> Laporan</a></li>
			<li><a href="admin.php"><img src="../gambar/images.png" style="width: 20px;height: 15px;"> Admin</a></li>
			<li><a href="../keluar.php"><img src="../gambar/images-1.jpeg" style="width: 20px;height: 15px;"> Log Out</a></li>
		</ul>
	</nav>
	<br />
	<h3>Detail Data KTP</h3>
	<table class="table table-striped table-bordered dt-responsive nowrap">
		<thead>
			<tr>
				<th>#</th>
				<th>Nik</th>
				<th>Nama</th>
				<th>Tempat Lahir</th>
				<th>Tanggal Lahir</th>
				<th>Jenis Kelamin</th>
				<th>golongan Darah</th>
				<th>Alamat</th>
				<th>Rt/Rw</th>
				<th>Kelurahan</th>
				<th>Kecamatan</th>
				<th>Agama</th>
				<th>Status</th>
				<th>Pekerjaan</th>
				<th>Kewarganegaraan</th>
				<th>Masa Berlaku</th>
			</tr>
		</thead>
		<tbody>
			<?php
				include "koneksi.php";

				$i = 1;

				$id_ktp = $_REQUEST['id_ktp'];

				$sql = mysqli_query($conn, "SELECT * FROM data_ktp WHERE id_ktp='$id_ktp'");

				while($r = mysqli_fetch_array($sql)){
			?>
			<tr>
				<td><?php echo $i++ ?></td>
				<td><?php echo $r["nik"]; ?></td>
				<td><?php echo $r["nama"]; ?></td>
				<td><?php echo $r["tempat_lahir"]; ?></td>
				<td><?php echo $r["tanggal_lahir"]; ?></td>
				<td><?php echo $r["jk"]; ?></td>
				<td><?php echo $r["goldar"]; ?></td>
				<td><?php echo $r["alamat"]; ?></td>
				<td><?php echo $r["rt_rw"]; ?></td>
				<td><?php echo $r["kelurahan"]; ?></td>
				<td><?php echo $r["kecamatan"]; ?></td>
				<td><?php echo $r["agama"]; ?></td>
				<td><?php echo $r["status"]; ?></td>
				<td><?php echo $r["pekerjaan"]; ?></td>
				<td><?php echo $r["kewarganegaraan"]; ?></td>
				<td><?php echo $r["masa"]; ?></td>
			</tr>
		</tbody>
		<?php } ?>
	</table>
	<br />
		<button type="button" onclick="window.history.go(-1)" style="" class="btn btn-danger">Kembali</button>
</body>
</html>

