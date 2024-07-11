<?php 

echo "<h2>Country & Capital Name</h2>";

$country = array("SriLanka"=>"Colombo", "Nepal"=>"Kathmandu","Bangladesh"=>"Dhaka", "India"=>"Delhi", "Pakistan"=>"Islamabad");

echo "<pre>";
print_r($country);

echo "<h2>Sort Array Country Name</h2>";

ksort($country);
echo "<pre>";
print_r($country);


?>