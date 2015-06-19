<?php 
	require_once('../login/auth.php'); 
?>
<html>
	<head>
		<title>Delete Results</title>
		<meta charset='utf-8'>
   		<meta name='viewport' content='width=device-width, initial-scale=1'>
  		<link rel='stylesheet' href='../bootstrap-3.3.5-dist/css/bootstrap.min.css'>
		<script src='../bootstrap-3.3.5-dist/jquery.min.js'></script>
  		<script src='../bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
	</head>
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="http://www.hitachi.co.in/" target="_blank">Hitachi Solutions</a>
    		</div>
    		<div>
      			<ul class="nav navbar-nav">
        			<li><a href="../home.php">Home</a></li>
        			<li><a href="../insert/input_page.php">Insert</a></li>
        			<li><a href="../display/disp.php">Display</a></li>
					<li><a href="../search/search.php">Search</a></li>
					<li><a href="../update/update.php">Update</a></li>
					<li class="active"><a href="del_disp.php">Delete</a></li>
      			</ul>
				<ul class="nav navbar-nav navbar-right">
        			<li><a href='../index.php'><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>
	<body>
</html>
<?php
	$del=$_POST["del"];
	
	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$c="USE my_intern;";
	$c1=mysqli_query($connect,$c);
	
	$d="DELETE FROM Assets WHERE SNo=".$del.";";

	if(!mysqli_query($connect,$d))
	{
		echo("<h1 align='center'>Delete Failure!!");
		echo('<br><br>');
		echo("Error description: " . mysqli_error($connect));
		echo('<br><br>');
	}
	else
	{
		echo("<h1 align='center'>Delete Successful !!</h1>");		
	}

	mysqli_close($connect);

	require("../display/display.php");
?>