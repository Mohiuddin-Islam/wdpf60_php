<?php 

$students = array("Jamil"=>20, "Rakib"=>25, "Saif"=>22);

$found = array_search("22", $students);



if($found){
    echo "Found {$found} and he scored $students[$found]";
}else {
    echo "Not found";
}

?>