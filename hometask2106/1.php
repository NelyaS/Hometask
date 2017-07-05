<?php

$firstArray = [];

for ($i = 0; $i < 3; $i++){
    for ($j = 0; $j < 3; $j++){
        $firstArray[$i][$j] = rand();
        echo $firstArray[$i][$j] . " ";
    }
    echo PHP_EOL;
}

echo PHP_EOL;

$secondArray = [];

for ($a = 0; $a < 3; $a++){
    for ($b = 0; $b < 3; $b++){
        $secondArray[$a][$b] = $firstArray[$b][$a];
        echo $secondArray[$a][$b] . " ";
    }
    echo PHP_EOL;
}