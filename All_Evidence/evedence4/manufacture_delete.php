<?php $conn=new mysqli("localhost","root","","eved4")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ans no-2</h1>
    <h2>Manufacture</h2>

    <?php
    if(isset($_POST['submit'])){
        $mid = $_POST['company'];

        $sq = "DELETE FROM manufacturer WHERE id='$mid'";

        $delete = mysqli_query($conn,$sq);

        if($delete){
            echo "Deleted";
            header("location: product_list.php");
        }

    }
    
    
    ?>

    <form action="" method="post">
        <select name="company" >
            <option value="">Select one</option>
            <?php
            $sql = $conn->query("SELECT * FROM manufacturer");
            
            while($row= $sql->fetch_assoc()){
            ?>
            <option><?php echo $row['id'] ?><?php echo $row['name'] ?></option>

                <?php } ?>
        </select><br>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>