<?php

$s = 36;
$t = 4;
$vKmHour = $s / $t;
$vMSec = ( $s * 1000 ) / ( $t * 3600 );
echo "V = $vKmHour км/час = $vMSec м/сек" . PHP_EOL;