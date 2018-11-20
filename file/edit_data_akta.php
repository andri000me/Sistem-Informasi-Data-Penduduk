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
	<title>Akta Kelahiran</title>
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
		<h4 style="color:#939393"><i class="fa fa-user"></i> Update Data KTP</h4>
		<hr />
		<br />
		<?php
			include "koneksi.php";

			$id_akta = $_REQUEST['id_akta'];

			$sql = mysqli_query($conn, "select * from data_akta where id_akta='$id_akta'");

			if(mysqli_num_rows($sql) == 0)
			{
				echo '<script>window.history.back()</script>';
			} else {
				$data = mysqli_fetch_assoc($sql);
			}
		?>
		<form action="database/edit_akta.php" method="post">
			<div class="col m10 s12">

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="hidden" id="id_akta" class="validate" name="id_akta" value="<?php echo $data['id_akta'];?>">
						<label for="id_akta"></label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="no_akta" class="validate" name="no_akta" value="<?php echo $data['no_akta'];?>">
						<label for="no_akta">No AKta</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="tempat_lahir" class="validate" name="tempat_lahir" value="<?php echo $data['tempat_lahir'];?>">
						<label for="tempat_lahir">Tempat Lahir</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="nama_lengkap" class="validate" name="nama_lengkap" value="<?php echo $data['nama_lengkap'];?>">
						<label for="nama_lengkap">Nama Lengkap</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="nama_ayah" class="validate" name="nama_ayah" value="<?php echo $data['nama_ayah'];?>">
						<label for="nama_ayah">Nama Ayah</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="tanggal_lahir" class="validate" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>">
						<label for="tanggal_lahir">Tanggal Lahir</label>
					</div>
					<div class="col m4 s12">
						<input type="radio" id="jk" name="jk" value="Laki-Laki" <?php if($data['jk'] == 'Laki-Laki') { echo 'checked'; } ?>>
						<label for="jk">Laki-Laki</label>
						<input type="radio" id="jk" name="jk" value="Perempuan" <?php if($data['jk'] == 'Perempuan') { echo 'checked'; } ?>>
						<label for="jk">Perempuan</label>
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