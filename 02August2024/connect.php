<?php

$host = 'localhost:3310';
$user = 'root';
$pass = '';
$db = 'wdpf61';

$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error){
    echo "connection failed".$conn->connect_error;
    exit();
}

?>