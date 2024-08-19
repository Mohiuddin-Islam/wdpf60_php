<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max_Min</title>
</head>
<body>

<?php 
if(isset($_POST['submit'])){
    $number = $_POST['number'];
    $numArray = explode(",",$number);

    $max = $numArray[0];
    $min = $numArray[0];

    for($i = 1; $i<count($numArray); $i++){
        if($numArray[$i] > $max){
            $max = $numArray[$i];
        }
        if($numArray[$i] < $min){
            $min = $numArray[$i];
        }
    }
    echo "Among These Number are: $number<br>";
    echo "Maximum Number are: $max" . "<br>Minimum Number are: $min";
}




?>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter Number">
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>