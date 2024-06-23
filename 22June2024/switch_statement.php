<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    if(isset($_POST['submit'])){

    switch($_POST['category']){
        case "news":
        echo "What's happening around the world";
        break;
        case "weather":
        echo "Your weekly forecast";
        break;
        case "sports":
        echo "Latest sports highlights";
        break;
        default:
        echo "Welcome to my site";
    }
    
    }

?>

    <form action="" method="post">
    <select name="category">
        <option value="select one">Select One</option>
        <option value="news">News</option>
        <option value="weather">Weather</option>
        <option value="sports">Sports</option>
        <input type="submit" name="submit" value="SUBMIT">

    </select>
    </form>
</body>
</html>