<?php 
//tangkap data dari index.php
$index = $_GET["index"];
//buka file json
$getfileJSON = file_get_contents("buku.json");
//ubah file json kedalam array
$databuku = json_decode($getfileJSON);
//hapus data dari array
unset($databuku[$index]);
$data = json_encode (array_values($databuku), JSON_PRETTY_PRINT);
file_put_contents("buku.json", $data);
//balikin lagi ke index.php
header("Location: index.php");
?>