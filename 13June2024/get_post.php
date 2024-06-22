<h1>Get Method</h1>
<a href="get_post.php?name=Mohiuddin&email=mohiuddincr7@gmail.com&address=Malibagh">Click Here</a><br>

<?php 

//echo "<pre>";
// print_r($_GET);
// print_r($_POST);
//echo "</pre>";

if(isset($_REQUEST['subscribe'])){
echo $_REQUEST['email'];
echo "<br>";
echo $_REQUEST['pswd'];
}

?>

<h1>Post method</h1>

<form action="" method="post">
<br>
Email address:<br>
<input type="text" name="email" size="20" maxlength="50" value="" />
<br>
Password:<br>
<input type="password" name="pswd" size="20" maxlength="15" value="" />
<br>
<input type="submit" name="subscribe" value="subscribe!" />
<br>
</form>
