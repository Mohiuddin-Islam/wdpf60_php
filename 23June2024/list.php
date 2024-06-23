<?php 

$fruits = ["Mango", "Banana", "Orange", "Apple"];
list($var1,$var2,$var3,$var4,) = $fruits;

echo $var1;

echo "<br> <hr>";

?>

<?php
function userProfile()
{
$user[] = "Mohiuddin Islam";
$user[] = "mohiuddincr7@gmail.com";
$user[] = "English";
return $user;
}
list($name, $email, $language) =userProfile();
echo "Name: {$name}<br> Email: {$email}<br> Language: {$language}";
?>