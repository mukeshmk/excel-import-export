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

	<body>
	<p align='Left'>
		<table id='t1' align='left'>
		<tr id='t2'>
		<td id='t3'>
			<form method='get' action='../home.php'>
    			<button type='submit'>Home</button>
			</form>
		</td>
		<td id='t3'>
			<form method='get' action='../delete/del_disp.php'>
    			<button type='submit'>Delete</button>
			</form>
		</td>
		<td id='t3'>
			<form method='get' action='../index.php'>
    			<button type='submit'>Logout</button>
			</form>
		</td>
		<tr>
		</table>
		<style>
		table#t1
		{
			border: None
		}
		td#t2
		{
			border: None
		}
		td#t3
		{
			border: None
		}
		</style>
	</p>
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
		echo("<h1 align='center'>delete successful!!</h1>");		
	}

	mysqli_close($connect);

	require("../display/display.php");
?>