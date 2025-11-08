<?php
$sayHello = function (string $name) {
    echo "Hello $name" . PHP_EOL;  
};

$sayHello("Egha");
$sayHello("Kuncoro");

function sayGoodbye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good bye $finalName".PHP_EOL;
}

sayGoodbye("Kuncoro", function(string $name): string{
    return strtoupper($name);
});


$filterFunction = function (string $name): string {
    return strtoupper($name);
};
sayGoodbye("Kuncoro", $filterFunction);

echo "\n";

// Access variables outside the closure/annonymous function
$firstName = "Egha";
$laststName = "Kuncoro";

$sayHelloEgha = function () use($firstName, $laststName) {
    echo "Hello $firstName $laststName" . PHP_EOL;
};
$sayHelloEgha();

// The data will not change
$firstName = "Egha";
$laststName = "Kuncoro";
$sayHelloEgha();