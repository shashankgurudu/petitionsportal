<?php
	include("connection.php");

	session_start(); 
	if(!isset($_SESSION['login_user'])) {
		header("location: login.php");
		exit();
	}

	if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	$query =mysql_query(" SELECT * FROM upvotes where petition_no='$id'");
	while($resu = mysql_fetch_array($query)){
		echo "<div id='text'> 
		<h1>".$resu['username']."</h1>";
		echo "</div>";
		
	}
	echo "<a href= 'petition.php'> <button class='btn btn-default' type='button'> Back to Petitions </button> </a>"

}


?>
