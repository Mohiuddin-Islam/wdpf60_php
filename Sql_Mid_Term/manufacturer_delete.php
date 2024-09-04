<?php $conn = new mysqli("localhost:3306", "root", "", "company"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Delete</title>
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
<h2>Ans No-3</h2>
<h2>Manufacturer List</h2>

    <?php 
    if(isset($_POST['delete'])){
        $mid = $_POST['company'];

        $sql = "DELETE FROM manufacturer WHERE id = '$mid'";
        $delete = mysqli_query($conn,$sql);

        if($delete){
            echo "<h3 style= 'color:green'>Successfully Delete</h3>";
        }
    }
    
    ?>

    <form action="" method="post">
        <select name="company">
            <option value="">Select One</option>

            <?php 
            $sql = $conn->query("SELECT * FROM manufacturer");

            while($row = $sql->fetch_assoc()){   ?>

                <option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?><?php echo $row['name'] ?></option>
        <?php  }   ?>
            
        </select>
        <input type="submit" name="delete" value="Delete">

    </form><br>
    <h2>Ans No-2</h2>
    <h2>Manufacturer Entry</h2>

    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "CALL add_manufacturer('$name','$address','$contact')";

        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "<h3 style= 'color:green'>Data Inserted</h3>";
        }else{
            echo "<h3 style= 'color:red'>Data not Inserted</h3>";
        }
    }
    
    
    ?>

    <form action="" method="post">
        Name: <br><input type="text" name="name" placeholder="Enter Manufacturer Name"><br>
        Address: <br><textarea name="address" placeholder="Enter Address Here"></textarea><br>
        Contact: <br><input type="text" name="contact" placeholder="Enter Contact Number"><br><br>
        <input type="submit" name="submit" value="Submit">


    </form><br>
    <a href="product.php">Product List</a>
</body>
</html>