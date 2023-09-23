<?php
$array = array(1, 2, 3, 4, 5);

foreach( $array as $key => $value){
    if( $key == 3){
        $array[$key] = $array[$key + 1];
        unset($array[$key + 1]);
    }
}

echo '<pre>';
var_export($array);
echo '</pre>';