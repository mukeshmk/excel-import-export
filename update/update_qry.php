<?php
	require_once('../login/auth.php');
?>
<html>
	<head>
		<title>Update Page</title>
		<meta charset='utf-8'>
   		<meta name='viewport' content='width=device-width, initial-scale=1'>
  		<link rel='stylesheet' href='../bootstrap-3.3.5-dist/css/bootstrap.min.css'>
		<script src='../bootstrap-3.3.5-dist/jquery.min.js'></script>
  		<script src='../bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
	</head>
	<nav class="navbar navbar-inverse navbar-fixed-top">
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
					<li class="active"><a href="update.php">Update</a></li>
					<li><a href="../delete/del_disp.php">Delete</a></li>
      			</ul>
				<ul class="nav navbar-nav navbar-right">
        			<li><a href='../index.php'><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>
</html>
<?php
	
	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$c="USE my_intern;";
	$c1=mysqli_query($connect,$c);

	$aFields=$_SESSION['fieldlist'];
	$subFields=$_POST['subFields'];

	$q="UPDATE Assets SET ";
	for($i=0;$i<count($aFields)-1;$i++)
	{
		$q=$q.$aFields[$i].'="'.$subFields[$i].'",';
	}
	$q=$q.$aFields[count($aFields)-1].'="'.$subFields[count($aFields)-1].'"';
	$q=$q." WHERE SNo=".$_SESSION['sno'].";";

	if(!mysqli_query($connect,$q))
	{
		echo("Error description: " . mysqli_error($connect));
		echo('<br><br>');
	}
	require('../display/display.php');
	
?>