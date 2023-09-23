<?php

$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

$max = $array[0];
$min = $array[0];
for($i = 1; $i < count($array); $i++){
    if(strlen($array[$i]) > strlen($max)){
        $max = $array[$i];
    }
    if(strlen($array[$i]) < strlen($min)){
        $min = $array[$i];
    }
}

echo "Chuỗi lớn nhất là {$max}, độ dài = ". strlen($max) . "<br />";
echo "Chuỗi bé nhất là {$min}, độ dài = ". strlen($min);