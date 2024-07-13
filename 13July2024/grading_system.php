<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grading System</title>
</head>
<body>
    <h1>Grading System</h1>

    <?php 
    if(isset($_POST['submit'])){
        $grade = $_POST['grade'];

        $grade = strtoupper($grade);

        switch($grade){
            case "A":
            echo "Excellent";
            break;
            case "B":
            echo "Good";
            break;
            case "C":
            echo "Fair";
            break;
            case "D":
            echo "Poor";
            break;
            case "F":
            echo "Failure";
            break;
        }
    }
    
    
    
    ?>
    
    <form action="" method="post">
        <input type="text" name="grade" placeholder="Enter Grade"><br>
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>