<?php

$array = [];

for ( $i = 0; $i < 10; $i++ ){
    $array[$i] = rand();
}

$max = $array[0];

for ($i = 0; $i < 10; ++$i) {
    if ($array[$i] > $max) {
        $max = $array[$i];
    }
}

echo $max;