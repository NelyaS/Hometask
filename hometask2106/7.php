<?php

$array = [];

for ( $i = 0; $i < 100; $i++ ){
    $array[$i] = rand();
}

for ( $i = 0; $i < 100; $i++ ){
    if(($array[$i] % 2) == 0) {
        echo $array[$i] . PHP_EOL;
    }
}