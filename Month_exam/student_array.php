<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Array</title>
    <style>
        th,td{
            border: 1px solid;
            width: 100px;
        }
        table{
            border-collapse: collapse;
        }


    </style>
</head>
<body>
    <?php 
    $students = [
        "Abdullah"=>80,
        "Nazrul"=>50,
        "Arif"=>30,
        "Jamil"=>70,
        "Noman"=>100,
    ];
    echo "<pre>";
    print_r($students);
    echo "<br>";

    echo "<table>";
    echo "<tr><th>Name</th><th>Score</th></tr>";

    foreach($students as $name=> $score){
        echo "<tr><td>$name</td><td>$score</td></tr>";
    }
    echo "</table>";
    echo "<br>";

    $max = max($students);
    $students = array_search($max,$students);

    echo "$students get Maximum Number: $max";
    
    
    
    
    ?>
</body>
</html>