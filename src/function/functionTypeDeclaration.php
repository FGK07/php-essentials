<?php
// PHP function akan otomatis mencoba mengkonversi type data
function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "Total $first + $last = $total" . PHP_EOL;
}

sum("100", "100"); 
sum(100, 100); 
sum(true, false);  
// sum([2], [2]); akan error 
// sum([], []);  akan error