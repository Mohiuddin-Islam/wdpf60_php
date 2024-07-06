<?php 

$password = "abcdE";
$password1 = "abcde";

if(strcmp($password, $password1)==0){
    echo "Password Matched";
}else {
    echo " Password Not Matched";
}

echo "<hr>";

if(strcasecmp($password, $password1)==0){
    echo "Password Matched";
}else {
    echo " Password Not Matched";
}

?>