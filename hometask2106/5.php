<?php

$array = [];

for ( $i = 0; $i < 10; $i++ ){
    $array[$i] = rand();
    echo $array[$i] . PHP_EOL;
}

for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array) - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $a = $array[$j + 1];
            $array[$j + 1] = $array[$j];
            $array[$j] = $a;
        }
    }
}

print_r($array);