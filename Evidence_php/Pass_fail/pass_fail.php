<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST['submit'])){

        $number = $_POST['num1'];
        $number1 = $_POST['num2'];
        $number2 = $_POST['num3'];
        echo grade($number, $number1, $number2);
    }

    function grade($mcq, $des, $evid){
        if($mcq>= 80 && $des >= 60 && $evid >= 60){
            echo "Pass";
        }else{
            echo "Fail";
        }
    }
    
    ?>
    
<form action="" method="post">
    
    <input type="number" name="num1" placeholder="Enter Number">
    <input type="number" name="num2" placeholder="Enter Number">
    <input type="number" name="num3" placeholder="Enter Number">
    <input type="submit" name="submit" value="submit">

</form>
</body>
</html>