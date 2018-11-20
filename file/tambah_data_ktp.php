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
			<li><a href="admin.php"><img src="../gambar/images.png" style="width: 20px;height: 15px;"> Admin</a></li>
			<li><a href="../keluar.php"><img src="../gambar/images-1.jpeg" style="width: 20px;height: 15px;"> Log Out</a></li>
		</ul>
	</nav>
	<br />
	<br />
	<br />
	<div  class="col m10 s12 offset-m1">
		<h4 style="color:#939393"><i class="fa fa-user"></i> Tambah Data KTP</h4>
		<hr />
		<br />
		<form action="database/proses.php" method="post">
			<div class="col m10 s12">

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="nik" class="validate" name="nik" value="">
						<label for="nik">NIK</label>
					</div>
					<div class="input-field col m8 s12">
						<input type="text" id="alamat" class="validate" name="alamat" value="">
						<label for="alamat">Alamat</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="nama" class="validate" name="nama" value="">
						<label for="nama">Nama</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="rt_rw" class="validate" name="rt_rw" value="">
						<label for="rt_rw">RT/RW</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="tempat_lahir" class="validate" name="tempat_lahir" value="">
						<label for="tempat_lahir">Tempat Lahir</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="kelurahan" class="validate" name="kelurahan" value="">
						<label for="kelurahan">Kelurahan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="tanggal_lahir" class="validate" name="tanggal_lahir" value="">
						<label for="tanggal_lahir">Tanggal Lahir(YYYY-MM-DD)</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="kecamatan" class="validate" name="kecamatan" value="">
						<label for="kecamatan">Kecamatan</label>
					</div>
				</div>
				<div class="row">
					<div class="col m4 s12">
						<input type="radio" id="jk" name="jk" value="Laki-Laki">
						<label for="jk">Laki-Laki</label>
						<input type="radio" id="jk" name="jk" value="Perempuan">
						<label for="jk">Perempuan</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="status" class="validate" name="status" value="">
						<label for="status">Status</label>
					</div>
				</div>
				<div class="row">
					<div class="col m4 s12">
						<label>Golongan Darah</label>
						<select class="browser-default" name="goldar" id="goldar">
							<option value="A">A</option>
							<option value="B">B</option>
							<option value="AB">AB</option>
							<option value="O">O</option>
						</select>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="pekerjaan" class="validate" name="pekerjaan" value="">
						<label for="pekerjaan">Pekerjaan</label>
					</div>
				</div>
				<div class="row">
					<div class="col m4 s12">
						<label>Agama</label>
						<select class="browser-default" name="agama" id="agama">
							<option value="Islam">Islam</option>
							<option value="Kristen">Kristen</option>
							<option value="Budha">Budha</option>
							<option value="Hindu">Hindu</option>
						</select>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="kewarganegaraan" class="validate" name="kewarganegaraan" value="">
						<label for="kewarganegaraan">Kewarganegaraan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="masa" class="validate" name="masa" value="">
						<label for="masa">Masa Berlaku(YYYY-MM-DD)</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="keterangan" class="validate" name="keterangan" value="">
						<label for="keterangan">Keterangan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="hidden" id="id_ktp" class="validate" name="id_ktp" value="">
						<label for="id_ktp"></label>
					</div>
				</div>
										
				<div class="row right">
					<button type="button" onclick="window.history.go(-1)" class="btn red moves-effect moves-light">Kembali</button>
					<button type="submit" name="submit" value="Submit" class="btn blue moves-effect moves-light">Simpan <i class="fa fa-papper-plane"></i></button>
				</div>

			</div>
		</form>
	</div>
</div>			
</body>
</html>
<?php } ?>