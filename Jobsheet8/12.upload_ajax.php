<?php
$dir = "images/";
if (!is_dir($dir)) { mkdir($dir, 0755, true); }

$allowed = ['jpg','jpeg','png','gif'];
$max = 3 * 1024 * 1024; 

if (!empty($_FILES['files']['name'][0])) {
    $total = count($_FILES['files']['name']);
    for ($i = 0; $i < $total; $i++) {
        $name = $_FILES['files']['name'][$i];
        $tmp  = $_FILES['files']['tmp_name'][$i];
        $size = $_FILES['files']['size'][$i];
        $ext  = strtolower(pathinfo($name, PATHINFO_EXTENSION));
        $dest = $dir . basename($name);

        if (in_array($ext, $allowed) && $size <= $max) {
            $info = @getimagesize($tmp); 
            if ($info === false) {
                echo "Ditolak: $name (bukan gambar).<br>";
                continue;
            }

            if (move_uploaded_file($tmp, $dest)) {
                echo "Berhasil: $name<br>";
                echo '<img src="'.htmlspecialchars($dest, ENT_QUOTES).'" width="200" style="height:auto;margin:6px 0;"><br>';
            } else {
                echo "Gagal mengunggah: $name<br>";
            }
        } else {
            echo "Ditolak: $name (ekstensi tidak diizinkan atau >3MB).<br>";
        }
    }
} else {
    echo "Tidak ada file yang dipilih.";
}
