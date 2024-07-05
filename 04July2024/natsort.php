<?php 

$files = array("picture1.jpg", "picture10.jpg", "picture2.jpg", "picture20.jpg",  "picture5.jpg", "picture8.jpg",  "picture22.jpg");

echo "<pre>";
print_r($files);

natsort($files);  //natsort means 0 to 10 length number;
//natcasesort($files);

echo "<hr>";
print_r($files);

?>