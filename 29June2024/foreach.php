<?php 

//Array

$fruits = array("Mango", "Orange", "Apple", "Jackfruits", "Banana");

foreach ($fruits as $x) {
    echo $x . "<br>";
}

echo"<hr>";

//Associative array
$students = array("Tanim"=>20, "Saif"=>19,"Rakib"=>22);

foreach ($students as $name=>$age) {
    echo "$name : $age <br>";
}

?>