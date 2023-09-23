<?php
$array1 = [
    [77, 87],
    [23, 45]
];

$array2 = [
    'giá trị 1', 'giá trị 2'
];

$a = array_unshift($array1[0], $array2[0]);
$b = array_unshift($array1[1], $array2[1]);
$c = [];
array_push($c,$array1[0]);
array_push($c,$array1[1]);
echo "<pre>";
var_export($c);
echo "</pre>";