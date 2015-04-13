<!DOCTYPE html>
<html>
<head>
	<meta charset = "utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CBIT Petitions Portal</title>

	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link href="style.css" rel="stylesheet">

	
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
<body background-color="4FC3F7">
	<div class="container">
		<h1>CBIT Petitions Portal</h1>
        <p> For a change</p>

	</div>
	<div class="youtube-container">
   		<div class="youtube-player" data-id="3iou1PRBYyw"></div>
	</div>
 	<div class="container">
 	<h4> Login here </h4>
 	<form id="loginform" name="loginid" method="post" action="logverify.php">
 		<input  name="username" type="text" id="username">
 		<input name="password" type="password" id="password">
 		<input  name="submit" type="submit" id="submit" value="submit">
 	</form>
 	</div>

	<div class="container">
 		<h4>   Don't have an account, create one using this form </h4>
 		<form id="signupform" name="signupform" method="post" action="signup.php">
 		Username<input  name="usernamesin" type="text" id="username">
 		Password<input name="passwordsin" type="password" id="password">
 		Again<input name="passwordsin" type="password" id="password1">
 		<input  name="submit" type="submit" id="submit" onclick="return check ()" value="submit">
 	</form>
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

</html>