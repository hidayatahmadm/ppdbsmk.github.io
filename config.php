<?php
//buat koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "ppdb");
if (mysqli_connect_errno()) {
    echo "Gagal Koneksi" . mysqli_connect_error();
}
