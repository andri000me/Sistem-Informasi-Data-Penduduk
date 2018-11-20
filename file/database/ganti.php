<?php

	include "../../db/koneksi.php";
	$op=isset($_REQUEST['op'])?$_REQUEST['op']:null;

		if($op=='simpan'){

			$id = $_REQUEST['id'];
 			$nama = $_REQUEST['nama'];
			$user = $_REQUEST['user'];
			$pass = sha1($_REQUEST['pass']);

			$sql = mysqli_query($conn, "update login set nama='$nama', username='$user', password='$pass' where id='$id'");

			if($sql)
			{
				echo "sukses";
			} else {
				echo "gagal menyimpan";
			}
	}
?>