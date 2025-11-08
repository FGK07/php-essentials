<?php

use Symfony\Component\VarDumper\VarDumper;

function sum(int $first, int $second)
{
    $total = $first + $second;
    return $total;
}

$result = sum(10,10);
var_dump($result);
echo $result;
echo "\n";
$result = sum(20,20);
var_dump($result);
echo $result;

echo "\n";

function getFinalValue(int $value)
{
    if ($value >= 80) {
        return "A";

    } else if ($value >= 70) {
        return "B";

    } else if ($value >= 60) {
        return "C";

    } else if ($value >= 50) {
        return "D";

    } else {
        return "E";
    }
}

$score = getFinalValue(80);
var_dump($score);
echo $score;