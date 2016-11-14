<?php
/**
 * Created by PhpStorm.
 * User: rbaryla
 * Date: 13.11.2016
 * Time: 00:37
 */

$info = array('coffee', 'brown', 'caffeine');

// Listing all the variables
list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

// Listing some of them
list($drink, , $power) = $info;
echo "$drink has $power.\n";

// Or let's skip to only the third one
list( , , $power) = $info;
echo "I need $power!\n";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL

// Using nested list()
list($a, list($b, $c)) = array(1, array(2, 3));

var_dump($a, $b, $c);

// Using list() with array indices
list($arr[], $arr[], $arr[]) = $info;

var_dump($arr);

// ist() and order of index definitions
$foo = array(2 => 'a', 'foo' => 'b', 0 => 'c');
$foo[1] = 'd';
list($x, $y, $z) = $foo;
var_dump($foo, $x, $y, $z);