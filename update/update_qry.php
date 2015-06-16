<?php
	require_once('../login/auth.php');
?>

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
	echo($q);
	//$qry=mysqli_query($connect,$q);

//UPDATE Persons SET LastName="mukesh",FirstName="mk",City="Kochi" WHERE PersonID=1;
	
?>