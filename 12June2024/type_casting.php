<?php 

$x = 50;

$output = (float) $x;

var_dump($output);

echo "<hr>";

echo gettype($output);


$name = "Rahim";

$output = (float) $name;
echo $output;

echo "<hr>";

$x = 50;

$output = (double) $x;

var_dump($output);
echo "<hr>";

$number = 50.45;
$output = (integer) $number;
echo $output;
echo "<hr>";


$name = (bool) "Rahim";
echo $name;
echo "<hr>";

$score = 1114;
$scoreboard = (array) $score;
echo $scoreboard[0]; // Outputs 1114
echo "<hr>";
var_dump($scoreboard);

echo "<hr>";


$model = "Toyota";
$obj = (object) $model;
print_r($obj);
print $obj->scalar; // returns "Toyota"


?>