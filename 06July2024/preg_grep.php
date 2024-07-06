<?php

$foods = array("pasta", "steak", "fish", "potatoes", "pizza", "kabab", "chiken");
$food = preg_grep("/^p/", $foods);

print_r($food);
?>