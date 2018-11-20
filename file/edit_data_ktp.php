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
		<h4 style="color:#939393"><i class="fa fa-user"></i> Update Data KTP</h4>
		<hr />
		<br />
		<?php
			include "koneksi.php";

			$id_ktp = $_REQUEST['id_ktp'];

			$sql = mysqli_query($conn, "select * from data_ktp where id_ktp='$id_ktp'");

			if(mysqli_num_rows($sql) == 0)
			{
				echo '<script>window.history.back()</script>';
			} else {
				$data = mysqli_fetch_assoc($sql);
			}
		?>
		<form action="database/edit.php" method="post">
			<div class="col m10 s12">

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="hidden" id="id_ktp" class="validate" name="id_ktp" value="<?php echo $data['id_ktp'];?>">
						<label for="id_ktp"></label>
					</div>
				</div>

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="nik" class="validate" name="nik" value="<?php echo $data['nik'];?>">
						<label for="nik">NIK</label>
					</div>
					<div class="input-field col m8 s12">
						<input type="text" id="alamat" class="validate" name="alamat" value="<?php echo $data['alamat'];?>">
						<label for="alamat">Alamat</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="nama" class="validate" name="nama" value="<?php echo $data['nama'];?>">
						<label for="nama">Nama</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="rt_rw" class="validate" name="rt_rw" value="<?php echo $data['rt_rw'];?>">
						<label for="rt_rw">RT/RW</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="tempat_lahir" class="validate" name="tempat_lahir" value="<?php echo $data['tempat_lahir'];?>">
						<label for="tempat_lahir">Tempat Lahir</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="kelurahan" class="validate" name="kelurahan" value="<?php echo $data['kelurahan'];?>">
						<label for="kelurahan">Kelurahan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="tanggal_lahir" class="validate" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir'];?>">
						<label for="tanggal_lahir">Tanggal Lahir(YYYY-MM-DD)</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="kecamatan" class="validate" name="kecamatan" value="<?php echo $data['kecamatan'];?>">
						<label for="kecamatan">Kecamatan</label>
					</div>
				</div>
				<div class="row">
					<div class="col m4 s12">
						<input type="radio" id="jk" name="jk" value="Laki-Laki" <?php if($data['jk'] == 'Laki-Laki') { echo 'checked'; } ?>>
						<label for="jk">Laki-Laki</label>
						<input type="radio" id="jk" name="jk" value="Perempuan" <?php if($data['jk'] == 'Perempuan') { echo 'checked'; } ?>>
						<label for="jk">Perempuan</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="status" class="validate" name="status" value="<?php echo $data['status'];?>">
						<label for="status">Status</label>
					</div>
				</div>
				<div class="row">
					<div class="col m4 s12">
						<label>Golongan Darah</label>
						<select class="browser-default" name="goldar" id="goldar">
							<option value="A" <?php if($data['goldar'] == 'A'){ echo 'selected'; } ?>>A</option>
							<option value="B" <?php if($data['goldar'] == 'B'){ echo 'selected'; } ?>>B</option>
							<option value="AB" <?php if($data['goldar'] == 'AB'){ echo 'selected'; } ?>>AB</option>
							<option value="O" <?php if($data['goldar'] == 'O'){ echo 'selected'; } ?>>O</option>
						</select>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="pekerjaan" class="validate" name="pekerjaan" value="<?php echo $data['pekerjaan'];?>">
						<label for="pekerjaan">Pekerjaan</label>
					</div>
				</div>
				<div class="row">
					<div class="col m4 s12">
						<label>Agama</label>
						<select class="browser-default" name="agama" id="agama">
							<option value="Islam" <?php if($data['agama'] == 'Islam'){ echo 'selected'; } ?>>Islam</option>
							<option value="Kristen" <?php if($data['agama'] == 'Kristen'){ echo 'selected'; } ?>>Kristen</option>
							<option value="Budha" <?php if($data['agama'] == 'budha'){ echo 'selected'; } ?>>Budha</option>
							<option value="Hindu" <?php if($data['agama'] == 'Hindu'){ echo 'selected'; } ?>>Hindu</option>
						</select>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="kewarganegaraan" class="validate" name="kewarganegaraan" value="<?php echo $data['kewarganegaraan'];?>">
						<label for="kewarganegaraan">Kewarganegaraan</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="masa" class="validate" name="masa" value="<?php echo $data['masa'];?>">
						<label for="masa">Masa Berlaku(YYYY-MM-DD)</label>
					</div>
				</div>

				<div class="row right">
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