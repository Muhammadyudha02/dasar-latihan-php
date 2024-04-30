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
                    <label for="nama">Nama: </label>
                </td>
                <td>
                    <input type="text" id="nama" name="nama"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="email">Email: </label>
                </td>
                <td>
                    <input type="Email" id="Email" name="Email"></input>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="nohp">Nomor Hp: </label>
                </td>
                <td>
                    <input type="text" id="nohp" name="nohp"></input>
                </td>
            </tr>
        </table>
        <button type="submit" name="submit">Simpan</button>
    </form>
    <?php
    //cek tombol submit apakah sudah di klik belum
    if(isset($_POST["submit"])){
        //buka file json
        $getfileJSON = file_get_contents("kontak.json");
        // decode file json
        $datakontak = json_decode($getfileJSON);
        //membuat Array assosiatif untuk menampung data form
        $kontak =[
            "nama"=> $_POST["nama"],
            "email"=> $_POST["email"],
            "nohp"=> $_POST["nohp"]
        ];
        //tambahkan $kontak ke dalam array $datakontak
        $datakontak[] = $kontak;
        //kembalikan ke bentuk json
        $data = json_encode ($datakontak, JSON_PRETTY_PRINT);
        file_put_contents("kontak.json", $data);
        //arahkan kembali ke index.php
        header("location: index.php");
    }
    ?>
</body>
</html>