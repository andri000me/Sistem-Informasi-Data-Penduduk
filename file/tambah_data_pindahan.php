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
	<title>Data Pindah</title>
	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../js/materialize.min.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
	<script type="text/javascript">
		
		var tanggal_pindah;
		var	nik;
        var keterangan;
        var id_ktp;

		$(function(){
        $("#nik").load("database/ambil_pindah.php","op=ambilbarang");

        $("#nik").change(function(){
            nik=$("#nik").val();

            $("status").html("Loading. . .");

            $.ajax({
                url:"database/ambil_pindah.php",
                data:"op=ambildata&nik="+nik,
                cache:false,
                success:function(msg){
                	 data=msg.split("|");

                    $("#id_ktp").val(data[0]);

                    $("#status").html("");
                }
            });
        });

        //ketika tombol simpan diklik

        $("#simpan").click(function(){

            tanggal_pindah=$("#tanggal_pindah").val();
            nik=$("#nik").val();
            keterangan=$("#keterangan").val();
            id_ktp=$("#id_ktp").val();

            $.ajax({
                url:"database/ambil_pindah.php",
                data:"op=simpan&tanggal_pindah="+tanggal_pindah+"&nik="+nik+"&keterangan="+keterangan+"&id_ktp="+id_ktp,
                cache:false,
                success:function(msg){
                    if(msg=='sukses'){
                        $("#status").html('Menyimpan Data Berhasil');
                        alert('Menyimpan Data Berhasil');
                        window.location='data_pindah.php';
                    }else{
                        $("#status").html('Gagal');
                        alert('Gagal');
                        return false;
                    }
                    $("#nik").load("database/ambil_pindah.php", "op=ambilbarang");
                    $("#tanggal_pindah").val("");
                    $("#keterangan").val("");
                    $("#id_ktp").val("");
                }
            });
        });
     });


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
	<br />
	<br />
	<br />
	<div  class="col m10 s12 offset-m1">
		<h4 style="color:#939393"><i class="fa fa-user"></i> Tambah Data Pindahan</h4>
		<hr />
		<br />
		<form action="tambah_data_pindahan.php" method="post" name="form1">
			<div class="col m10 s12">

				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="tanggal_pindah" class="validate" name="tanggal_pindah" value="">
						<label for="tanggal_pindah">Tanggal Pindah</label>
					</div>
				</div>
					<div class="row">
						<div class="col m4 s12">
						<label>NIK</label>
						<select class="browser-default" name="nik" id="nik"></select>
					</div>
					<div class="input-field col m8 s12">
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
				

				<div class="row right" style="padding-right: 58%">
					<button type="button" onclick="window.history.go(-1)" class="btn red moves-effect moves-light">Kembali</button>
					<button type="submit" name="simpan" id="simpan" value="Simpan" onclick="return false;" class="btn blue moves-effect moves-light">Simpan <i class="fa fa-papper-plane"></i></button>
				</div>

			</div>
		</form>
	</div>
</div>			
</body>
</html>
<?php } ?>