<?php
$y=1;
//arrow fuction fn(argment) => express
$sum = fn($x)=> $x + $y;
echo $sum(10,20). "\n";

$array=[10,20,30,50];//20,40,60

//multiply 2 with array element
$multipiy = array_map((fn($ele)=> $ele*2), $array);
print_r($multipiy);
echo "\n";

//comparing
$results =fn($x) => $x == $y;

echo $results(10,10);
echo "\n";

?>