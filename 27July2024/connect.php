<?php 

$host = 'localhost';
$user = 'root';
$pass = '';
$db = "info60";

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "connection failed". $conn->connect_error;
    exit();
}

?>