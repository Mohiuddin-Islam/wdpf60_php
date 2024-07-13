<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial Check</title>
</head>
<body>
    <h1>Factorial Check</h1>

    <?php 
    if(isset($_POST['submit'])){
        $num = $_POST['number'];
        echo factCalc($num);
    }
    
    function factCalc($num){
        $fact = 1;

        for($i = $num; $i>=1; $i--){
            $fact = $fact * $i;
        }
        echo "Factorial of $num is- " . $fact;
    }
    
    ?>
    <form action="" method="post">
        <input type="number" name="number" placeholder="Enter Number">
        <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>