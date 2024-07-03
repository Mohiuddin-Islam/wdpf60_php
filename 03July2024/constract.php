<?php
class oop{
    private $name;
    private $age;
public function __construct($name, $age){
    $this->name = $name;
    $this->age = $age;
}
public function sayHello(){
    echo "Hello World ". $this->name . $this->age;
}


}
$obj=new oop("Mohiuddin ", 26); 


echo "<br>";

$obj->sayHello(); // Result: Hello World

?>