<?php
$skorPemain = [550, 420]; // pemain 1 = 550, pemain 2 = 420

$jumlahPemain = 0;
foreach ($skorPemain as $s) {
    $jumlahPemain++;
}

for ($i = 0; $i < $jumlahPemain; $i++) {
    echo "Total skor pemain " . ($i + 1) . " adalah: " . $skorPemain[$i] . "<br>";
    
    if ($skorPemain[$i] > 500) {
        echo "Apakah pemain mendapatkan hadiah tambahan? YA<br><br>";
    } else {
        echo "Apakah pemain mendapatkan hadiah tambahan? TIDAK<br><br>";
    }
}

?>
