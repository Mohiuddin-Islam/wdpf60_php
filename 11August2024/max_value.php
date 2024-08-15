<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Max Number</title>
</head>
<body>

    <?php 
    if(isset($_POST['submit'])){
        $number = $_POST['number'];
        $numArray = explode(",", $number);

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
        echo "Among These Number: $number<br>";
        echo "<h3 style= 'color:green'>Maximum Number are: $max". "<br>Minimum Number are: $min</h3>";
    }
    
    
    
    ?>
    <form action="" method="post">
        <input type="text                                          " name="number" placeholder="Enter Number">
        <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>