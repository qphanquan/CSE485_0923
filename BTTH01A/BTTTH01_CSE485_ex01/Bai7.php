<?php
$array = [12, 5, 200, 10, 125, 60, 90, 345, -123, 100, -125, 0];

foreach ($array as $item){
    if($item >= 100 && $item <= 200 && $item % 5 == 0){
        echo "{$item}<br/>";
    }
}