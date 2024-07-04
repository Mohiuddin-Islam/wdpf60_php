<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number Check with PHP</title>
</head>
<body>

<?php 
if(isset($_REQUEST['submit'])){

//print_r($_POST);
echo $_POST['number'];

function primecheck($num){
if($num==0){
    return (" 0 Is not a prime number");
}else if($num== 1){
    return (" 1 Is not a prime number");
}else if($num== 2){
    return (" 2 Is a prime number");
}else{
    for($i= 2;$i<$num;$i++){
        if($num%2== 0){
            return $num . " Is not a prime number";
}

}
return $num . " Is a prime number";
}
}
$number = $_REQUEST["num"];
echo primecheck($number);

}
?>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter Number">
        <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>