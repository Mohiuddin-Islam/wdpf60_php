<?php
define("HOST","localhost:3306");
define("USER","root");
define("PASS","");
define("DATABASE","wdpf60");

$db = new mysqli();

@$db->connect(HOST, USER, PASS);

@$db->select_db(DATABASE);

if ($db->connect_errno) {
    echo $db->connect_error;
    exit();
}
echo $db->error;

?>
