<?php 

function myTest(){
    static $x = 0;
    echo $x;
    $x += 5;
}
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();
echo "<br>";
myTest();

?>