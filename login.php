<?php
	require_once "db/koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initiat-scale=1">
	<meta name="descriptiton" content="">
	<meta name="author" content="">
	<title>Form Login</title>
	<!-- Bootstrap core CSS -->
	<link rel="stylesheet" type="text/css" href="<?=base_url('css/Bootstrap.css');?>">
	<link rel="icon" href="<?=base_url('gambar/lock.png')?>">
</head>
<body style="background: #28324E;">
	<div class="modal-header">
		<h1 style="color: #ffffff;"><em><center>Sistem Informasi Desa</center></em></h1>
	</div>
	<div id="wrapper">
		<div class="container">
			<div align="center" style="margin-top:210px;">
				<?php
				if(isset($_POST['login'])){
					$user = trim(mysqli_real_escape_string($conn, $_POST['user']));
					$pass = sha1(trim(mysqli_real_escape_string($conn, $_POST['pass'])));
					$sql_login = mysqli_query($conn, "select * from login where username='$user' and password='$pass'")or die(mysqli_error($conn));
					$hasil = mysqli_fetch_array($sql_login);
					$nama = $hasil['nama'];
					if(mysqli_num_rows($sql_login) > 0 ){
						$_SESSION['nama'] = $nama;
						echo "<script>window.location='".base_url()."';</script>";
					}else{ ?>
						<div class="row">
							<div class="col-lg-6 col-lg-offset-3">
								<div class="alert alert-danger alert-dismissable" role="alert">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
								<strong>Login gagal !</strong> Username / Password salah
							</div>
						</div>
					</div>
					<?php

					}
				}
				?>
				<form action="" method="post" class="navbar-form">
					<div class="modal">
						<h3><em>Silahkan Masuk</em></h3>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						<input type="text" name="user" class="form-control" placeholder="Masukan Username Anda" required autofocus>
					</div>
					<div class="input-group">
						<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
						<input type="password" name="pass" class="form-control" placeholder="Masukan Password Anda" required>
					</div>
					<div class="input-group"><br>
						<input type="submit" name="login" class="btn btn-primary" value="Login">
						<input type="reset" name="reset" class="btn btn-warning" value="reset">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="<?=base_url('js/jquery.js')?>"></script>
	<script src="<?=base_url('js/Bootstrap.js')?>"></script>
	<br><br><br>
	<br><br><br>
	<footer>
	<div class="modal-footer">
		<span><center>@2018 Login | Project by: Aqly Hermawan</center></span>
	</div>
</footer>
</body>
</html>