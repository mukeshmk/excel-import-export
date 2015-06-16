<?php
	require_once('../login/auth.php');
?>
<html>
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

	$qry=mysqli_query($connect,$q);
	require('../display/display.php');
	
?>