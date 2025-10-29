<?php
$targetDirectory = "images/";

// buat folder kalau belum ada
if (!is_dir($targetDirectory)) {
    mkdir($targetDirectory);
}

if (!empty($_FILES['files']['name'][0])) {
    $totalFiles = count($_FILES['files']['name']);

    for ($i = 0; $i < $totalFiles; $i++) {
        $fileName = $_FILES['files']['name'][$i];
        $targetFile = $targetDirectory . basename($fileName);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // hanya izinkan file gambar
        if (in_array($fileType, ['jpg','jpeg','png','gif'])) {
            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFile)) {
                echo "File $fileName berhasil diunggah.<br>";
                echo "<img src='$targetFile' width='200' style='height:auto; margin:5px 0;'><br>";
            } else {
                echo "Gagal mengunggah file $fileName.<br>";
            }
        } else {
            echo "File $fileName bukan gambar.<br>";
        }
    }
} else {
    echo "Tidak ada file yang dipilih.";
}
?>
