<?php 

$grades = array(42, 98, 100, 100, 43, 12);

echo "<pre>";
print_r($grades);

sort($grades);

print_r($grades);
rsort($grades);

echo "<hr>";

$fruits = array("banana","apple", "orange", "mango");  //sort Fruits
sort($fruits);
print_r($fruits);


$fruits = array("banana","apple", "orange", "mango");   // reverse fruits(rsort)
rsort($fruits);
print_r($fruits);



?>