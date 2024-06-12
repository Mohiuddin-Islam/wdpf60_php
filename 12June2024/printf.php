<?php 
printf("Bar inventory: %d bottles of tonic %s.", 100, "water");
echo "<br>";

printf("%d bottles of tonic water cost $%.2f", 100, 43.20);   //2f. means = output 00;

echo "<br>";

$cost = sprintf("$%.2f", 43.2); // $cost = $43.20

echo $cost;
?>