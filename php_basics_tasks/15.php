<?php

$a = 2;
$b = 3;
$operator = '*';

switch ( $operator ) {
    case '+':
        echo $a + $b;
        break;
    case '-':
        echo $a - $b;
        break;
    case '*':
        echo $a * $b;
        break;
    case '/':
        if ( $b == 0 ) {
            echo 'На ноль делить нельзя';
        } else {
            echo $a / $b;
        }
        break;
    default:
        echo 'Неправильная запись';
}
