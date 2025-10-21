<?php
$host = 'localhost';
$port = '5432';
$dbname = 'phpdatabase_cafe';
$user = 'postgres';
$pass = 'kagura123';

$conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$pass");
if (!$conn) {
    die('Koneksi gagal: ' . pg_last_error());
}

pg_set_client_encoding($conn, 'UTF8');

$sql = <<<SQL
SELECT
    "nama" AS "Nama",
    "pesanan" AS "Pesanan",
    "jumlah" AS "Jumlah",
    "harga_satuan" AS "Harga Satuan",
    "harga_akhir" AS "Harga Akhir"
FROM "pesanan"
ORDER BY "id"
SQL;

$result = pg_query($conn, $sql);
if (!$result) {
    die('Query gagal: ' . pg_last_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body {
        font-family: 'Courier New', monospace;
        background-color: #f5deb3; /* warna coklat muda */
        color: #333;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        min-height: 100vh;
        margin: 0;
    }

    h1 {
        text-align: center;
        background-color: #deb887; /* warna coksu agak gelap */
        color: #2f2f2f;
        padding: 10px 20px;
        border-radius: 8px;
        box-shadow: 0 2px 5px rgba(0,0,0,0.2);
    }

    table {
        border-collapse: collapse;
        margin-top: 20px;
        background: #fffaf0; 
        box-shadow: 0 2px 8px rgba(0,0,0,0.15);
        border-radius: 8px;
        overflow: hidden;
    }

    th, td {
        border: 1px solid #d2b48c;
        padding: 10px 15px;
        text-align: center;
    }

    th {
        background-color: #deb887;
        color: #2f2f2f;
    }

    tr:nth-child(even) {
        background-color: #fff8dc;
    }

</style>
</head>

<body>
    <h1>Daftar Pesanan Cafe</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Pesanan</th>
            <th>Jumlah</th>
            <th>Harga Satuan</th>
            <th>Harga Akhir</th>
        </tr>
        <?php $i=1; ?>
        <?php while($row = pg_fetch_assoc($result)): ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= htmlspecialchars($row["Nama"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?= htmlspecialchars($row["Pesanan"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?= htmlspecialchars($row["Jumlah"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?= htmlspecialchars($row["Harga Satuan"], ENT_QUOTES, 'UTF-8'); ?></td>
            <td><?= htmlspecialchars($row["Harga Akhir"], ENT_QUOTES, 'UTF-8'); ?></td>
        </tr>
<?php $i++; endwhile; ?>
</table>
<?php
pg_free_result($result);
pg_close($conn);
?>
</body>
</html>