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
$id = $_REQUEST['id'];
$nm = $_REQUEST['nm'];
$ad = $_REQUEST['ad'];
$mb = $_REQUEST['mb'];

if(isset($_POST['submit'])){
    extract($_POST);

    $sq = "UPDATE student SET student_name='$student',address='$address',mobile='$mobile' WHERE id='$id'";

    $update = mysqli_query($conn,$sq);

    if($update){
        echo "Updated";
        header("location: student_table.php");
    }else{
        echo "Not updated";
    }


}


/*$sql = $conn->query("SELECT * FROM student WHERE id='$id'");
$row = $sql->fetch_assoc();*/

?>



<form action="" method="post">
    ID : <br>
    <input type="text" name="id" value="<?php echo /*$row['id']*/ $id; ?>"><br>
    Name: <br>
    <input type="text" name="student" value="<?php echo /*$row['student_name']*/ $nm; ?>" ><br>

    Address: <br>
    <textarea name="address" ><?php echo /*$row['address']*/ $ad; ?></textarea><br>

    Mobile: <br>
    <input type="text" name="mobile" value="<?php echo /*$row['mobile']*/ $mb; ?>"><br>

    <input type="submit" value="Update" name="submit">

</form>



</body>
</html>