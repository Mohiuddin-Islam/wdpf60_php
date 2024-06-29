<?php 

$country = array(
    "Bangladesh"=> "Dhaka",
    "Srilanka"=> "Colombo",
    "Uganda"=> "Kampala",
    "Nepal"=> "Kathmondo",
    "Maldives"=> "Malay",
);

while($item = key($country)) {
    echo $item . "<br>";
    next($country);
}




?>