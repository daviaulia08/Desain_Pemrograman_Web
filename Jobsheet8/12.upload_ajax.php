<?php
$dir = "images/";
if (!is_dir($dir)) mkdir($dir, 0755, true);

$allowed = ['jpg','jpeg','png','gif'];
$max = 3 * 1024 * 1024;

if (!empty($_FILES['file']['name'])) {
    $name = $_FILES['file']['name'];
    $tmp  = $_FILES['file']['tmp_name'];
    $size = $_FILES['file']['size'];
    $ext  = strtolower(pathinfo($name, PATHINFO_EXTENSION));
    $dest = $dir . basename($name);

    if (in_array($ext, $allowed) && $size <= $max && @getimagesize($tmp)) {
        if (move_uploaded_file($tmp, $dest)) {
            echo "Berhasil: $name<br>";
            echo '<img src="'.htmlspecialchars($dest, ENT_QUOTES).'" width="200" style="height:auto;margin:6px 0;"><br>';
        } else {
            echo "Gagal mengunggah: $name";
        }
    } else {
        echo "Ditolak: $name (bukan gambar/ekstensi tidak diizinkan/lebih dari 3MB).";
    }
} else {
    echo "Tidak ada file yang dipilih.";
}
