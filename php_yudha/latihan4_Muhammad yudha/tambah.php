<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <form method="post">
        <table broder="1">
           <tr>
                <td>
                    <label for="judul">Judul: </label>
                </td>
                <td>
                    <input type="text" id="judul" name="judul"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="penulis">penulis: </label>
                </td>
                <td>
                    <input type="text" id="penulis" name="penulis"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="tahun">Tahun: </label>
                </td>
                <td>
                    <input type="text" id="tahun" name="tahun"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="penerbit">Penerbit: </label>
                </td>
                <td>
                    <input type="text" id="penerbit" name="penerbit"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="harga">harga: </label>
                </td>
                <td>
                    <input type="text" id="harga" name="harga"></input>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Simpan</button>
    </form>
    <?php
    //cek tombol submit apakah sudah di klik belum
    if(isset($_POST["submit"])){
        //buka file json
        $getfileJSON = file_get_contents("buku.json");
        // decode file json
        $databuku = json_decode($getfileJSON);
        //membuat Array assosiatif untuk menampung data form
        $buku =[
            "judul"=> $_POST["judul"],
            "penulis"=> $_POST["penulis"],
            "tahun"=> $_POST["tahun"],
            "penerbit"=> $_POST["penerbit"],
            "harga"=> $_POST["harga"]

        ];
        //tambahkan $kontak ke dalam array $datakontak
        $databuku[] = $buku;
        //kembalikan ke bentuk json
        $data = json_encode ($databuku, JSON_PRETTY_PRINT);
        file_put_contents("buku.json", $data);
        //arahkan kembali ke index.php
        header("location: index.php");
    }
    ?>
</body>
</html>