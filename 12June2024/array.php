<?php 

//Numeric indexed array
$rivers = array("Padma", "Meghna", "Jamuna", "Surma");

echo "<pre>";
print_r($rivers);

$rivers[10]= "Tista";  //10 is Numeric indexed array
$rivers[11]= "Gomti";   //11 is Numeric indexed array
print_r($rivers);
echo "<br>";

//Associative array

$capitals = ["Bangladesh"=>"Dhaka", "Srilanka"=>"Colombo","Nepal"=>"Katmondu"];
$capitals["Bhutan"] = "Thimpu";
print_r($capitals);

?>