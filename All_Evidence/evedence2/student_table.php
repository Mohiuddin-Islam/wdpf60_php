<?php $conn = new mysqli("localhost","root","","eved2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ans no-5</h1>
<?php
$sql = $conn->query("SELECT * FROM student");

?>

<table border="1">
    <tr>
        <th>ID</th>
    <th>Student name</th>
    <th>Address</th>
    <th>Mobile</th>
    <th>Action</th>
</tr>

<?php while($row = $sql->fetch_assoc()) {?>

<tr>
        <td><?php echo $row['id'] ?></td>
    <td><?php echo $row['student_name'] ?></td>
    <td><?php echo $row['address'] ?></td>
    <td><?php echo $row['mobile'] ?></td>
    <td><a href="edit.php?id=<?php echo $row['id'] ?> & nm=<?php echo $row['student_name'] ?> & ad=<?php echo $row['address'] ?> & mb=<?php echo $row['mobile'] ?>">Edit</a></td>
</tr>


    <?php } ?>



</table>



</body>
</html>