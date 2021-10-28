<?php
require_once 'config.php';
$a = $_GET['id'];
$sqldelete = ("DELETE from jurusan where id = '$a'");
mysqli_query($koneksi, $sqldelete);

echo "<script>document.location.href='data-jurusan.php';
      </script>";
