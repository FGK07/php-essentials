<?php
function foo()
{
    echo "FOO".PHP_EOL;
}

function bar()
{
    echo "BAR".PHP_EOL;
}

$functionName = "foo";
$functionName();

$functionName = "bar";
$functionName();

echo "\n";

// Use variable function
function sayHello(string $name, $filter)
{
    $finalname = $filter($name);
    echo "Hello $finalname" . PHP_EOL;
}
function sampleFunction(string $name) : string {
    return "Sample $name";
    
}

sayHello("Kuncoro", "sampleFunction");
$hama = strtoupper ("Kuncoro");
echo $hama;


