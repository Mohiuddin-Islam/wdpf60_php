<?php $conn = new mysqli("localhost","root","","eved2"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Delete Table</title>
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
<h1>Ans No-2</h1>

<?php
if(isset($_POST['submit'])){
    $st_id = $_POST['stud'];

    $sql = "DELETE FROM student WHERE id='$st_id'";

    $delete = mysqli_query($conn,$sql);

    if($delete){
        echo "<h3 style= 'color:red'>Deleted</h3>";
        
    }

}

?>

<form action="" method="post">
    <select name="stud" >
        <option value="">Select One</option>

        <?php
        $data = $conn->query("SELECT * FROM student");

        while($row = $data->fetch_assoc()){
        
        ?>

        <option><?php echo $row['id'] ?><?php echo $row['student_name'] ?></option>
        

<?php } ?>
    </select>
    <input type="submit" value="Delete" name="submit">

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
<?php while($result = $sql->fetch_assoc()){ ?>

    <tr>
        <td><?php echo $result['id'] ?></td>
        <td><?php echo $result['module_name'] ?></td>
        <td><?php echo $result['totalmarks'] ?></td>
        <td><?php echo $result['student_id'] ?></td>
        
    </tr>

    <?php } ?>

</table><br>

<a href="entry_student.php">Entry_student</a>

</body>
</html>