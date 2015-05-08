<!DOCTYPE html>
<html>
<head>
  <title>College Petitions Portal</title>
  
</head>
  <meta charset = "utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>CBIT Petitions Portal</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
  <script src="inlineDisqussions.js"></script>
    <link href="includes/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="inlineDisqussions.css" />
    <script>

        disqus_shortname = 'changecbit';
        jQuery(document).ready(function() {
        jQuery("h4").inlineDisqussions({
            identifier: '<?php $petition_no; ?>',
              displayCount: true,
  highlighted: false,
  position: 'right',
  background: 'white',
  maxWidth: 7000
        });
        });

  </script>

<body bgcolor="#4FC3F7" >

  <nav class="navbar navbar-default  ">
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
        <li ><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
        <li class="active"><a href="petition.php">Petitions</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">Create a petition</a></li>
        
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

<?php
session_start(); 
if (isset($_SESSION['login_user']) == FALSE) {
  header("location: login.php");

}
else{
  
  include('connection.php');
  $user=$_SESSION['login_user'];
  if(isset($_GET['value']))
  {
    if($_GET['value']=="success")
      echo "<script> alert('success');</script>";
    else if($_GET['value']=="fail")
      echo "<script> alert('fail');</script>";
  
    }


echo "<div id='create'> 
  <form id='loginform' name='loginid' method='post' action='cre.php'>
    <input  name='title' type='text' id='title'>
    <input  name='text' type='text' id='text'>
    <input  name='submit' type='submit' id='submit' value='submit'>
  </form>
  </div>";

  $tbval = mysql_query("SELECT * FROM peti") or die("query error"); 
  while ($result = mysql_fetch_array($tbval)) 
  {
    $petition_no=$result['serial_no'];
    $query1="SELECT * from upvotes where username='$user' and petition_no='$petition_no'";
    $res=mysql_query($query1);  

    echo "<div class='jumbotron' id='text'> 
    <h1>".$result['title']."</h1>
    <p>".$result['text']."</p>
    <p> Total Upvotes:".$result['count']."</p>";
    
    

    if(mysql_num_rows($res)==0)
    echo "<a href='count.php?id=".$petition_no."'>  <button class='btn btn-success' type='button'>
      Upvote <span class='badge'>".$result['count']."</span>
    </button> </a>";
    else if(mysql_num_rows($res)==1)
    echo  "<button class='btn btn-default' type='button'> Voted <span class='badge'>".$result['count']."</span></button>";    
    echo "<a href='upvote.php?id=".$petition_no."'>  upvoted by </a>";
    echo "<h4 style='margin-right:75%' > Created by ".$result['user']."</h4>";
    echo "<div id='but' style='width:10%;height:30px;'>Show comments</div>";
    echo "</div>";

    
  }
  
}
?>

</body>
<div class="bottom">
    <div class="container">
        <div class="col-md-12">
            <h3> Made with <span class="glyphicon glyphicon-heart"></span>  by a folk like you</h3>
            <p>Shashank Gurudu</p>
        </div>
    </div>
</div>

</html>
