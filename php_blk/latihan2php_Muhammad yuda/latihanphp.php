<?php

$mhs = [
    [
        "prodi" => "Informatika",
        "nim" => "22416255201204",
        "nama" => "Akbar",
        "alamat" => "Cikampek",
    ],
    [
        "nim" => "22416255201138",
        "nama" => "Fajar",
        "alamat" => "Telagasari",
        "prodi" => "Informatika",
    ],
    [
        "nim" => "22416255201165",
        "nama" => "Bisma",
        "alamat" => "Isekai",
        "prodi" => "Informatika",
    ],
    [
        "nim" => "22416255201152",
        "nama" => "Putra",
        "alamat" => "Purwasari",
        "prodi" => "Informatika",
    ],
    [
        "nim" => "23426255201249",
        "nama" => "Fahri",
        "alamat" => "Telagasari",
        "prodi" => "Informatika",
    ]
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
<h2 align="center">Data Mahasiswa</h2>
    <table border="1" cellpadding="6" align="center" style="text-align: center">
        <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Alamat</td>
            <td>Program Studi</td>
        </tr>
        <tr>
        <?php foreach ($mhs as $mahasiswa) : ?>
            
                <td><?php echo $mahasiswa['nim']; ?></td>
                <td><?php echo $mahasiswa['nama']; ?></td>
                <td><?php echo $mahasiswa['alamat']; ?></td>
                <td><?php echo $mahasiswa['prodi']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    
</body>
</html>