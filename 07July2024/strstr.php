<?php 

$url = "sales@exmple.com";
$withdot = strstr($url,".");
$withoutdot = ltrim($withdot,".");
echo $withoutdot;


?>