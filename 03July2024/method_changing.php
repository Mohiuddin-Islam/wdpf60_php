<?php
 class person
 {
    private $name="";
    private $age="";
 
    public function setName($name="")
    {
      $this->name=$name;
    }
    public function setAge($age="20")
    {
      $this->age=$age;
    }
    public function getInfo()
    {
      echo "Hello, My name is ".$this->name." and my age is ".$this->age." years.";
    }
}
 
$person = new person();
  $person->setName("Masud Alam");
  $person->setAge("33");
  $person->getInfo();
?>