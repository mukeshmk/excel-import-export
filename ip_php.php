<?php
	
	$sno=$_POST['sno'];
	$SeatNo=$_POST['SeatNo'];
	$EmpID=$_POST['EmpID'];
	$EmpNm=$_POST['EmpNm'];
	$Loc=$_POST['Loc'];
	$fb=$_POST['fb'];
	$status=$_POST['status'];
	$atn=$_POST['atn'];
	$HostNm=$_POST['HostNm'];
	$Asstyp=$_POST['Asstyp'];
	$Brand=$_POST['Brand'];
	$Model=$_POST['Model'];
	$SrlNo=$_POST['SrlNo'];
	$AssDev=$_POST['AssDev'];
	$ADSNo=$_POST['ADSNo'];
	$HDD=$_POST['HDD'];
	$Mem=$_POST['Mem'];
	$Proc=$_POST['Proc'];
	$OS=$_POST['OS'];
	$PurchOn=$_POST['PurchOn'];
	$Inv=$_POST['Inv'];
	$Vend=$_POST['Vend'];
	$Wrty=$_POST['Wrty'];
	$DoI=$_POST['DoI'];
	$CNo=$_POST['CNo'];
	$EMail=$_POST['EMail'];
	$Rmks=$_POST['Rmks'];

	$connect=mysqli_connect("localhost","root","");
	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	$c="USE my_intern;";
	$c1=mysqli_query($connect,$c);

	$q1="INSERT INTO Assets VALUES
	(
		'$sno',
		'$SeatNo',
		'$EmpID',
		'$EmpNm',
		'$Loc',
		'$fb',
		'$status',
		'$atn',
		'$HostNm',
		'$Asstyp',
		'$Brand',
		'$Model',
		'$SrlNo',
		'$AssDev',
		'$ADSNo',
		'$HDD',
		'$Mem',
		'$Proc',
		'$OS',
		'$PurchOn',
		'$Inv',
		'$Vend',
		'$Wrty',
		'$DoI',
		'$CNo',
		'$EMail',
		'$Rmks'
	);";	

	if(!mysqli_query($connect,$q1))
	{
		echo("Error description: " . mysqli_error($connect));
		echo('<br><br>');
	}
	require "display.php";
	mysqli_close($connect);
?>