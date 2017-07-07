<?php

$array = array_fill(0, 1000, null);

print_r(array_chunk($array, 100));