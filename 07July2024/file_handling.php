<?php 

// $fh = fopen("files/user.txt","r");
// //print_r($fh);

// //echo fgets($fh);
// while(!feof($fh)) {
//     echo fgets($fh). "<br>";
// }
// fclose($fh);

?>

<?php 

$fh = fopen("files/user.txt","a");

fwrite($fh," <br>Hello Everyone");
fclose($fh);

$fh = fopen("files/user.txt","r");
while(!feof($fh)) {
    echo fgets($fh). "<br>";
}
fclose($fh);
unlink('files/user.txt');

?>




