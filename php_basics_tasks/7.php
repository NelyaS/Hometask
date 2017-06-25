<?php

include '2.php';

if ( $age >= 18 && $age <= 59 ) {
    echo "Вам еще работать и работать";
} elseif ( $age > 59 ) {
    echo "Вам пора напенсию";
} elseif ( $age < 18 && $age > 0 ) {
    echo "Вам еще рано работать";
};