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
	
	include('connection.php');
	$user=$_SESSION['login_user'];
	if(isset($_GET['value']))
	{
		if($_GET['value']=="success")
			echo "<script> alert('success');</script>";
		else if($_GET['value']=="fail")
			echo "<script> alert('fail');</script>";
	
		}


echo "<div id='create'> 
	<form id='loginform' name='loginid' method='post' action='cre.php'>
 		<input  name='title' type='text' id='title'>
 		<input  name='text' type='text' id='text'>
 		<input  name='submit' type='submit' id='submit' value='submit'>
 	</form>
 	</div>";

	$tbval = mysql_query("SELECT * FROM peti") or die("query error"); 
	while ($result = mysql_fetch_array($tbval)) 
	{
		$petition_no=$result['serial_no'];
		$query1="SELECT * from upvotes where username='$user' and petition_no='$petition_no'";
		$res=mysql_query($query1);	

		echo "<div id='text'> 
		<h1>".$result['title']."</h1>
		<h1>".$result['text']."</h1>
		<h1>".$result['count']."</h1>";
		
		if(mysql_num_rows($res)==0)
		echo "<a href='count.php?id=".$petition_no."'> upvote </a>";
		else if(mysql_num_rows($res)==1)
		echo	"voted ";		
		echo "<a href='upvote.php?id=".$petition_no."'> upvoted by </a>";
		echo "</div>";
	}
	
}
?>
</body>
</html>
