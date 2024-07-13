<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max_min Number</title>
</head>
<body>
    <h2>Max_Min Number</h2>


    <?php 
    if(isset($_POST['submit'])){
        $numbers = $_POST['numbers'];
        $numArray = explode(",", $numbers);

        $max = $numArray[0];
        $min = $numArray[0];


        for($i = 0; $i<count($numArray); $i++){
            if($numArray[$i] > $max){
                $max = $numArray[$i];
            }
            if($numArray[$i] < $min){
                $min = $numArray[$i];
            }
        }
        
        echo "Among These number: $numbers<br>";
        echo "Maximum Number is: $max" . "<br>Minimum Number is: $min";

    }
    
    
    
    
    ?>

    <form action="" method="post">
        <input type="text" name="numbers" placeholder="Enter Number"><br>
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>