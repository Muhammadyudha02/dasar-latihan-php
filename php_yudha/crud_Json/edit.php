<?php
//tangkap data dari index.php
$index = $_GET["index"];
//buka file json
$getfileJSON = file_get_contents("kontak.json");
//ubah file json kedalam array
$datakontak = json_decode($getfileJSON);
//ambil satu data dari array kontak
$baris = $datakontak[$index];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit data</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>
                    <label for="nama">Nama: </label>
                </td>
                <td>
                    <input type="text" id="nama" name="nama" value="<?php echo $baris-> nama?>"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email: </label>
                </td>
                <td>
                    <input type="email" id="email" name="email" value="<?php echo $baris-> email?>"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nohp">Nomor hp: </label>
                </td>
                <td>
                    <input type="text" id="nohp" name="nohp" value="<?php echo $baris-> nohp?>"></input>
                </td>
            </tr>
        </table>

        <button type="submit" name="submit">Simpan</button>
    </form>
    <?php
    //cek tombol submit apakah sudah di klik belum
    if(isset($_POST["submit"])){
        //tampung data dari form ke array asosiatif
        $kontak =[
            "nama"=> $_POST["nama"],
            "email"=> $_POST["email"],
            "nohp"=> $_POST["nohp"]
        ];
        //simpan kontak ke array $datakontak
        $datakontak[$index]=$kontak;
        //kembalikan lagi ke file json
        $data = json_encode ($datakontak, JSON_PRETTY_PRINT);
        file_put_contents("kontak.json", $data);
        //balikin lagi ke index.php
        header("Location: index.php");
    }
    ?>
</body>
</html>