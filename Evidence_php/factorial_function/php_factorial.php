<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Number</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){

$num = $_POST['number'];
$fact = $num;

for($i = 1; $i < $num; $i++){
    $fact = $fact * $i;
}

echo "factorial of $num is = ".$fact;
//echo "{$num} factorial number is: {$fact}";

}
    ?>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter Number">
        <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>