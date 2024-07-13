<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Array</title>

    <style>
        th,td{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    
</body>
</html>

<?php 

$students = array("Mohiuddin"=> 80, "Abdullah"=> 70, "Rakib"=> 75, "Saif"=> 65, "Jamil"=> 50);

echo "<pre>";
print_r($students);
echo "<br>";

echo "<table>";
echo "<tr><th>Student Name</th><th>Score</th></tr>";

foreach($students as $name=> $score){
    echo "<tr><td>$name</td><td>$score</td></tr>";
}
echo "</table>";

$max = max($students);
$person = array_search($max, $students);
echo "<br>";
echo "$person get maximum score $max";



?>