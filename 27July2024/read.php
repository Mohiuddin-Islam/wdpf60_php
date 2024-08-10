<?php 

require_once 'connect.php';

    echo "<h1>Data Read</h1>";

    $read = $conn->query("SELECT * FROM sign");
    $num = 1;

    echo "<table border>";

    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th><th>Phone</th><th colspan =4>Action</th></tr>";

    while($output = $read->fetch_array()){

        echo "<tr>
        <td>$num</td>
        <td>$output[name]</td>
        <td>$output[email]</td>
        <td>$output[password]</td>
        <td>$output[phone]</td>

        <td><a style='text-decoration:none' href='edit.php?idn=$output[id] & nm=$output[name] & em=$output[email] & ps=$output[password] & pn=$output[phone]'>Edit</a></td>
        <td><a style='text-decoration:none' href='delete.php?idn=$output[id] & nm=$output[name] & em=$output[email] & ps=$output[password] & pn=$output[phone]'>Delete</a></td>
        <td><a style='text-decoration:none' href='select.php?idn=$output[id] & nm=$output[name] & em=$output[email] & ps=$output[password] & pn=$output[phone]'>Select</a></td>
        <td><a style='text-decoration:none' href='insert.php?idn=$output[id] & nm=$output[name] & em=$output[email] & ps=$output[password] & pn=$output[phone]'>New</a></td>

        </tr>";
        $num++;
    }

    echo "</table>";









?>