<?php 
//tangkap data dari index.php
$index = $_GET["index"];
//buka file json
$getfileJSON = file_get_contents("kontak.json");
//ubah file json kedalam array
$datakontak = json_decode($getfileJSON);
//hapus data dari array
unset($datakontak[$index]);
$data = json_encode (array_values($datakontak), JSON_PRETTY_PRINT);
file_put_contents("kontak.json", $data);
//balikin lagi ke index.php
header("Location: index.php");
?>
