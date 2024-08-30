<?php $conn=new mysqli("localhost","root","","eved4")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ans no -3</h1>
    <h3>Company entry</h3>

    <?php
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "CALL insert_manufacture('$name','$address','$phone')";

        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "Inserted";
            header("location: manufacture_delete.php");
        }

    }
    
    
    ?>


    <form action="" method="post">
         Name : <br>
        <input type="text" name="name" ><br>
        Address : <br>
        <textarea name="address" ></textarea><br>
        Contact No : <br>
        <input type="text" name="phone" ><br>
        <input type="submit" value="Submit" name="submit">

    </form>
</body>
</html>