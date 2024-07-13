<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Sorting</title>
</head>
<body>
    <h1>Country & Capital where country wise sorting</h1>
    <?php 
    
    $countries = [
        "Bangladesh"=>"Dhaka",
        "SriLanka"=>"Colombo",
        "Uganda"=>"Kampala",
        "China"=>"Beijing",
        "Japan"=>"Tokoyo",
    ];

    foreach($countries as $country=>$capital){
        echo "$country | $capital <br>";
    }
    echo "<hr>";
    
    ksort($countries);
    foreach($countries as $country=>$capital){
    echo "$country | $capital <br>";
    }
// echo "<pre>";
// print_r($countries);
    
    ?>
</body>
</html>