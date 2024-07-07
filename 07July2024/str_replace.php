<?php

$author = "jason@example.com";
$author = str_replace("@","(at)",$author);
echo "Contact the author of this article at $author.";

echo "<hr>";


$phrase  = "You should eat fruits, vegetables, and fiber every day.";
$healthy = array("fruits", "vegetables", "fiber");
$yummy   = array("pizza", "beer", "ice cream");

$newphrase = str_replace($healthy, $yummy, $phrase);

echo $newphrase;

?>