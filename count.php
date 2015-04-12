<?php
	include('connection.php');
	

session_start(); 
if (!isset($_SESSION['login_user'])) {
	header("location: login.php");
	exit();
}
$user=$_SESSION['login_user'];
if(isset($_GET['id']))
{
	
	$id=$_GET['id'];
	echo $id;
	$query1="SELECT * from upvotes where username='$user' and petition_no='$id'";
		$res=mysql_query($query1);
	if(mysql_num_rows($res)==0)
	{
	$query="UPDATE peti set count=count+1 where serial_no='$id'";
	if(mysql_query($query))
	{
		$query3="INSERT into upvotes(username,petition_no) values ('$user','$id')";
		if(mysql_query($query3))
		header("location:petition.php?value=success");
	}
	else
		header("location:petition.php?value=fail");
	}
	else if(mysql_num_rows($res)==1)
	header("location:petition.php?value=fail&reason=alreadyvoted");

}

?>
