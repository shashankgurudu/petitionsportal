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
<body >

	<nav class="navbar navbar-default ">
  <div class="container-fluid">
  <h1>CBIT Petitions Portal</h1>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">CPB</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="petition.php">Petitions</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Contact</a></li>
        
       </ul>
   
      <ul class="nav navbar-nav navbar-right">
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Profile <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">My Petiitons</a></li>
            <li><a href="#">My Upvotes</a></li>
            
            <li class="divider"></li>
            <li><a href="logout.php">Sign Out</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<iframe width="560" height="315" src="https://www.youtube.com/embed/sTJbo4OflR0" frameborder="0" allowfullscreen></iframe>

<div class="container">
		
	</div>

	<div class="container">
	<div  class="col-md-6">
                <p><strong>Login here to create a change <br> </strong></p>
                <a href="login.php" class="btn btn-success">LOGIN</a>
    </div>
    <div class="col-md-6">
                <p><strong>Signup here to create an account</strong></p>
                <a href="sign.php" class="btn btn-success">SIGNUP</a>
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
