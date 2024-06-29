<?php 

$students = array("Jamil"=>20, "Rakib"=>25, "Saif"=>22);

if(array_key_exists("Jamil", $students)) {
    echo "Jamil got {$students['Jamil']}";
}else{
    echo "Not found";
}


?>