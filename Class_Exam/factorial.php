<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial</title>
</head>
<body>
    <h1>Ans No-2</h1>
    <h1>Factorial Number Check</h1>


    <?php 
    if(isset($_POST['submit'])){
        $num = $_POST['number'];
        echo factCheck($num);

    }
    function factCheck($num){
        $fact = 1;

        for($i = $num; $i>=1; $i--){
            $fact = $fact * $i;
        }
        echo "Factorial of $num are- " . $fact;
    }
    
    
    ?>
    <form action="" method="post">
        <input type="text" name="number" placeholder="Enter Number">
        <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>