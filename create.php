<?php
	$connection = mysql_connect("localhost", "root", "guru");
	$db = mysql_select_db("cbit", $connection);
	$pri = $_POST['title'];
	echo "$pri";
	echo "string";
	mysql_query("insert into peti  VALUES ('$_POST['title']','$_POST['text']','1') ");
	$tbval = mysql_query("select * from peti") or die("query error"); 
	$result = mysql_fetch_array($tbval);
	echo "<div id='text'> 
	<h1>".$result['title']."</h1>";
	echo"</div>";
?>