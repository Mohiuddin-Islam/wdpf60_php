<?php 

$capitals = ["Bangladesh"=>"Dhaka", "Srilanka"=>"Colombo","Nepal"=>"Katmondu","Newzealand"=>"Waylington","Australia"=>"Canbera"];

echo "<pre>";
print_r($capitals);

ksort($capitals);  //ksort means A to Z word;
echo "<hr>";
print_r($capitals);

krsort($capitals);  //krsort means reverse word Z to A;
echo "<hr>";
print_r($capitals);

?>