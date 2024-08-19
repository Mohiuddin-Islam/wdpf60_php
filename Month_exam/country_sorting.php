<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Sorting</title>
</head>
<body>
    <?php 
    echo "<h3>Before Sorting</h3>";

    $countries = [
        "Nepal"=>"Kathmandu",
        "SriLanka"=>"Colombo",
        "India"=>"Delhi",
        "Bangladesh"=>"Dhaka",
        "Pakistan"=>"Islamabad",
    ];

    foreach($countries as $country=> $capital){
        echo "$country : $capital<br>";

    }

    echo "<hr>";
    echo "<h3>After Sorting</h3>";
    ksort($countries);
    foreach($countries as $country=> $capital){
        echo "$country : $capital<br>";

    }

    
    
    
    
    ?>
</body>
</html>