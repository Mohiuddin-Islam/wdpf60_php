<?php 

require_once 'connect.php';

$id = $_GET['idn'];
$nm = $_GET['nm'];
$em = $_GET['em'];
$ps = $_GET['ps'];
$pn = $_GET['pn'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];

    $sql = "DELETE FROM sign WHERE id = $id";
    $delete = mysqli_query($conn,$sql);

    if($delete){
        echo "<h3 style='color:green'>Data Delete</h3>";
        header('location: read.php');
    }else{
        "<h3 style='color:green'>Data not Delete</h3>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <h1>Delete</h1>
    <form action="" method="post">
        ID:<input type="text" name="id" value="<?php echo $id; ?>"><br>
        Name:<input type="text" name="name" value="<?php echo $nm; ?>"><br>
        Email:<input type="text" name="email" value="<?php echo $em; ?>"><br>
        Password:<input type="text" name="pass" value="<?php echo $ps; ?>"><br>
        Phone:<input type="text" name="phone" value="<?php echo $pn; ?>"><br>
        <input type="submit" name="submit" value="Delete">

    </form>
</body>
</html>