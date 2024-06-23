<?php 

$divisions = [
    "Dhaka"=> array("Population"=>"10k", "Spot"=>"Buriganga", "Food"=>"Singara <br>"),
    "Rajshahi"=> array("Population"=>"5k", "Spot"=>"Mango Garden", "Food"=>"Mango <br>"),
    "Khulna"=> array("Population"=>"3k", "Spot"=>"Sundarban", "Food"=>"Honey <br>"),
    "Madaripur"=> array("Population"=>"3k", "Spot"=>"ShokuniLeck", "Food"=>"Sweets <br>"),
];

echo $divisions['Rajshahi']['Food'];
echo "<br>";

print_r($divisions);
?>