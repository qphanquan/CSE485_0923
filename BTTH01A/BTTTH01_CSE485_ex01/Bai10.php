<?php
$arrs1 = ['1', 'b', 'c', 'd'];
$arrs2 = ['a', 0, null, false];

$arr = [];
foreach($arrs1 as $key => $val) {
    array_push($arr, strtoupper($val));
}

echo '<pre>';
print_r($arr);
echo '</pre>';

$arr = [];
foreach($arrs2 as $key => $val) {
    array_push($arr, strtoupper($val));
}

echo '<pre>';
var_dump($arr);
echo '</pre>';