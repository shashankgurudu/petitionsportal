<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CBIT Petitions Portal</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <link href="includes/style.css" rel="stylesheet">

	<?php
	session_start();
	session_destroy();
	?>
	
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

<div class="row">
    <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form" method="post" action="signup.php">
			<h2>Please Sign Up <small>To Create a Change YOU wish to see</small></h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Rajnikanth" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Gaikwad" tabindex="2">
					</div>
				</div>
			</div>
			<div class="form-group">
				<input type="text" name="usernamesin" id="usernamesin" class="form-control input-lg" placeholder="Roll Number" tabindex="3">
			</div>
			<div class="form-group">
				<input type="email" name="emailin" id="emailin" class="form-control input-lg" placeholder="gmail@rajnikanth.com" tabindex="4">
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="passwordsin" id="password1" class="form-control input-lg" placeholder="b->@->b->@" tabindex="5">
					</div>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<div class="form-group">
						<input type="password" name="passwordsin" id="password2" class="form-control input-lg" placeholder="b->@->b->@" tabindex="6">
					</div>
				</div>
			</div>
			
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-md-6" id="signup"><input name="submit" type="submit" id="submit" onclick="return check()" value="Sign Up" class="btn btn-primary btn-block btn-lg" tabindex="12"></div>
				
			</div>
		</form>
	</div>
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