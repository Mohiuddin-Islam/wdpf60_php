<?php
$x = 10;
$y = 20;

function myTest() {
    $x = 10; $y = 35;
    $y = $x + $y;
    echo $y;
} 

myTest();
// echo $y;


// echo "<pre>";
// print_r($GLOBALS);

?>