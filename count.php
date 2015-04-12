<?php
	include('connection.php');
	

session_start(); 
if (!isset($_SESSION['login_user'])) {
	header("location: login.php");
	exit();
}

//if(isset($_GET['ides']))
{
	$id=$_GET['ides'];
	echo $id;
	$query="UPDATE peti set count=count+1 where serial_no='$id'";
	if(mysql_query($query))
		header("location:petition.php?value=success");
	else
		header("location:petition.php?value=fail");

}

?>
