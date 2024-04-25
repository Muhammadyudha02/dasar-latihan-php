<?php
//function --program dalam program
//1. built in function = fungsi yang sudah tersedia di php
//2.user defined function =fungsi yang sudah dibuat oleh programer
//date,time,mktime,strtotitime

//date atau tanggal
date_default_timezone_set ("asia/jakarta");
echo ("1, j F Y H:i:s");

/*
1== nama hari yang lengkap
d== hari format 01 sampai 31
j== hari format 1 sampai 31
M== bulan format 3 karakter [jan,feb,mar,]
F== nama bulan lengkap
Y== TAHUN

H== JAM
i== menit 
s== detik 
*/

//time =detik sejak 1 januari 1970
//echo time();

//mktime
//echo mktime(0,0,0,6,02.2001)

//strtotime mengubah string menjadi tanggal
echo strtotime("24 januari 2024"), '<br>';

//date parse== memecah tanggal
print_r(date_parse("28 april 2024"));


?>