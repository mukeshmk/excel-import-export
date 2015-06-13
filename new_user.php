<?php
	$mem_id=$_POST['mem_id'];
	$umn=$_POST['unm'];
	$pwrd=$_POST['pwrd'];
	$fnm=$_POST['fnm'];
	$lnm=$_POST['lnm'];	
	$add=$_POST['add'];
	$cont=$_POST['cont'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];

	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$createdb="CREATE DATABASE simple_login;";
	$crate1=mysqli_query($connect,$createdb);

	$c="USE simple_login;";
	$c1=mysqli_query($connect,$c);

	$q1="INSERT INTO mem VALUES('$mem_id','$umn','$pwrd','$fnm','$lnm','$add','$cont','$email','$gender');";
	if(!mysqli_query($connect,$q1))
	{
		echo("Error description: " . mysqli_error($connect));
		echo('<br><br>');
	}
	
	
	$d="SELECT * FROM mem;";
	$d1=mysqli_query($connect,$d);

	echo"<html>
		<head>
			<style>
			table, th, td 
			{
     			border: 1px solid black;
			}
			</style>
		</head>
		<body>";


	mysqli_close($connect);


?>