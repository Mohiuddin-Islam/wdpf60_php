<?php $conn = new mysqli("localhost","root","","eved2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ans no-4</h1>

<?php

$sql =$conn->query("SELECT * FROM all_display");

 ?>

 <table border="1">
    <tr>
        <th>Student ID</th>
        <th>Student Name</th>
        <th>Address</th>
        <th>Mobile</th>
        <th>Module name</th>
        <th>Total marks</th>
    </tr>

    <?php while($row = $sql->fetch_assoc()) {?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['student_name'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <td><?php echo $row['module_name'] ?></td>
            <td><?php echo $row['totalmarks'] ?></td>
        </tr>


        <?php } ?>

 </table><br>

 <a href="student_delete.php">Student_delete</a>



</body>
</html>