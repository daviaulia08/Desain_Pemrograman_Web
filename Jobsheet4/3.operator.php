<?php

//operator aritmatika
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali   = $a * $b;
$hasilBagi   = $a / $b;
$sisaBagi    = $a % $b;
$pangkat     = $a ** $b;

echo "hasil a + b = {$hasilTambah} <br>";
echo "hasil a - b = {$hasilKurang} <br>";
echo "hasil a x b = {$hasilKali} <br>";
echo "hasil a / b = {$hasilBagi} <br>";
echo "hasil a % b = {$sisaBagi} <br>";
echo "hasil a ^ b = {$pangkat} <br>";

echo "<br>";

// Operator Perbandingan
$hasilSama            = $a == $b;
$hasilTidakSama       = $a != $b;
$hasilLebihKecil      = $a < $b;
$hasilLebihBesar      = $a > $b;
$hasilLebihKecilSama  = $a <= $b;
$hasilLebihBesarSama  = $a >= $b;

echo "hasil a == b = {$hasilSama} <br>";
echo "hasil a != b = {$hasilTidakSama} <br>";
echo "hasil a < b = {$hasilLebihKecil} <br>";
echo "hasil a > b = {$hasilLebihBesar} <br>";
echo "hasil a <= b = {$hasilLebihKecilSama} <br>";
echo "hasil a >= b = {$hasilLebihBesarSama} <br>";

echo "<br>";

// Operator Logika
$hasilAnd  = $a && $b;
$hasilOr   = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "hasil a && b = {$hasilAnd} <br>";
echo "hasil a || b = {$hasilOr} <br>";
echo "hasil !a = {$hasilNotA} <br>";
echo "hasil !b = {$hasilNotB} <br>";

echo "<br>";

// Operator Penugasan
$a += $b; 
echo "Hasil \$a += \$b adalah: $a <br>";
$a -= $b;
echo "Hasil \$a -= \$b adalah: $a <br>";
$a *= $b;
echo "Hasil \$a *= \$b adalah: $a <br>";
$a /= $b;
echo "Hasil \$a /= \$b adalah: $a <br>";
$a %= $b;
echo "Hasil \$a %= \$b adalah: $a <br>";

echo "<br>";

// operator identik
$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil $a === $b = $hasilIdentik <br>";
echo "Hasil $a !== $b = $hasilTidakIdentik <br>";

?>