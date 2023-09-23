<?php
$arrs1 = ['1', 'B', 'C', 'E'];
$arrs2 = ['a', 0, null, false];

$arr = [];
foreach($arrs1 as $key => $val) {
    array_push($arr, strtolower($val));
}

echo '<pre>';
print_r($arr);
echo '</pre>';

$arr = [];
foreach($arrs2 as $key => $val) {
    array_push($arr, strtolower($val));
}

echo '<pre>';
print_r($arr);
echo '</pre>';


