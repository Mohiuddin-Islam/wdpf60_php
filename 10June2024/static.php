<?php 

function myTest(){
    static $x = 0;
    echo $x;
    $x += 7;
}
myTest();
myTest();
//myTest();
//myTest();


?>