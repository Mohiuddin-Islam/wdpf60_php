<?php

$cities = array("Columbus", "Akron", "Cleveland", "Cincinnati");

echo "<pre>";
print_r($cities);

$string = implode("|", $cities);
var_dump($string);
echo $string;

//echo implode("|", $cities);
?>