<?php
class test{
    public $name;
    private $mobile;
    function __construct($name, $mobile){
        $this->name = $name;
        $this->mobile = $mobile;
    }
}
$obj1 = new test("Farhaan" , "01700000000");
echo "Result Before Copy \n";
print_r($obj1);
echo "After Copy Both Object will show same result\n";
$obj2 = $obj1; //Copy of the object
$obj2->name = "Habibur";
echo "<pre>";
print_r($obj1);
print_r($obj2);


echo "<hr>";
?>

<?php
class test1{
    public $name;
    private $mobile;
    function __construct($name, $mobile){
        $this->name = $name;
        $this->mobile = $mobile;
    }
}
$obj1 = new test1("Farhaan" , "01700000000");
echo "Result Before Copy \n";
print_r($obj1);
echo "After Copy Both Object will show same result\n";
$obj2 = $obj1; //Copy of the object
$obj2->name = "Habibur";
print_r($obj1);
print_r($obj2);

?>