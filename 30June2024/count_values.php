<?php 

$states = ["Ohio", "Iowa", "Arizona", "Iowa", "Ohio"];
$stateFrequency = array_count_values($states);

echo "<pre>";
print_r($states);

echo "<br>";
print_r($stateFrequency);


?>