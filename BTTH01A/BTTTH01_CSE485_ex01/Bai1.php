<?php

$arr =  [2, 5, 6, 9, 2, 5, 6, 12 ,5];

function tong($arr){
    $tong = 0;
    $string = '';
    foreach($arr as $item){
        $tong += $item;
        
    }
    return $tong;
}

echo "Tổng các phần tử = " . implode(' + ', $arr) . ' = ' . tong($arr) . "<br>";

function tich($arr){
    $tich = 1;
    foreach($arr as $item){
        $tich *= $item;
    }
    return $tich;
}

echo "Tích các phần tử = " . implode(' * ', $arr) . ' = ' . tich($arr) . "<br>";

function hieu($arr){
    $hieu = $arr[0];
    for($i = 1; $i < count($arr); $i++)
        $hieu -= $arr[$i];
    return $hieu;
}

echo "Hiệu các phần tử = " . implode(' - ', $arr) . ' = ' . hieu($arr) . "<br>";

function thuong($arr){
    $thuong = $arr[0];
    for($i = 1; $i < count($arr); $i++)
        $thuong /= $arr[$i];
    return $thuong;
}

echo "Thương các phần tử = " . implode(' / ', $arr) . ' = ' . thuong($arr) . "<br>";