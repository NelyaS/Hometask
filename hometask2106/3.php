<?php

$array = [];

for ( $i = 0; $i < 2; $i++ ){
    for ( $j = 0; $j < 2; $j++ ){
        $array[$i][$j] = rand();
        echo $array[$i][$j] . " ";
    }
    echo PHP_EOL;
}

$opredelitel = $array[0][0] * $array[1][1] - $array[0][1] * $array[1][0];

echo PHP_EOL . "opredelitel = $opredelitel";
