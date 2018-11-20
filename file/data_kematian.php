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
	<title>Data Kematian</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">

	<script type="text/javascript">
	function PrintDoc(){

		var toPrint=document.getElementById('tabel');
		var popupWin = window.open('');
		popupWin.document.open();
		popupWin.document.write('<html><title>::Print Data::</title><link rel="stylesheet" type="text/css" href="../css/bootstrap.css" /></head><body onload="window.print()">')
		popupWin.document.write(toPrint.outerHTML);
		popupWin.document.write('</html>');
		popupWin.document.close();

	}
	</script>
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
	<br>
		<center>
			<table class="table table-bordered">
				<tr>
					<th class="form-actions">Tabel Data Kematian</th>
				</tr>
				<tr>
					<th><a href="tambah_data_kematian.php" class="btn btn-primary">Tambah Data</a>
					<button class="btn btn-danger" onclick="PrintDoc();"><i class="fa fa-print"></i></button></th>
				</tr>
				</table>
		</center>
		
			<table class="table table-striped table-bordered dt-responsive nowrap" id="tabel">
				<thead>
					<tr>
						<th>No</th>
						<th>Nik</th>
						<th>Tempat Kematian</th>
						<th>Tanggal Kematian</th>
						<th>Umur</th>
						<th>Nama Pelapor</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
				<?php
					include "koneksi.php";

					if(isset($_POST['button'])){
						$search= mysqli_real_escape_string($conn,$_POST["tcari"]);

					$page = (isset($_GET['page']))?$_GET['page'] : 1;

					$limit = 3;

					$limit_start = ($page - 1) * $limit;

					$sql = mysqli_query($conn,"select * from data_kematian where nik LIKE '%".$search."%'");
				}else{
					$page = (isset($_GET['page']))?$_GET['page'] : 1;

					$limit = 3;

					$limit_start = ($page - 1) * $limit;

					$sql = mysqli_query($conn, "select * from data_kematian limit ".$limit_start.",".$limit);
				}
					$no=$limit_start + 1;
					while($row = mysqli_fetch_array($sql)){
				?>
						<tr>
							<td><?php echo $no ?></td>
							<td><?php echo $row['nik']; ?></td>
							<td><?php echo $row['tempat_mati']; ?></td>
							<td><?php echo $row['tanggal_mati']; ?></td>
							<td><?php echo $row['umur']; ?></td>
							<td><?php echo $row['nama_pelapor']; ?></td>
							<td>
								<?php echo '<a href="edit_data_kematian.php?id_kematian='.$row['id_kematian'].'" class="btn btn-priamry"><i class="fa fa-edit"></i></a>';?>
								<?php echo '<a href="database/hapus_kematian.php?id_kematian='.$row['id_kematian'].'" class="btn btn-danger"><i class="fa fa-trash"></i></a>';?>
							</td>
						</tr>
						<?php

						$no++;
					}
			?>
		</tbody>
		</table>

		<form name="form1" method="post" action="">
		<div class="form-actions">

			<div class="row">
				<div class="input-field col m4 s12">
					<input type="text" name="tcari" id="tcari" >
					<label for="tcari">Search:</label>
			 		<input type="submit" name="button" id="button" class="btn btn-warning" value="cari"/>
			 	</div>
			 </div>
			</form>

			<span class="pagination" style="float: right;">

			<ul>

			<?php

				if($page == 1){
			?>

				<li class="disabled"><a href="#">First</a></li>
				<li class="disabled"><a href="#">&laquo;</a></li>
			<?php
			}else{
				$link_prev = ($page > 1)? $page - 1 : 1;
			?>
				<li><a href="data_kematian.php?page=1">First</a></li>
				<li><a href="data_kematian.php?page=<?php echo $link_prev; ?>"> &laquo;</a></li>
			<?php
			}
			?>

			<!-- Link Number-->
			<?php

			$sql2 = mysqli_query($conn, "select count(*) as jumlah from data_kematian");
			$get_jumlah = mysqli_fetch_array($sql2);

			$jumlah_page = ceil($get_jumlah['jumlah'] / $limit);
			$jumlah_number = 3;
			$start_number = ($page > $jumlah_number)? $page - $jumlah_number : 1;
			$end_number = ($page < ($jumlah_page - $jumlah_number))? $page + $jumlah_number : $jumlah_page;

			for($i = $start_number; $i <= $end_number; $i++){
				$link_active = ($page == $i)? ' class="active"' : '';
			?>
				<li<?php echo $link_active; ?>><a href="data_kematian.php?page=<?php echo $i; ?>"><?php echo $i; ?></a></li> 
			<?php
			}
			?>

			<!-- Link Next And Last -->
			<?php

			if($page == $jumlah_page){
			?>
				<li class="disabled"><a href="#">&raquo;</a></li>
				<li class="disabled"><a href="#"> Last</a></li>
			<?php
			}else{
				$link_next = ($page < $jumlah_page)? $page + 1 : $jumlah_page;
			?>
				<li><a href="data_kematian.php?page=<?php echo $link_next; ?>">&raquo;</a></li>
				<li><a href="data_kematian.php?page=<?php echo $jumlah_page; ?>">Last</a></li>
			<?php
			}
			?>
		</ul>
	</span>

		</div>

		<div class="carousel-caption" style="text-align: center;color:#ffffff">Copyright @ 2018 Kecamatan Plered | Project By : Aqkly Hermawan</div>
</body>
</html>
<?php } ?>