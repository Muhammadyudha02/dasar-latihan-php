<?php
//Array
//cara lama 
$arr = array(1, 3, 4, 7, 9, 11, 10);
print_r($arr);
print '<br>';
//cara terbaru 
$arr2 =['yudha', 'maulana', 'a candra', 'noval'];
print_r($arr2);
print '<br>';
var_dump($arr2);
print '<br>';
echo $arr2[3];

//mengedit isi array
$arr2[3]='jabbbar';

//menambahkan isi array
$arr2[4]='noval';
print '<br>';

//foreach
foreach ($arr2, as  $a){
echo $a,'<br>';
}



?>