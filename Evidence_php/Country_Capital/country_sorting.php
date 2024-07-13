<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country & Capital Sorting</title>
</head>
<body>
    <h2>Country & Capital where country wise sorting</h2>

    <?php 
    
    $countries = [
        "Bangladesh"=>"Dhaka",
        "Nepal"=>"Kathmandu",
        "SriLanka"=>"Colombo",
        "China"=>"Beijing",
        "Japan"=>"Tokyo",
    ];

    foreach($countries as $country=> $capital){
        echo "$country : $capital<br>";
    }
    echo "<hr>";
    ksort($countries);

    
    foreach($countries as $country=> $capital){
        echo "$country : $capital<br>";
    }
    
    
    ?>
</body>
</html>