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
<body background-color="4FC3F7">
	CBIT Petitions portal
	<nav class="navbar navbar-default navbar navbar-static-top ">
  <div class="container-fluid">
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
        <li><a href="#">About</a></li>
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
<br>
<br>
 	<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading"> <strong class="">Login</strong>

                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="post" action="logverify.php">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Username</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="username" placeholder="Username" required="" type="text" name="username">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input class="form-control" id="password" name="password" placeholder="Password" required="" type="password">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button name="submit" type="submit" id="value" value="submit" class="btn btn-success btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Not Registered? <a href="signup.php" class="">Register here</a>
                </div>
            </div>
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