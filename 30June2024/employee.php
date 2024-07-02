<?php 

class Employee{

private $name;
public $age;
public $address;
protected $wage;

public function setName($name){
    $this->name = $name;
}
public function setWage($wage){
    $this->wage = $wage;
}

public function info(){
    $full = "";
    $full .= "Name: " . $this->name . "<br>";
    $full .= "Age: " . $this->age . "<br>";
    $full .= "Address: " . $this->address . "<br>";
    $full .= "Salary: " . $this->wage;
    return $full;
}

}  //End of class


class Programmer extends Employee{
    public $wage = 10000;
public function bonus($percent){
    return $this->wage * $percent;
}
}

$obj1 = new Employee;
//$obj1->name= "Rahim";

$obj1->setName("Arif");
$obj1->setWage(5000);
$obj1->age= 20;
$obj1->address = "Mirpur";


echo $obj1->info();
echo "<br>";
echo "<hr>";

$Prog1 = new Programmer;
echo "Salary:" . $Prog1->wage . "<br>";
echo "Bonus:" . $Prog1->bonus(".10");

?>