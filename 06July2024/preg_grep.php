<?php

$foods = array("pasta", "steak", "fish", "potatoes", "pizza", "kabab", "chiken", "fired rice");
$food = preg_grep("/^f/", $foods);

print_r($food);
?>