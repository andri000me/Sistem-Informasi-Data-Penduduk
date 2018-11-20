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
	<link rel="stylesheet" type="text/css" href="../css/materialize.min.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="../css/custom.css">
	<script type="text/javascript">
		
		var nik;
		var	tempat_mati;
        var tanggal_mati;
        var umur;
        var sebab_mati;
        var makam;
        var nama_pelapor;
        var hubungan_pelapor;
        var id_ktp;

		$(function(){
        $("#nik").load("database/ambil.php","op=ambilbarang");

        $("#nik").change(function(){
            nik=$("#nik").val();

            $("status").html("Loading. . .");

            $.ajax({
                url:"database/ambil.php",
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

            nik=$("#nik").val();
            tempat_mati=$("#tempat_mati").val();
            tanggal_mati=$("#tanggal_mati").val();
            umur=$("#umur").val();
            sebab_mati=$("#sebab_mati").val();
            makam=$("#makam").val();
            nama_pelapor=$("#nama_pelapor").val();
            hubungan_pelapor=$("#hubungan_pelapor").val();
            id_ktp=$("#id_ktp").val();

            $.ajax({
                url:"database/ambil.php",
                data:"op=simpan&nik="+nik+"&tempat_mati="+tempat_mati+"&tanggal_mati="+tanggal_mati+"&umur="+umur+"&sebab_mati="+sebab_mati+"&makam="+makam+"&nama_pelapor="+nama_pelapor+"&hubungan_pelapor="+hubungan_pelapor+"&id_ktp="+id_ktp,
                cache:false,
                success:function(msg){
                    if(msg=='sukses'){
                        $("#status").html('Menyimpan Data Berhasil');
                        alert('Menyimpan Data Berhasil');
                        window.location='data_kematian.php';
                    }else{
                        $("#status").html('Gagal');
                        alert('Gagal');
                        return false;
                    }
                    $("#nik").load("database/ambil.php", "op=ambilbarang");
                    $("#tempat_mati").val("");
                    $("#tanggal_mati").val("");
                    $("#umur").val("");
                    $("#sebab_mati").val("");
                    $("#makam").val("");
                    $("#nama_pelapor").val("");
                    $("#hubungan_pelapor").val("");
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
		<h4 style="color:#939393"><i class="fa fa-user"></i> Tambah Data Kematian</h4>
		<hr />
		<br />
		<form action="tambah_data_kematian.php" method="post" name="form1">
			<div class="col m10 s12">

				<div class="row">
					<div class="col m4 s12">
						<label>NIK</label>
						<select class="browser-default" name="nik" id="nik"></select>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="tempat_mati" class="validate" name="tempat_mati" value="">
						<label for="tempat_mati">Tempat Mati</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="tanggal_mati" class="validate" name="tanggal_mati" value="">
						<label for="tanggal_mati">Tanggal Mati</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="number" id="umur" class="validate" name="umur" value="">
						<label for="umur">umur</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="sebab_mati" class="validate" name="sebab_mati" value="">
						<label for="sebab_mati">Sebab Mati</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="makam" class="validate" name="makam" value="">
						<label for="makam">makam</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="nama_pelapor" class="validate" name="nama_pelapor" value="">
						<label for="nama_pelapor">Nama Pelapor</label>
					</div>
					<div class="input-field col m4 s12">
						<input type="text" id="hubungan_pelapor" class="validate" name="hubungan_pelapor" value="">
						<label for="hubungan_pelapor">Hubungan Pelapor</label>
					</div>
				</div>
				<div class="row">
					<div class="input-field col m4 s12">
						<input type="text" id="id_ktp" class="validate" name="id_ktp" value="" readonly>
						<label for="id_ktp">ID KTP</label>
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