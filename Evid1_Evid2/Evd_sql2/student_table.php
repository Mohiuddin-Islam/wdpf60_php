<?php $conn = new mysqli("localhost", "root", "", "evd2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Page</title>
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
<h2>Ans No-5</h2>
<h2>Student Edit Page</h2>

    <?php 
    $sql = $conn->query("SELECT * FROM student");
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Address</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
        <?php 
        while($row = $sql->fetch_assoc()){ ?>

        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['mobile'] ?></td>
            <td><a href="edit.php?id=<?php echo $row['id'] ?>">Edit</a></td>
        </tr>
        <?php } ?>
    </table><br>
    <a href="student_delete.php">Student Delete</a>
</body>
</html>