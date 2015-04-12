<?php
	include("connection.php");
	$user = $_POST['usernamesin'];
	$pass = $_POST['passwordsin'];
	$query = "INSERT into cbit values('$user','$pass')";
	if(mysql_query($query)){
		echo "Success";
		
	}

?>