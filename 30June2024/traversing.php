<?php 

$fruits = array("apple", "orange", "banana");

echo "<pre>";
print_r($fruits);
echo "<br>";

echo "Next: ". next($fruits);
echo "<br>";
echo "Prev: ". prev($fruits);
echo "<br>";
echo "End: ". end($fruits);
echo "<br>";
echo "Reset: ". reset($fruits);
echo "<br>";
echo "Current: ". current($fruits);




?>