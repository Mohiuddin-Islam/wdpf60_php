<?php 

$states = ["Ohio", "Iowa", "Arizona", "Iowa", "Ohio"];
$stateFrequency = array_count_values($states);

echo "<pre>";
print_r($states);
$uniquesStates = array_unique($states);
print_r($uniquesStates);



?>