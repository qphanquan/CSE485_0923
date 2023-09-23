<?php
$numbers = [78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72,
65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73];

$sum = array_sum($numbers);
$count = count($numbers);

$average = $sum / $count;
echo $average . "<br>";

$lonhon = [];
$behon = [];
foreach($numbers as $number){
    if($number > $average){
        array_push($lonhon, $number);
    }
    if($number <= $average){
        array_push($behon, $number);
    }
}

echo var_export($lonhon);
echo "<br>";

echo var_export($behon);
echo "<br>";