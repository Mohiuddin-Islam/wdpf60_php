<?php 

$states = array("Alabama", "Alaska", "Arizona", "Arkansas",
"California", "Colorado", "Connecticut");

echo "<pre>";
print_r($states);

//$subset = array_splice($states, 2, 2, array("New York", "Florida"));

echo "<hr>";
print_r($states);

$subset = array_splice($states, 2, -1, array("New York", "Florida"));

echo "<hr>";
print_r($subset);  


?>