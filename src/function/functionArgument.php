<?php

// Function argument
function sayHello($name)
{
    echo "Hello $name" . PHP_EOL; 
}

sayHello("Egha");
sayHello("Kuncoro");

echo "\n";

// Function default argument
function sayHello2($name1, $lastname2 = "Ferdian")
{
    echo "Hello $name1 $lastname2" . PHP_EOL; 
}

sayHello2("Egha");
sayHello2("Egha","Kuncoro");

// Kesalahan akan error
// function sayHello3($firstname1 = "Ferdian", $lastname3)
// {
//     echo "Hello  $firstname1 $lastname3" . PHP_EOL; 
// }

// sayHello3("Egha");
// sayHello3("Egha");