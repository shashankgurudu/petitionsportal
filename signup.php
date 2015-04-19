<?php
	include("connection.php");
	$user = $_POST['usernamesin'];
	$name = $_POST['namein'];
	$pass = $_POST['passwordsin'];
	$email = $_POST['emailin'];
	$query1 = "SELECT username from cbit where username = $user";
	$result = mysql_query($query1);
	$rows = mysql_num_rows($result);
	if ($rows == 0) {
		$query = "INSERT into cbit values('$user','$pass','$name','$email')";
		if(mysql_query($query)){
			echo "Success";
			echo "<a href='petition.php'> Go to petitons </a>";

		}
	}
	else{
		echo "Username already exists";
		echo "<a href='login.php'> Go back </a>";
	}

	
?>