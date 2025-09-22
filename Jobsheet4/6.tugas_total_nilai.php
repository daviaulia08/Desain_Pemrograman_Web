<?php
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$jumlahData = 0;
foreach ($nilaiSiswa as $nilai) {
    $jumlahData++;
}

// Urutkan dengan Bubble Sort
for ($i = 0; $i < $jumlahData - 1; $i++) {
    for ($j = 0; $j < $jumlahData - $i - 1; $j++) {
        if ($nilaiSiswa[$j] > $nilaiSiswa[$j + 1]) {
            $temp = $nilaiSiswa[$j];
            $nilaiSiswa[$j] = $nilaiSiswa[$j + 1];
            $nilaiSiswa[$j + 1] = $temp;
        }
    }
}

$nilaiTengah = [];
for ($i = 2; $i < $jumlahData - 2; $i++) {
    $nilaiTengah[] = $nilaiSiswa[$i];
}

$jumlahTengah = 0;
foreach ($nilaiTengah as $n) {
    $jumlahTengah++;
}

$total = 0;
for ($i = 0; $i < $jumlahTengah; $i++) {
    $total += $nilaiTengah[$i];
}

$rataRata = $total / $jumlahTengah;

echo "Daftar nilai siswa setelah diurutkan: ";
for ($i = 0; $i < $jumlahData; $i++) {
    echo $nilaiSiswa[$i] . " ";
}
echo "<br>";
echo "Nilai yang dihitung (setelah abaikan 2 tertinggi & 2 terendah): ";
for ($i = 0; $i < $jumlahTengah; $i++) {
    echo $nilaiTengah[$i] . " ";
}
echo "<br>";

echo "Total nilai: $total <br>";
echo "Rata-rata nilai: $rataRata <br>";
?>
