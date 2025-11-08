<?php

// factorial loop without recursive function
function factorialLoop(int $value): int 
{
    $total = 1;

    for ($i = 1; $i <= $value; $i++) {
        $total *= $i;
    }

    return $total;
}

var_dump(factorialLoop(5));
var_dump(1 * 2 * 3 * 4 * 5);

echo "Function recursive \n";

// with function recursive

function factorialRecursive(int $value) : int
{
    if ($value == 1) {
        return 1;
    } else {
        return $value * factorialRecursive($value - 1);
    }
}

var_dump(factorialRecursive(9));

// How it works
// factorialRecursive(5) * factorialRecursive(4) * factorialRecursive(3) * factorialRecursive(2) * factorialRecursive(1)

// Problem recursive function

function loop(int $value)
{
    if ($value == 0) {
        echo "End loop" . PHP_EOL;
    } else {
        echo "Loop-$value" . PHP_EOL;
        loop($value-1);
    }
}

// The bigger the number, the more memory will be used and it will cause memory errors.
loop(100000);