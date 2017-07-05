<?php

$array = [];

for ( $i = 0; $i < 3; $i++){
    array_unshift($array, rand());
}

print_r($array);