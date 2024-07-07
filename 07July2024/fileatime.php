<?php

$file = 'files/user.txt';
//echo fileatime($file);

echo "<br>";

echo "Created Time: ". date("m-d-y g:i:sa", filectime($file)). "<br>";
echo "Modified Time: ". date("m-d-y g:i:sa", filemtime($file)). "<br>";
echo "Access Time: ". date("m-d-y g:i:sa", fileatime($file)). "<br>";

?>