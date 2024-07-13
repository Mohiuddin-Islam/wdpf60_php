<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prime Number</title>
</head>
<body>
    <h1>Prime Number Check</h1>


    <?php 
    if(isset($_POST['submit'])){
        $num = $_POST['number'];
        echo primeCheck($num);

    }
    
    function primeCheck($num){
        if($num == 0){
            return $num . " is not allowed";
        }else if($num == 1){
            return $num . " is not a prime number";
        }else if($num == 2){
            return $num . " is a prime number";
        }else{
            for($i = 2; $i<$num; $i++){
                if($num % $i == 0){
                    return $num . " is not a prime number";
                }
            }
            return $num . " is a prime number";
        }
    }
    
    
    ?>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter Number">
        <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>