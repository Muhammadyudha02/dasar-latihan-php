<?
// isset = memastikan apakah suatu variabel sudah dibuat
if (!isset($_GET["nama"])|| 
!isset($_GET["nim"]) ||
!isset($_GET["alamat"]) ||
!isset($_GET["prodi"]) ||
!isset($_GET["image"]) ||){
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail <?= $_GET["nama"]?></title>
</head>
<body>
    <table border="1"cellpadding="5" align="center">
    <tr>
        <td colspan="4"><img src="<?= $_GET["image"]?>"></td>
    </tr>
    <tr>
        <th>nim</th>
        <th>nama</th>
        <th>alamat</th>
        <th>prodi</th>
    </tr>
    <tr>
        <td><?= $_GET["nim"]?></td>
        <td><?= $_GET["nama"]?></td>
        <td><?= $_GET["alamat"]?></td>
        <td><?= $_GET["prodi"]?></td>
    </tr>
    </table>
</body>
</html>