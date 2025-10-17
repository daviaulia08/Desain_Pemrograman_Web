<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
        $email = $_POST['email'];

        echo "<h3>Hasil Input Aman:</h3>";
        echo "<p>$input</p>";

        // memeriksa apakah input adalah email yang valid
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "<p>Email: $email (valid)</p>";
        } else {
            echo "<p>Email tidak valid!</p>";
        }
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
        <input type="text" name="input" required><br>
        <label>Masukkan email:</label><br>
        <input type="email" name="email" required><br><br>
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
