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
	<title>Data Datang</title>
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
		<h4 style="color:#939393"><i class="fa fa-user"></i> Tambah Data Datang</h4>
		<hr />
		<br />
		<form action="database/simpan_datang.php" method="post">
			<div class="col m10 s12">

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="tanggal_datang" class="validate" name="tanggal_datang" value="">
						<label for="tanggal_datang">Tanggal Datang</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="nik" class="validate" name="nik" value="">
						<label for="nik">NIK</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="asal" class="validate" name="asal" value="">
						<label for="asal">Asal</label>
					</div>
				</div>
										
				<div class="row right" style="padding-right: 58%">
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