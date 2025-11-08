<?php
// Concatenate arrays into a string
var_dump(join(",",[10,11,12,13,14,15]));

// Splits strings into arrays
var_dump(explode(" ", "Ferdian Egha Kuncoro"));

// Convert a string to lowercase
var_dump(strtolower("FERDIAN EGHA KUNCORO"));

// Convert a string to uppercase
var_dump(strtoupper("ferdian egha kuncoro"));

// Removes whitespace before and after a string.
var_dump(trim("            Egha            Kuncoro              "));

// Takes part of the string
var_dump(substr("Ferdian Egha Kuncoro", 0, 3));