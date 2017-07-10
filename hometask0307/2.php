<?php

$array = [1,2,3,[4,5]];

function print_r2 ($a)
{
    if (is_array($a)) {
        echo 'Array' . PHP_EOL . '(' . PHP_EOL;
        foreach ($a as $key => $value) {
            if (is_array($value)) {
                echo "    " . "[$key] = > ";
            } else {
                echo "    " . "[$key] = > $value";
            }
            if (is_array($value)) {
                print_r2($value);
            }
            echo PHP_EOL;
        }
        echo ')';
    } else {
        echo $a;
    }
}

print_r2($array);