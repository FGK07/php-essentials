<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
}
sayHello("Egha", "strtoupper");
sayHello("Egha", "strtolower");
sayHello("Kuncoro", function (string $name): string{
    return strtoupper($name);
});
sayHello("Kuncoro", fn ($name) => strtoupper($name));

