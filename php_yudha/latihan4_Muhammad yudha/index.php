<?php
//buka file json
$getfileJSON =file_get_contents("buku.json");

//encode file json
$databuku =json_decode($getfileJSON);

$index =0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data penjualan</title>
</head>
<body>
    <h1>Pembelian buku</h1>
    <a href="tambah.php">Tambah data </a>


    <table border="1" cellpadding="5">
        <tr>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Tahun</th>
            <th>Penerbit</th>
            <th colspan="2">Harga</th>
        </tr>
        <?php foreach($databuku as $buku) :?>
        <tr>
            <td><?php echo $buku ->judul?></td>
            <td><?php echo $buku ->penulis ?></td>
            <td><?php echo $buku ->tahun ?></td>
            <td><?php echo $buku ->harga ?></td>

            <td><a href="edit.php?index=<?php echo $index ?>">Edit</a></td>
            <td><a href="delete.php?index=<?php echo $index?>">Delete</a></td>

        </tr> 
            <?php $index++ ;
            endforeach; ?>
       
    </table>
</body>
</html>