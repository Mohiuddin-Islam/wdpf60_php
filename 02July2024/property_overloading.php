<?php 

class Employee{
    public $name;

    public function __set($propName, $propValue){
        $this->$propName = $propValue;
    }
}

$emp = new Employee;
echo $emp->name = "Imran Hassn" . "<br>";
echo $emp->phone = "01752437955";


?>