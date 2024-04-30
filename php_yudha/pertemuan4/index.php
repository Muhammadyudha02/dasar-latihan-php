<?php
 
// sperglobals = variabel PHP yang bisa diakses
// dimana saja

// $_GET, $_POST, $_SERVER, $_SESSION, $_COOKIE

// METHOG GET dan POST adalah sebuag array associative
// GET = metode pengiriman data melalui link
// POST = metode pengiriman data lewat form

//GET


$_GET ["nama"] = "Muhammad yudha";
$_GET ["alamat"] = "Karawang";
$_GET ["umur"] = 23;
var_dump($_GET);

$siswa = [
    [
        "image" => "https://img2.beritasatu.com/cache/beritasatu/480x310-3/1384071753.jpg",
        "nama" => "Asep Balon",
        "alamat" => "Cikampek",
        "no_hp" => "087834562343"

    ],
    [
        "image" => "https://upload.wikimedia.org/wikipedia/en/thumb/d/df/Andrew_Garfield_as_Spider-Man.jpg/220px-Andrew_Garfield_as_Spider-Man.jpg",
        "nama" => "Budi Busi",
        "alamat" => "Telagasari",
        "no_hp" => "08780099844"

    ],
    [
        "image" => "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYrJylrnbpgjP4zScoS_Yr6MaYDngJXE1MUqOB57tfpw&s",
        "nama" => "Asep Pancing",
        "alamat" => "Tempuran",
        "no_hp" => "08124455678"

    ],
]

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Selamat Datang, <?php echo $_GET ["nama"]?>!</h1>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>
        <li>Nama : <?php echo $_GET ["nama"] ?></li>
        <li>Alamat : <?php echo $_GET ["alamat"] ?></li>
        <li>umur : <?php echo $_GET ["umur"] ?></li>
    </ul>
</body>
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <ul>
        <?php foreach($siswa as $s) :?>
        <li><a href="profil.php?nama=<?php echo $s["nama"] ?>
    
        &alamat=<?php echo $s["alamat"]?>
        &no_hp=<?php echo $s["no_hp"]?>
        &image=<?php echo $s["image"]?>">
        <?php echo $s["nama"]?>
        </a>
        </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>

