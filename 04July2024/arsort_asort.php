<?php 

$cities = array("Dhaka", "Khulna", "Rajshahi", "Cumilla", "Sylhet", "Barisal");

echo "<pre>";
print_r($cities);

asort($cities);  //asort means A to Z word;
echo "<hr>";
print_r($cities);

arsort($cities);  //arsort means Z to A reverse word;
echo "<hr>";
print_r($cities);


?>