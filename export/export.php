<?php
	require_once('../login/auth.php');
?>
<?php

	$connect = mysqli_connect("localhost","root","");
	$db = mysqli_select_db($connect,"my_intern");

	$q=$_SESSION['qur'];
	$qur=mysqli_query($connect,$q);

	$filename = "export_file.xls"; // File Name

	// Download file
	header("Content-Disposition: attachment; filename=\"$filename\""); 
	header("Content-Type: application/vnd.ms-excel");

	// Write data to file
	$flag = false;
	while($row =mysqli_fetch_assoc($qur)) 
	{
    	if(!$flag) 
		{
      		// display field/column names as first row
      		echo implode("\t", array_keys($row)) . "\r\n";
      		$flag = true;
    	}
    echo implode("\t", array_values($row)) . "\r\n";
  	}
?>