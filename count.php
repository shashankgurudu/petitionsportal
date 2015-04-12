<?php
	$connection = mysql_connect("localhost", "root", "guru") or die("no connection");
	$db = mysql_select_db("cbit", $connection);
	$title = $_POST['title'];
	
	mysql_query("UPDATE peti  SET count= count +1);
	header("location: petition.php")
?>