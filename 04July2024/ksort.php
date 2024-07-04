<?php 

$capitals = ["Bangladesh"=>"Dhaka", "Srilanka"=>"Colombo","Nepal"=>"Katmondu","Newzeland"=>"Waylington","Australiya"=>"Canbera"];

echo "<pre>";
print_r($capitals);

//ksort($capitals);
krsort($capitals);

echo "<hr>";
print_r($capitals);

?>