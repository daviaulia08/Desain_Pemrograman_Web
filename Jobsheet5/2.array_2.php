<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dosen</title>
</head>
<body>
<?php
    $Dosen = [
        'nama' => 'Elok Nur Hamdana',
        'domisili' => 'Malang',
        'jenis_kelamin' => 'Perempuan'
    ];
?>

<table id="dosenTable">
    <tr><th>Nama</th><td><?php echo $Dosen['nama']; ?></td></tr>
    <tr><th>Domisili</th><td><?php echo $Dosen['domisili']; ?></td></tr>
    <tr><th>Jenis Kelamin</th><td><?php echo $Dosen['jenis_kelamin']; ?></td></tr>
</table>

<script>
    // atur style langsung lewat JavaScript (soal 2)
    const table = document.getElementById("dosenTable");
    table.style.border = "1px solid black";
    table.style.backgroundColor = "lightblue"; 
    table.style.borderCollapse = "collapse";

    let cells = table.getElementsByTagName("td");
    for (let td of cells) {
        td.style.border = "1px solid black";
        td.style.padding = "8px";
    }

    let headers = table.getElementsByTagName("th");
    for (let th of headers) {
        th.style.border = "1px solid black";
        th.style.padding = "8px";
        th.style.backgroundColor = "lightblue";
        th.style.color = "black";
    }
</script>
</body>
</html>
