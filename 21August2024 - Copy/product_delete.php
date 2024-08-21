<?php 
$id = $_GET['id'];
require_once "dbconfig.php";

$result = $db->query("DELETE FROM products WHERE id = '$id'");
if($result){
    header("location:all_products.php");
}


?>