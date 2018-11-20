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
	<title>Kartu Keluarga</title>
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
		<h4 style="color:#939393"><i class="fa fa-user"></i> Update Data KK</h4>
		<hr />
		<br />
		<?php
			include "koneksi.php";

			$id_kk = $_REQUEST['id_kk'];

			$sql = mysqli_query($conn, "select * from data_kk where id_kk='$id_kk'");

			if(mysqli_num_rows($sql) == 0)
			{
				echo '<script>window.history.back()</script>';
			} else {
				$data = mysqli_fetch_assoc($sql);
			}
		?>
		<form action="database/edit_kk.php" method="post">
			<div class="col m10 s12">

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="hidden" id="id_kk" class="validate" name="id_kk" value="<?php echo $data['id_kk'];?>">
						<label for="id_ktp"></label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="no_kk" class="validate" name="no_kk" value="<?php echo $data['no_kk'];?>" readonly>
						<label for="no_kk">NO KK</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="kelurahan" class="validate" name="kelurahan" value="<?php echo $data['kelurahan'];?>">
						<label for="no_kk">Kelurahan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="dusun" class="validate" name="dusun" value="<?php echo $data['dusun'];?>">
						<label for="dusun">Dusun</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="kecamatan" class="validate" name="kecamatan" value="<?php echo $data['kecamatan'];?>">
						<label for="kecamatan">Kecamatan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="rt_rw" class="validate" name="rt_rw" value="<?php echo $data['rt_rw'];?>">
						<label for="rt_rw">RT / RW</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="provinsi" class="validate" name="provinsi" value="<?php echo $data['provinsi'];?>">
						<label for="provinsi">Provinsi</label>
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