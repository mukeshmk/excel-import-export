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
	echo "<table align = 'center'>
		
	<tr>
		
	<th>MemID</th>
	<th>UserNAme</th>
	<th>Password</th>
	<th>FirstName</th>
	<th>LastName</th>
	<th>Address</th>
	<th>Contact</th>
	<th>EMail</th>
	<th>Gender</th>
	
	</tr>";
    // output data of each row
    while($row=mysqli_fetch_array($d1)) 
	{
       	echo "
		<tr>
       	<td>".$row["mem_id"]."</td>
		<td>".$row["username"]."</td>
		<td>".$row["password"]."</td>
		<td>".$row["fname"]."</td>
       	<td>".$row["lname"]."</td>
		<td>".$row["address"]."</td>
		<td>".$row["contact"]."</td>
		<td>".$row["emailid"]."</td>
		<td>".$row["gender"]."</td>
		</tr>";
	}
    echo "</table>
		</body>
		</html>";

	mysqli_close($connect);


?>