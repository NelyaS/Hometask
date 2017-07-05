<?php

$array = [];

for ( $i = 0; $i < 100; $i++ ){
    $array[$i] = rand();
}

$a = 1;

for ( $i = 0; $i < 100; $i++ ){
    if($array[$i] % 2 == 0) {
        $a++;
        if ($a % 5 == 0) {
            echo $array[$i] . PHP_EOL;
        }
    }
}

