<?php

$str = "Prem Kumar \n";
$my_function = fn($a) => $str . $a;
echo $my_function("How are u");
?>