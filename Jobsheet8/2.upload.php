<?php
if (isset($_POST["submit"])) {
    $targetdir = "4.uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    // nambahin ekstensi gambar ke daftar yang diizinkan
    $allowedExtensions = array("txt", "pdf", "doc", "docx", "jpg", "jpeg", "png");
    $maxsize = 3 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] <= $maxsize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah.<br>";

            // jika file adalah gambar, nampilin pratinjau
            if (in_array($fileType, array("jpg", "jpeg", "png"))) {
                echo "<p>Pratinjau Gambar:</p>";
                echo "<img src='$targetfile' width='200' style='height:auto; border:1px solid #ccc; padding:5px;'>";
            }
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan.";
    }
}
?>
