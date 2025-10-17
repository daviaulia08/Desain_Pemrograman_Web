<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "<h3>Hasil Input Aman:</h3>";
        echo "<p>$input</p>";
    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contoh Input Aman</title>
</head>
<body>
    <form method="post" action="">
        <label>Masukkan teks:</label><br>
        <input type="text" name="input" required>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
