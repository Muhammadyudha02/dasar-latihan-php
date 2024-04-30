<?php
//tangkap data dari index.php
$index = $_GET["index"];
//buka file json
$getfileJSON = file_get_contents("buku.json");
//ubah file json kedalam array
$databuku = json_decode($getfileJSON);
//ambil satu data dari array kontak
$baris = $databuku[$index];

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
                    <label for="judul">Judul: </label>
                </td>
                <td>
                    <input type="text" id="judul" name="judul" value="<?php echo $baris-> judul?>"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="penulis">Penulis: </label>
                </td>
                <td>
                    <input type="text" id="penulis" name="penulis" value="<?php echo $baris-> penulis?>"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tahun">Tahun: </label>
                </td>
                <td>
                    <input type="text" id="tahun" name="tahun" value="<?php echo $baris-> tahun?>"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="penerbit">Penerbit: </label>
                </td>
                <td>
                    <input type="text" id="penerbit" name="penerbit" value="<?php echo $baris-> penerbit?>"></input>
                </td>
            </tr>
        </table>

        <button type="submit" name="submit">Simpan</button>
    </form>
    <?php
    //cek tombol submit apakah sudah di klik belum
    if(isset($_POST["submit"])){
        //tampung data dari form ke array asosiatif
        $buku =[
            "judul"=> $_POST["judul"],
            "penulis"=> $_POST["penulis"],
            "tahun"=> $_POST["tahun"],
            "penerbit"=> $_POST["penerbit"],
            "harga"=> $_POST["harga"]

        ];
        //simpan kontak ke array $datakontak
        $databuku[$index]=$buku;
        //kembalikan lagi ke file json
        $data = json_encode ($databuku, JSON_PRETTY_PRINT);
        file_put_contents("buku.json", $data);
        //balikin lagi ke index.php
        header("Location: index.php");
    }
    ?>
</body>
</html>