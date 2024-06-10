<?php
$x = 5;
$y = 10;

function myTest() {
    $x = 3; $y = 2;
    $y = $x + $y;
} 

myTest();  // outputs 15
echo $y;

echo "<pre>";
print_r($GLOBALS);

?>