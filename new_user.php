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

	$c="USE my_intern;";
	$c1=mysqli_query($connect,$c);

	$q1="INSERT INTO member VALUES('$mem_id','$umn','$pwrd','$fnm','$lnm','$add','$cont','$email','$gender');";
	if(!mysqli_query($connect,$q1))
	{
		echo("Error description: " . mysqli_error($connect));
		echo('<br><br>');
	}
	
	
	$d="SELECT * FROM member WHERE mem_id = $mem_id;";
	$d1=mysqli_query($connect,$d);

	echo"<html>
		<head>
			<h1 align='center'>Login Created Successfully!!</h1>
			<h3 align='center'>Cheack your Details again just incase.</h3>
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
       	<td align='center'>".$row["mem_id"]."</td>
		<td align='center'>".$row["username"]."</td>
		<td align='center'>".$row["password"]."</td>
		<td align='center'>".$row["fname"]."</td>
       	<td align='center'>".$row["lname"]."</td>
		<td align='center'>".$row["address"]."</td>
		<td align='center'>".$row["contact"]."</td>
		<td align='center'>".$row["emailid"]."</td>
		<td align='center'>".$row["gender"]."</td>
		</tr>";
	}
    echo "</table>
		</body>
			<form method='get' action='index.php' align='center'>
    			<button type='submit'>Login</button>
			</form>
		</html>";

	mysqli_close($connect);


?>