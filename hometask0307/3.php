<?php

$array = [1,2,3,[4,5,[]]];

ob_start();
print_r($array);
$a = ob_get_clean();
$max=0;
$cur=0;
for ($i = 0; $i < strlen($a); $i++)
{
    if ($a[$i] == "(")
        $cur++;
    if ($a[$i] == ")")
        $cur--;
    if ($cur > $max)
        $max = $cur;
}
echo "Глубина: $max";