<?php $conn = new mysqli("localhost", "root", "", "eved")  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>Ans no-2</h1>
<h3>All manufactures</h3>

    <?php
    if (isset($_POST['delete'])) {
        $mid = $_POST['company'];

        $sql = "DELETE FROM manufacturer WHERE m_id = '$mid' ";

        $delete = mysqli_query($conn, $sql);

        if ($delete) {
            echo "Delete";
            header("location: product.php");
        }
    }

    ?>


    <form action="" method="post">
        <select name="company">
            <option value="">Select one</option>

            <?php
            $sql = $conn->query("SELECT * FROM manufacturer");

            while ($row = $sql->fetch_assoc()) {
            ?>

                <option value="<?php echo $row['m_id'] ?>"><?php echo $row['company_name'] ?></option>

            <?php } ?>
        </select><br>
        <input type="submit" value="Delete" name="delete">
    </form> <br>

    <a href="product.php">Product list</a><br>
    <a href="manufacture_entry.php">manufacture_entry</a>
</body>

</html>