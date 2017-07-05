<?php

$firstArray = [];
$secondArray = [];

for ( $i = 0; $i < 3; $i++ ){
    for ( $j = 0; $j < 3; $j++ ){
        $firstArray[$i][$j] = rand();
        echo $firstArray[$i][$j] . " ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

for ( $i = 0; $i < 3; $i++ ){
    for ( $j = 0; $j < 3; $j++ ){
        $secondArray[$i][$j] = rand();
        echo $secondArray[$i][$j] . " ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;


for ( $i = 0; $i < 3; $i++ ){
    for ( $j = 0; $j < 3; $j++ ){
        $sum[$i][$j] = $firstArray[$i][$j] + $secondArray[$i][$j];
        echo $sum[$i][$j] . " ";
    }
    echo PHP_EOL;
}