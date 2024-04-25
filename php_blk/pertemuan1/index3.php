<?php

$angka =20;

if ($angka % 2 === 0){ 
    echo "$angka merupakan bilangan genap";
} else{
    echo "$angka merupakan bilangan ganjil";
}

//if else..if else
echo "<br>"
$nilai = 78;
if ($nilai > 85){
    echo "index nilai anda adalah A";
}else if ($nilai > 75 && $nilai <= 85){
    echo "index nilai anda adalah B";
}else if ($nilai > 60 && $nilai <= 75) {
    echo "index nilai anda adalah C";
}else if ($nilai > 45 && $nilai <=60){
    echo "index nilai anda adalah C";
}else{
    echo "index nilai anda adalah E";
}

print"<br>"
//swich case
switch ($nilai){
    case($nilai > 85):
    echo "index nilai anda adalah A";
break;
case($nilai > 75 && $nilai < 85):
    echo "index nilai anda adalah B";
break;
case($nilai > 60 && $nilai < 75):
    echo "index nilai anda adalah C";
break;
case($nilai > 45 && $nilai < 60 ):
    echo "index nilai anda adalah D";
break;
case($nilai > 45):
    echo "index nilai anda adalah E";
break;
}
?>