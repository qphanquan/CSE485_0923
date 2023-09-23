<?php
$numbers = [
    'key1' => 12,
    'key2' => 30,
    'key3' => 4,
    'key4' => -123,
    'key5' => 1234,
    'key6' => -12565,
];

// echo "Phần tử đầu tiên: " . print_r($numbers[0]) . "<br/>";
// echo "Phần tử cuối cùng: " . $numbers[count($numbers) - 1] . " <br/>";

echo "Phần tử đầu tiên: " . reset($numbers) . "<br/>";
echo "Phần tử cuối cùng: " . end($numbers) . " <br/>";
echo "Số lớn nhất: " . max($numbers) . "<br/>";
echo "Số bé nhất: " . min($numbers) . "<br/>";
echo "Tổng các giá trị: " . array_sum($numbers) . "<br/>";

sort($numbers);
echo "Mảng tăng dần theo các giá trị: ";
var_export($numbers);
echo "<br/>";

rsort($numbers);
echo "Mảng giảm dần theo các giá trị: ";
var_export($numbers);
echo "<br/>";

ksort($numbers);
echo "Mảng tăng dần theo các key: ";
var_export($numbers);
echo "<br/>";

krsort($numbers);
echo "Mảng giảm dần theo các key: ";
print_r($numbers);
echo "<br/>";