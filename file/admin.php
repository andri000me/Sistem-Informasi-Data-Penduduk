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
	<title>Form Admin</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<script type="text/javascript">
			$(window).load(function(){$("#loading").fadeOut('slow');});
	</script>
	<script>
		var id;
		var nama;
		var user;
		var pass;

		$(function(){
			$("#simpan").click(function(){
				pass=$("#pass").val();
				if(pass==""){
					alert("Password Tidak Boleh Kosong");
					exit();
			}
			id=$("#id").val();
			nama=$("#nama").val();
			user=$("#user").val();

			$("#loading").show();

			$.ajax({
				url:"database/ganti.php",
				data:"op=simpan&id="+id+"&nama="+nama+"&user="+user+"&pass="+pass,
				cache:false,
				success:function(msg){
					if(msg=="sukses"){
						alert("Data berhasil Diubah");
					}else{
						alert("Error. . .");
					}
					$("#loading").hide();
				}
			});
		});
	});
	</script>
</head>
<body style="font-family: cyan;">
	<header style="background-color:#28324E;width: 100%;">
		<div id="container">
			<img src="../gambar/pwk.jpg" style="width: 110px;height: 110px;padding-left:11px">
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
			<li><a href="kk.php"><img src="../gambar/dokumen.png" style="width: 20px;height: 15px;"> Kartu Keluarga</a></li>
			<li><a href="admin.php"><img src="../gambar/images.png" style="width: 20px;height: 15px;"> Admin</a></li>
			<li><a href="../keluar.php"><img src="../gambar/images-1.jpeg" style="width: 20px;height: 15px;"> Log Out</a></li>
		</ul>
	</nav>
	<center>
		<div class="form-actions" style="background-color: #90ee90;width:90%;height:12px;">
			<span style="padding-right: 90%;font-size: 16px;">Ubah Data Admin</span>
		</div>
	</center>
	<br>
	<br>
	<?php
		include "koneksi.php";
			$data=mysqli_fetch_array(mysqli_query($conn, "select * from login"));

		$p=isset($_GET['act'])?$_GET['act']:null;
		switch ($p) {
			default:
				echo ' <table align="center">
							<tr>
								<td>ID Admin</td>
		   					    <td><input type="text" id="id" value="'.$data['id'].'" readonly></td>
		   					</tr>
		   					<tr>
		   						<td>Nama Admin</td>
					  			<td><input type="text" id="nama" value="'.$data['nama'].'"></td>
		   					</tr>
		   					<tr>
					  			<td>User Login</td>
					  			<td><input type="text" id="user" value="'.$data['username'].'"></td>
					 		</tr>
					 		<tr>
					  			<td>Password Admin</td>
					  			<td><input type="password" id="pass" value="'.$data['password'].'"></td>
					  		</tr>
					  		<tr>
					  			<th><button id="simpan" class="btn-primary btn-primary">Simpan</button>
					  				<a href="../index.php" class="btn" style="background:red;color:#fff;">Batal</a></th>
					  		</tr>
					  	</table>
						';
					break;
			}
		
	?>
	<br>
	<span style="padding-left:20%;color:red; ">Perhatian ! jika Password kosong data tidak akan terganti</span>

	<div class="carousel-caption" style="text-align: center;color:#ffffff">Copyright @ 2018 Kecamatan Plered | Project By : Aqkly Hermawan</div>	
</body>
</html>
<?php } ?>