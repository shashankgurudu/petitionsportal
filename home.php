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

	<div class="youtube-container">
   		<div class="youtube-player" data-id="3iou1PRBYyw"></div>
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
<script type= text/javascript>
		(function() {
	    var v = document.getElementsByClassName("youtube-player");
	    for (var n = 0; n < v.length; n++) {
	        var p = document.createElement("div");
	        p.innerHTML = labnolThumb(v[n].dataset.id);
	        p.onclick = labnolIframe;
	        v[n].appendChild(p);
	    }
		})();
 
	function labnolThumb(id) {
	    return '<img class="youtube-thumb" src="//i.ytimg.com/vi/' + id + '/hqdefault.jpg"><div class="play-button"></div>';
	}
 
	function labnolIframe() {
	    var iframe = document.createElement("iframe");
	    iframe.setAttribute("src", "//www.youtube.com/embed/" + this.parentNode.dataset.id + "?autoplay=1&autohide=2&border=0&wmode=opaque&enablejsapi=1&controls=0&showinfo=0");
	    iframe.setAttribute("frameborder", "0");
	    iframe.setAttribute("id", "youtube-iframe");
	    this.parentNode.replaceChild(iframe, this);
	}
	</script>
	<script src="includes/jquery/jquery-2.1.0.min.js"></script>
	<script src="includes/bootstrap/js/bootstrap.min.js"></script>


</html>