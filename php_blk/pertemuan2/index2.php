<?php
//built in function untuk manupulasi string

//explode, implode, strlen,strcmp
//strlen== mengetahui panjang string
echo strlen("Hello word"), '<br>';
echo strlen("Selamat datang di BLK KARAWANG"), '<br>';

//str word count==menghitung jumlah kata
echo str_word_count("Hallo nama saya adalah muhammad yudha,saya sedang belajar di tik web"), '<br>';

//strcmp==membandingkan 2 buah kata/stroing
//strcasecmp== membandingkan 2 string berdasarkan huruf
$kata1="Katak";
$kata2="katak";

if (strcmp($kata1, $kata2) !==0)
{
    echo '$kata1 tidak sama dengaan $kata2';
}
else{
    echo '$kata1 sama dengaan $kata2';
}
//exploden== memecah string
echo '<br>';
print_r (explode("-", "AYAM-GORENG-ENAK"));
echo '<br>';
print_r (explode("-", "YUDA-ZAHRA-AIRA"));
echo '<br>';

//implode==menggunakan array menjadi string
$kata=array ("selamat", "Datang");
echo implode("", $kata);
echo '<br>';
echo '<br>';
//strtolower ==merubah huruf besar menjadi huruf kecil
echo strtolower("HARAP TENANG SEDANG BELAJAR"),'<br>';
//stretoupper== merubah huruf kecil menjadi huruf besar
echo strtoupper("terimakasih sudah berkunjung"),'<br>';
//substr=mengambil beberapa karakter didalam string
$kalimat="PELAIHAN";
echo substr($kalimat, 2, 5), '<br>';
echo substr($kalimat, -7, 5);//mengambil dari belakang



?>