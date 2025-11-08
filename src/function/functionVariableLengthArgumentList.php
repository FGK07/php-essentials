<?php
function sumAll(...$values)
{
    $total = 0;
    foreach($values as $value) {
        $total += $total;
    }
    echo "Total ".implode("+",$values) . "= $total".PHP_EOL;
}
 $values = [20,30,40,50];
sumAll(10,20,30,40,50);
sumAll(...[10,20,30,40,50]);
sumAll(...$values);