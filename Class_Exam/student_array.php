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
    <h1>Ans No-3</h1>
    <h1>Student Result Sheet</h1>
    <?php 
    $students = [
        "Abdullah"=>90,
        "Saif"=>35,
        "Arif"=>50,
        "Nazrul"=>70,
        "Jamil"=>100,
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

    echo "$students get Maximum Score: $max";
    
    
    ?>
</body>
</html>