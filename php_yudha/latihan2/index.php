<?php

include("mahasiswa.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar php method get</title>
</head>
<body>
    <h1 align="center">DAFTAR MAHASISWA DARMAJI</h1>

    <table border="1" cellpadding="5" align="center">
        <tr>
            <th>nim</th>
            <th>nama</th>
            <th>foto</th>
            <th colspan="3">aksi</th>
        </tr>
        <?php foreach($mhs as $m) : ?>
            <tr>
                <td> <?= $m["nim"] ?></td>
                <td> <?= $m["nama"] ?></td>
                <td> <img width="200" src="<?=$m["image"] ?>"></td>
                <td> <a href="detail.php?nim=<?=$m["nim"] ?>
                &nama=<?=$m["nama"]?>
                &alamat=<?=$m["alamat"]?>
                &prodi=<?=$m["prodi"]?>
                &image=<?=$m["image"]?>">Lihat</td>
                <td><a href="#">edit</td>
                <td><a href="#">hapus</td>
            </tr>

            <?php endforeach?>
    </table>

</body>
</html>