<?php

// Arrow function is the same as anonymous function
// Arrow functions are used for very simple functions

$firstName = "Egha";
$laststName = "Kuncoro";

echo "Anonymous Function \n";
$anonymousFunction = function () use($firstName, $laststName): string {
    return "Hello $firstName $laststName" . PHP_EOL;
};
echo $anonymousFunction();

echo "\n";

echo "Arrow Function \n";
$arrowFunction = fn() => "Hello $firstName $laststName" . PHP_EOL;
echo $arrowFunction();
