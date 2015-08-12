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
    <link href="includes/style.css" rel="stylesheet">

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
    $query2="SELECT * from downvote where username='$user' and petition_no='$petition_no'";

    $res=mysql_query($query1);  
    $res2=mysql_query($query2);  
    
    echo "<div class='jumbotron' id='$petition_no'> 
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

    if(mysql_num_rows($res2)==0)
    echo "<a href='down.php?id=".$petition_no."'>  <button class='btn btn-success' type='button'>
      Downvote <span class='badge'>".$result['down']."</span>
    </button> </a>";
    else if(mysql_num_rows($res)==1)
    echo  "<button class='btn btn-default' type='button'> DownVoted <span class='badge'>".$result['down']."</span></button>";    
    echo "<a href='downvote.php?id=".$petition_no."'> Downvoted by</a>";

    echo "<h4 style='margin-right:75%' > Created by ".$result['user']."</h4>";


?>
    <div class="this-is-single-post-wrapper">

     <a onclick="loadDisqus(jQuery(this), '<?php $petition_no ?> ', 'http://210.212.217.80/<?php $petition_no ?>');">
      Show comments
     </a>
</div>
    </div>

    
 <?php   
  }
  
}
?>
<script type="text/javascript">
  var disqus_shortname = 'changecbit';
var disqus_identifier; //made of post id and guid
var disqus_url; //post permalink

function loadDisqus(source, identifier, url) {
  $(document).ready(function(){

if (window.DISQUS) {

   
    $('#disqus_thread').insertAfter(source); //append the HTML after the link

   //if Disqus exists, call it's reset method with new parameters
   DISQUS.reset({
      reload: true,
      config: function () {
      this.page.identifier = identifier;
      this.page.url = url;
      }
   });

} else {

   //insert a wrapper in HTML after the relevant "show comments" link
   jQuery('<div id="disqus_thread" style="display:block"></div>').insertAfter(source);
   disqus_identifier = identifier; //set the identifier argument
   disqus_url = url; //set the permalink argument

   //append the Disqus embed script to HTML
   var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
   dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
   jQuery('head').append(dsq);

  }
  $('#disqus_thread').removeAttr("style");

});}
</script>
            
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
