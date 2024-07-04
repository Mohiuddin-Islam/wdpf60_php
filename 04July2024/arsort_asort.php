<?php 

$cities = array("Dhaka", "Khulna", "Rajshahi", "Cumilla", "Sylhet", "Barisal");

echo "<pre>";
print_r($cities);

asort($cities);
echo "<hr>";
print_r($cities);

arsort($cities);
echo "<hr>";
print_r($cities);


?>