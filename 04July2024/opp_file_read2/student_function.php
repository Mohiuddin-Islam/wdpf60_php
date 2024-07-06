<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Result</title>
</head>
<body>
    <?php
    if(isset($_REQUEST['submit'])){
        $stid = $_REQUEST['stid'];
        
        resultCheck($stid);
        //echo "<pre>";
        //print_r($data);
    }
    function resultCheck($stid){
        $datas = file('result.txt');

        foreach($datas as $data){
            $line = explode("|" ,$data);
            list($id,$name,$score,$result) = $line;
            if($id == $stid){
                $output = "ID:- $id <br>Name:-$name <br> Score:- $score <br> Result:- $result";
                
            
            }
        }
        echo $output;

    }                 
    
    ?>

    
<form action="" method="post">
    <select name="stid" >
        <option value="">Select one</option>
        <option value="1">Saif</option>
        <option value="2">Jamil</option>
        <option value="3">Rakib</option>

    </select>
    <input type="submit" name="submit" value="Show result">

</form>


</body>
</html>