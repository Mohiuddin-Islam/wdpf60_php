<?php $conn = new mysqli("localhost", "root", "", "evd2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Delete</title>
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
<h2>Ans No-2</h2>
<h2>Student Delete Page</h2>

    <?php 
    if(isset($_POST['delete'])){
        $mid = $_POST['dtl'];

        $sql = $conn->query("DELETE FROM student where id = '$mid'");
        $delete = mysqli_query($conn,$sql);

        if($delete){
            echo "<h3 style= 'color:green'>Delete Successfully</h3>";
        }
    }
    
    
    ?>

    <form action="" method="post">
        <select name="dtl">
            <option value="">Select One</option>

            <?php 
            $sql = $conn->query("SELECT * FROM student");

            while($row = $sql->fetch_assoc()){   ?>

            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
        <?php } ?>
            
        </select>
        <input type="submit" name="delete" value="Delete">

    </form><br>

    <?php 
    $sql = $conn->query("SELECT * FROM result");
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Module Name</th>
            <th>Total Marks</th>
            <th>Student ID</th>
            
        </tr>
        <?php 
        while($row = $sql->fetch_assoc()){ ?>

        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['module_name'] ?></td>
            <td><?php echo $row['totalmarks'] ?></td>
            <td style="text-align: center;"><?php echo $row['student_id'] ?></td>
            
        </tr>
        <?php } ?>
    </table><br>
    <a href="student_table.php">Student Entry List</a><br><br>
    <a href="student_entry.php">New Student Entry</a><br><br>
    <a href="all_display.php">All Display Records</a>

</body>
</html>