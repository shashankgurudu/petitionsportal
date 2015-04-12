<?php
	session_start();
	$user = $_SESSION['login_user'];
	$connection = mysql_connect("localhost", "root", "guru") or die("no connection");
	$db = mysql_select_db("cbit", $connection);
	$title = $_POST['title'];
	$text = $_POST['text'];
	mysql_query("INSERT INTO peti(title,text,count,user) VALUES('$title','$text','0','$user') ");
	header("location: petition.php");
?>