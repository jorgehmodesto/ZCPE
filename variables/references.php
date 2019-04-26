<?php

/**
 * In this example, we should reference a var to another, and realize what happens!
 */

// Defines var $a with an initial value
$a = 'Initial value \o/';

// Prints $a initial value
print($a . "<br />");

// Defines var $b as a var`s $a reference
$b = &$a;

// Sets a value to $b in order to show that it`s value is gonna change
$b = 'Its gonna change!';

// Prints current $b value
print($b . "</br>");

// Sets a new value to $a, so $b as a var`s $a reference, should change too!
$a = 'And it has changed!';

// Prints current $a value
print($a . "</br>");
// Prints changed reference value
print($b);