<?php
$harga = 120000;
$diskon = 0;

if ($harga > 100000) {
    $diskon = 0.20 * $harga;
}

$hargaSetelahDiskon = $harga - $diskon;

echo "Harga awal: Rp $harga <br>";
echo "Diskon: Rp $diskon <br>";
echo "Harga yang harus dibayar: Rp $hargaSetelahDiskon <br>";
?>
