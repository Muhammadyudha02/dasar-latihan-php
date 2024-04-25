<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan tahun kabisat</title>
</head>
<body>
    <?php
    $tahun = 2024;
    if ($tahun % 4 == 0 && $tahun % 100 !=0 || $tahun % 400 ===0) {
        echo "$tahun adalah tahun kabisat";
    } else {
        echo "$tahun bukan tahun kabisat";
    } 
    ?>
</body>
</html>