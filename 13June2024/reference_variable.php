<?php 

$value1 = "Hello";
$value2 =& $value1; // $value1 and $value2 both equal "Hello"

$value2 = "Goodbye";

echo $value1;

echo "<br>";

?>


<?php 

$value1 = "Hello";
$value2 =& $value1; // $value1 and $value2 both equal "Hello"

$value2 = "Goodbye";
$value1 = "Today is last class before Eid";

echo $value2;

?>