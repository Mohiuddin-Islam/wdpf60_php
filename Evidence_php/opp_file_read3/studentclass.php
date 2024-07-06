<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
<?php 
        if(isset($_POST["submit"])){
            $stid = $_POST["stid"];
            $st = new Student("result.txt");
            $st->result($stid);

        }
        class Student {
            // public $id;
            // public $name;
            // public $score;
            public $datas;
    
            public function __construct($x){
                $this-> datas = file($x);
            }
    
            public function result($stid){
                foreach($this-> datas as $data){
                    $line = explode("|", $data);
                    list($id,$name,$score,$result) = $line;
                    if($id == $stid){
                        echo "ID- $id<br> Name- $name<br> Score- $score<br> Result- $result";
                    }
        
                }
            }
    
        }
    ?>

<form action="" method="post">
        <select name="stid" >
            <option value="">Select one</option>
            <option value="1">Saif</option>
            <option value="2">Mohiuddin</option>
            <option value="3">Abir</option>

        </select>
        <input type="submit" value="Submit" name="submit">

    </form>
</body>
</html>