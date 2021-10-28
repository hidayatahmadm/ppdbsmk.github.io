<?php
function greeting()
{
    $tanggal = date("G : i A");
    if ($tanggal >= 0 and $tanggal <= 10) {
        echo "Selamat Pagi";
    } elseif ($tanggal >= 10 and $tanggal <= 15) {
        echo "Selamat Siang";
    } elseif ($tanggal >= 15 and $tanggal <= 19) {
        echo "Selamat Sore";
    } elseif ($tanggal >= 19 and $tanggal <= 00) {
        echo "Selamat Malam";
    } else {
        echo "Waktu Salah";
    }
}
