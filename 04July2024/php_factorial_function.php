<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Number</title>
</head>
<body>

<?php 
if(isset($_POST['number'])){
    $num = $_POST['number'];
    echo factcalc($num);
}
function factcalc($num){
    $fact = 1;
    for($i = $num; $i>=1; $i--){
        $fact = $fact * $i;
    }
    echo "Factorial of $num is = ".$fact;
}


?>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter Number">
        <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>