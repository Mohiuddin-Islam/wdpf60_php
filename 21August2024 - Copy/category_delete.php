<?php

require_once "dbconfig.php";

    $id = $_GET['id'];

    $sql = "DELETE FROM categories WHERE cat_id = '$id' ";

    $delete = $db->query($sql);

    if($delete){
    echo "<h3 style= 'color:red'>Delete</h3>";

    header('location: all_category.php');
    }

?>