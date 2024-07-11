<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade File</title>
</head>
<body>
    <h2>Reads a Grade</h2>

    <?php 
    
    if(isset($_POST['submit'])){
        $grade = $_POST['grade'];

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
        <input type="text" name="grade" placeholder="Enter Text">
        <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>