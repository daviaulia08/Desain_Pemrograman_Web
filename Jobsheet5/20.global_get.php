<?php
$nama = @$_GET['nama'];  // @ agar tidak muncul error jika key kosong
$usia = @$_GET['usia'];  // @ agar tidak muncul error jika key kosong

echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?";
?>
