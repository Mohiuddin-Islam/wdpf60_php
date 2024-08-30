<?php $conn = new mysqli("localhost", "root", "", "eved")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ans no-3</h1>
<h3>New Manufacture</h3>
<?php
if(isset($_POST['submit'])){
    extract($_POST);

    $sql= "CALL insert_manufacture('$name','$address','$contact')";

    $insert = mysqli_query($conn,$sql);

    if($insert){
        echo "Data insert";
        header("location: manufacture.php");
    }

}

?>

<form action="" method="post">
    
    Name: <br>
     <input type="text" name="name" ><br>
    Address : <br>
    <textarea name="address" ></textarea><br>
    Contact No: <br>
    <input type="text" name="contact" ><br>

    <input type="submit" value="Submit" name="submit">
</form>


</body>
</html>

