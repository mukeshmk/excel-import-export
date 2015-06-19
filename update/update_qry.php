<?php
	require_once('../login/auth.php');
?>
<html>
	<head>
		<meta charset='utf-8'>
   		<meta name='viewport' content='width=device-width, initial-scale=1'>
  		<link rel='stylesheet' href='../bootstrap-3.3.5-dist/css/bootstrap.min.css'>
		<script src='../bootstrap-3.3.5-dist/jquery.min.js'></script>
  		<script src='../bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
	</head>
	<title>Update Selection</title>
	<body>
	<p>
		<table id='t1' align='right'>
		<tr id='t2'>
		<td id='t3'>
			<form method='get' action='../home.php'>
    			<button type='submit'>Home</button>
			</form>
		</td>
		<td id='t3'>
			<form method='get' action='update.php'>
    			<button type='submit'>Update</button>
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
	</body>
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