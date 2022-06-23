<?php
$array=[10,20,30,50,70,90];

//multiply 5 with array element
$multipiy = array_map((fn($ele)=> $ele*5), $array);
print_r($multipiy);
echo "\n";


?>