<html>
<head>
	<title>CBIT Petitions Portal</title>
<script type="text/javascript">
function check()
{
	var pass=document.getElementById('password').value;
	var pass1=document.getElementById('password1').value;
	if(pass==pass1)
		return true;
	else
	{
		alert('passwords didnt matched');
		return false;
	}
	
}
</script>

</head>
<body>
 	<div>
 	Login here
 	<form id="loginform" name="loginid" method="post" action="logverify.php">
 		<input  name="username" type="text" id="username">
 		<input name="password" type="password" id="password">
 		<input  name="submit" type="submit" id="submit" value="submit">
 	</form>

 	Don't have an account, create one using this form
 	<form id="signupform" name="signupform" method="post" action="signup.php">
 		Username<input  name="usernamesin" type="text" id="username">
 		Password<input name="passwordsin" type="password" id="password">
 		Again<input name="passwordsin" type="password" id="password1">
 		<input  name="submit" type="submit" id="submit" onclick="return check ()" value="submit">
 	</form>

 	</div>
 	
</body>
</html>