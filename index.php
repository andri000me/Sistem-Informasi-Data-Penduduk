<?php
	ob_start();
	session_start();
	if(!isset($_SESSION['nama'])){
		header("location:login.php");
	}else{
?>

<!DOCTYPE html>
<html>
<head>
	<title>Beranda</title>
	<script type="text/javascript" src="js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
			$(window).load(function(){$("#loading").fadeOut('slow');});
	</script>
</head>
<body style="background: #ffffff;font-family: cyan;">
	<header style="background-color:#28324E;width: 100%;">
		<div id="container">
			<img src="gambar/pwk.jpg" style="width: 110px;height: 115px;padding-left:0px">
		</div>
	</header>

	<div id="loading" style="position: fixed;left:0px;top: 0px;width:100%;height:100%;z-index: 9999;background: url('gambar/load1.gif') 50%50% no-repeat;"></div>

	<nav>
		<ul>
			<li><a href="index.php"><img src="gambar/home.png" style="width: 20px;height: 15px;"> Home</a></li>
			<li><a href="file/ktp.php"><img src="gambar/dokumen.png" style="width: 20px;height: 15px;"> Kartu Tanda Penduduk</a></li>
			<li><a href="file/kk.php"><img src="gambar/dokumen.png" style="width: 20px;height: 15px;"> Kartu Keluarga</a></li>
			<li><a href="file/akta.php"><img src="gambar/dokumen.png" style="width: 20px;height: 15px;"> Akta Kelahiran</a></li>
			<li><a href="file/data_kematian.php"><img src="gambar/dokumen.png" style="width: 20px;height: 15px;"> Data Kematian</a></li>
			<li><a href="file/Detail_kk.php"><img src="gambar/dokumen.png" style="width: 20px;height: 15px;"> Detail KK</a></li>
			<li><a href="file/data_pindah.php"><img src="gambar/dokumen.png" style="width: 20px;height: 15px;"> Data Pindah</a></li>
			<li><a href="file/data_datang.php"><img src="gambar/dokumen.png" style="width: 20px;height: 15px;"> Data datang</a></li>
			<li><a href="file/admin.php"><img src="gambar/images.png" style="width: 20px;height: 15px;"> Admin</a></li>
			<li><a href="keluar.php"><img src="gambar/images-1.jpeg" style="width: 20px;height: 15px;"> Log Out</a></li>
		</ul>
	</nav>
	<br><br><br>
	<center>
<div style="background-color: #25f25f;border:1px solid #000;width:95%;height:250px;">
	<span style="padding-right: 1160px;font-size: 16px;">Welcome !</span>
	<p style="padding-right: 990px;font-size: 16px;">Hallo, <?php echo $_SESSION['nama'] ?> Selamat bekerja</p>
	<a href="file/admin.php"><img src="gambar/images.png" style="width: 100px;height: 120px;padding-right: 100px;"></a>
	<a href="file/ktp.php"><img src="gambar/orang.png" style="padding-right: 100px;"></a>
	<a href="file/akta.php"><img src="gambar/home.png" style="width: 100px;height: 140px;padding-right: 100px;"></a>
	<a href="file/keluarga.php"><img src="gambar/dokumen.png" style="width: 100px;height: 100px;padding-right: 100px;"></a>
	<a href="file/data_kematian.php"><img src="gambar/dokumen.png" style="width: 100px;height: 100px;padding-right: 100px;"></a>
	<br>
	<span style="padding-right: 165px;">Pengguna</span>
	<span style="padding-right: 160px;">Data KTP</span>
	<span style="padding-right: 140px;">Data Akta</span>
	<span style="padding-right: 110px;">Data Keluarga</span>
	<span style="padding-right: 120px;">Data Kematian</span>
</div>
</center>
<br>
<center>
	<div class="modal-footer" style="background-color: #000;width:93%;height:10px;">
		<span style="color:#ffffff;"><center>@ 2018 Kecamatan Plered | Project by: Aqkly Hermawan</center></span>
	</div>
</center>
<div class="carousel-caption"></div>
</body>
</html>
<?php } ?>