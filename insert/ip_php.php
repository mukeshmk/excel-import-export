<?php
	require_once('../login/auth.php');
?>
<html>
	<head>
		<title>Disply</title>
		<meta charset='utf-8'>
   		<meta name='viewport' content='width=device-width, initial-scale=1'>
  		<link rel='stylesheet' href='../bootstrap-3.3.5-dist/css/bootstrap.min.css'>
		<script src='../bootstrap-3.3.5-dist/jquery.min.js'></script>
  		<script src='../bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
	</head>
	<body>
		<p align='left'>
		<table id='t1'>
		<tr id='t2'>
		<td id='t3'>
			<form method='get' action='../home.php'>
    			<button type='submit'>Home</button>
			</form>
		</td>
		<td id='t3'>
			<form method='get' action='input_page.php'>
    			<button type='submit'>Insert</button>
			</form>
		</td>
		<td id='t3'>
			<form method='get' action='../index.php'>
    			<button type='submit'>Logout</button>
			</form>
		</td>
		<tr>
		</table>
		</p>
	</body>
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
</html>
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
	require "../display/display.php";
	mysqli_close($connect);
?>