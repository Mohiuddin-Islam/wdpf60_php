<?php $conn = new mysqli("localhost", "root", "", "evd2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Display</title>
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
    <h2>Ans No-4</h2>
    <h2>Display all student records from the student and result table</h2>
    <?php 
    $sql = $conn->query("SELECT * FROM all_display");
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Module Name</th>
            <th>Total Marks</th>
        </tr>
        <?php 
        while($row = $sql->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <td><?php echo $row['module_name'] ?></td>
            <td style="text-align: center;"><?php echo $row['totalmarks'] ?></td>
        </tr>
    <?php } ?>
        
    </table><br>
    <a href="student_delete.php">Student</a>
</body>
</html>