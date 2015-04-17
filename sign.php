<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CBIT Petitions Portal</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="includes/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="includes/style.css" rel="stylesheet">

	
	
	<script type="text/javascript">
	function check()
	{
		var pass=document.getElementById('password1').value;
		var pass1=document.getElementById('password2').value;
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
<body background-color="4FC3F7">
	<div class="container">
		<div class="col-md-12" id="head">
            
            <h1 class="heading">CBIT PETITIONS PORTAL</h1>
        </div>
	</div>
	<div class="top" role="header">
      
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="glyphicon glyphicon-align-justify"></span>
        </button>
        <nav class="navbar-collapse collapse" role="navigation">
            <ul class="navbar-nav nav">
                <li><a href="#">Home</a></li>
                <li><a href="#">Petitions</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Login</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </div>

    <div class="container">
    

	<div class="col-md-6">
 		<h4>Don't have an account, create one using this form </h4>
 		<form id="signupform" name="signupform" method="post" action="signup.php">
 		Roll No<input  name="usernamesin" placeholder="Your Roll no" type="text" id="usernamein">
 		Name<input  name="namein" placeholder="Rajnikanth" type="text" id="namein">
 		Email<input  name="emailin" placeholder="gmail@rajnikanth.com" type="text" id="emailin">
 		Password<input name="passwordsin" placeholder="b@$h@ @->b->@" type="password" id="password1">
 		Again<input name="passwordsin" placeholder="lakalakalaka" type="password" id="password2">
 		<input  name="submit" type="submit" id="submit" onclick="return check()" value="submit">
 	</form>
 	</div>
 	</div>
		

<div class="bottom">
    <div class="container">
        <div class="col-md-12">
            <h3> Made with <span class="glyphicon glyphicon-heart"></span>  by a folk like you</h3>
            <p>Shashank Gurudu</p>
        </div>
    </div>
</div>

 	
 	
 	
</body>

</html>