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
	<title>Update Data Kematian</title>
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
		<h4 style="color:#939393"><i class="fa fa-user"></i> Update Data Kematian</h4>
		<hr />
		<br />
		<?php
			include "koneksi.php";

			$id_kematian = $_REQUEST['id_kematian'];

			$sql = mysqli_query($conn, "select * from data_kematian where id_kematian='$id_kematian'");

			if(mysqli_num_rows($sql) == 0)
			{
				echo '<script>window.history.back()</script>';
			} else {
				$data = mysqli_fetch_assoc($sql);
			}
		?>
		<form action="database/edit_data_kematian.php" method="post">
			<div class="col m10 s12">

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="hidden" id="id_kematian" class="validate" name="id_kematian" value="<?php echo $data['id_kematian'];?>">
						<label for="id_kematian"></label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="nik" class="validate" name="nik" value="<?php echo $data['nik'];?>" readonly>
						<label for="nik">NIK</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="tempat_mati" class="validate" name="tempat_mati" value="<?php echo $data['tempat_mati'];?>">
						<label for="tempat_mati">Tempat Mati</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="tanggal_mati" class="validate" name="tanggal_mati" value="<?php echo $data['tanggal_mati'];?>">
						<label for="tanggal_mati">Tanggal Mati</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="umur" class="validate" name="umur" value="<?php echo $data['umur'];?>">
						<label for="umur">Umur</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="sebab_mati" class="validate" name="sebab_mati" value="<?php echo $data['sebab_mati'];?>">
						<label for="sebab_mati">Sebab Mati</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="makam" class="validate" name="makam" value="<?php echo $data['makam'];?>">
						<label for="makam">Makam</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="nama_pelapor" class="validate" name="nama_pelapor" value="<?php echo $data['nama_pelapor'];?>">
						<label for="nama_pelapor">Nama Pelapor</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="hubungan_pelapor" class="validate" name="hubungan_pelapor" value="<?php echo $data['hubungan_pelapor'];?>">
						<label for="hubungan_pelapor">Hubungan Pelapor</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="hidden" id="id_ktp" class="validate" name="id_ktp" value="<?php echo $data['id_ktp'];?>">
						<label for="id_ktp"></label>
					</div>
				</div>


				<div class="row right" style="padding-right: 58%">
					<button type="button" onclick="window.history.go(-1)" class="btn red moves-effect moves-light">Kembali</button>
					<button type="submit" name="update" value="Update" class="btn blue moves-effect moves-light">Update <i class="fa fa-papper-plane"></i></button>
				</div>

			</div>
		</form>
	</div>
</div>			
</body>
</html>
<?php } ?>