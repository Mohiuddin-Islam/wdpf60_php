<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade</title>
</head>
<body>

<?php 
if(isset($_POST['submit'])){
    $grade = $_POST['grade'];

    $grade = strtoupper($grade);

    if($grade == "A"){
        echo "Excellent";
    }else if($grade == "B"){
        echo "Good";
    }else if($grade == "C"){
        echo "Fair";
    }else if($grade == "D"){
        echo "Poor";
    }else if($grade == "F"){
        echo "Failure";
    }
}


?>
    <form action="" method="post">
        <input type="text" name="grade" placeholder="Enter Grade Here">
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>