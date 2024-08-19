<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Read</title>
</head>
<body>

    <?php 
    if(isset($_POST['submit'])){
        $stid = $_POST['stid'];
        $obj = new Student('result.txt');
        $obj->Result($stid);

    }
    
    class Student{
        public $datas;

        public function __construct($x){
            $this->datas = file($x);
        }

        public function Result($stid){
            foreach($this->datas as $data){
                $line = explode("|", $data);
                list($id, $name, $batch, $result) = $line;
                if($id == $stid){
                    echo "ID: $id<br> Name: $name<br> Batch: $batch<br> Result: $result";
                }
            }
        }
    }
    
    
    
    ?>
    <form action="" method="post">
        <select name="stid">
            <option value="">Choose One</option>
            <option value="1">Saif</option>
            <option value="2">Abdullah</option>
            <option value="3">Nazrul</option>
        </select>
        <input type="submit" name="submit" value="Show Result">

    </form>
</body>
</html>