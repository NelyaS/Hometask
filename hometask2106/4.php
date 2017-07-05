<?php

$array = [];

for ( $i = 0; $i < 1000; $i++ ){
    $array[$i] = rand();
    echo $array[$i] . PHP_EOL;
}

echo PHP_EOL;

sort($array);

for ( $i = 0; $i < 1000; $i++ ){
    echo $array[$i] . PHP_EOL;
}

