<!DOCTYPE html>
<html>
<head>
	<title>College Petitions Portal</title>
</head>
<body bgcolor="#4FC3F7" >

<?php
session_start(); 
if (isset($_SESSION['login_user']) == FALSE) {
	header("location: login.php");
}
else{
	$connection = mysql_connect("localhost", "root", "guru") or die("no connection");
	$db = mysql_select_db("cbit", $connection);
echo "<div id='create'> 
	<form id='loginform' name='loginid' method='post' action='cre.php'>
 		<input  name='title' type='text' id='title'>
 		<input  name='text' type='text' id='text'>
 		<input  name='submit' type='submit' id='submit' value='submit'>
 	</form>
 	</div>";

	$tbval = mysql_query("SELECT * FROM peti") or die("query error"); 
	while ($result = mysql_fetch_array($tbval)) {
		echo "<div id='text'> 
		<h1>".$result['title']."</h1>
		<h1>".$result['text']."</h1>
		<h1>".$result['count']."</h1>
		<input  name='count' type='submit' id='count' value='count'>
		</div>";
	}
	
}
?>
</body>
</html>
