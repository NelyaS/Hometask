<?php

$array = [];

for ( $i = 0; $i < 100; $i++ ){
    $array[$i] = rand();
}

$key = array_search(1, $array);

echo $key;