<?php
	require_once 'config.php';
	$a = $_GET['id'];
	$sqldelete = ("DELETE from tahun_ajar where id_tahunajar = '$a'");
		mysqli_query($koneksi,$sqldelete);

	echo "<script>document.location.href='data-tahun-ajaran.php';
      </script>";
