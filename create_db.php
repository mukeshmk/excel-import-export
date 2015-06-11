<?php
	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$createdb="CREATE DATABASE simple_login;";
	$crate1=mysqli_query($connect,$createdb);

	$c="USE simple_login;";
	$c1=mysqli_query($connect,$c);

	$qry="CREATE TABLE member
	(
  	 mem_id int PRIMARY KEY,
  	 username varchar(30) NOT NULL,
  	 password varchar(30) NOT NULL
	);";

	$result=mysqli_query($connect,$qry);

	$q1="INSERT INTO member VALUES(1,'root','root');";
	$r=mysqli_query($connect,$q1);

	mysqli_close($connect);
?>