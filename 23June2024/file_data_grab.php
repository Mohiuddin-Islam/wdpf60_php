<?php 

$data = file("users.txt");
//echo "<pre>";
//print_r($data);

echo "<table border= '1'>";
echo "<tr><th>Name</th><th>Profession</th><th>Player</th></tr>";

foreach($data as $item){
$line = explode("|", $item);
list($name, $prof, $player) = $line;
echo "<tr><td>$name</td><td>$prof</td><td>$player</td></tr>";

//echo "<pre>";
//print_r($line);
//print $item . "<br>";
}


?>