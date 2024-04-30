<?php
//buka file json
$getfileJSON =file_get_contents("kontak.json");

//encode file json
$datakontak =json_decode($getfileJSON);

$index =0;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data kontakt</title>
</head>
<body>
    <h1>Data kontak</h1>
    <a href="tambah.php">Add Data</a>


    <table border="1" cellpadding="5">
        <tr>
            <th>no.</th>
            <th>nama</th>
            <th>email.</th>
            <th>nomor hp</th>
            <th colspan="3">aksi</th>
        </tr>
        <?php foreach($datakontak as $kontak) :?>
        <tr>
            <td><?php echo $index +1?></td>
            <td><?php echo $kontak ->nama ?></td>
            <td><?php echo $kontak ->email ?></td>
            <td><?php echo $kontak ->nohp ?></td>

            <td><a href="edit.php?index=<?php echo $index ?>">Edit</a></td>
            <td><a href="delete.php?index=<?php echo $index?>">Delete</a></td>

        </tr> 
            <?php $index++ ;
            endforeach; ?>
       
    </table>
</body>
</html>