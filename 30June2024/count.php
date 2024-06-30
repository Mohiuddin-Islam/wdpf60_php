<?php 

$fruits = array("apple", "orange", "banana");

echo count($fruits);


$locations = array("Italy", "Amsterdam", array("Boston","Des Moines"),
"Miami");

echo "<br>";
echo count($locations);
echo "<br>";
echo count($locations, 1);
echo "<br>";
echo sizeof($locations);
echo "<br>";
echo sizeof($locations, 1);

?>