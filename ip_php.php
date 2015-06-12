<html>
	<body>
		<title>Display</title>
		<p align='left'>
		<table id='t1'>
		<tr id='t2'>
		<td id='t3'>
			<form method='get' action='home.php'>
    			<button type='submit'>Home</button>
			</form>
		</td>
		<td id='t3'>
			<form method='get' action='input_page.php'>
    			<button type='submit'>Insert</button>
			</form>
		</td>
		<td id='t3'>
			<form method='get' action='index.php'>
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

	$d="SELECT * FROM Assets;";
	$d1=mysqli_query($connect,$d);

	echo"<html>
		<head>
			<style>
			table, th, td 
			{
     			border: 1px solid black;
				white-space:nowrap
			}
			</style>
		</head>
		<body>";

	echo "<table align = 'left' width='0%''><tr><th>S.No.</th><th>Seat No.</th><th>Employee ID.</th><th>Employee Name</th><th>Location</th><th>Floor/Block</th><th>Status</th><th>Asset Tag No.</th><th>Host Name</th><th>Asset Type</th><th>Brand</th><th>Model</th><th>Serial No.</th><th>Associated Devices</th><th>Associated Devices Seital No.</th><th>Hard Disk</th><th>Memory</th><th>Processor</th><th>Operating System</th><th>Purchased ON</th><th>Invoice Details</th><th>Vendor Details</th><th>Warrenty Expiry</th><th>Date of Issue</th><th>Contact No.</th><th>Email ID</th><th>Remarks</th></tr>";

    // output data of each row
    while($row=mysqli_fetch_array($d1)) 
	{
       	echo "
		<tr>
       	<td>".$row["SNo"]."</td>
		<td>".$row["SeatNo"]."</td>
		<td>".$row["EmployeeID"]."</td>
		<td>".$row["EmployeeName"]."</td>
		<td>".$row["Location"]."</td>
		<td>".$row["Floor"]."</td>
		<td>".$row["Status"]."</td>
		<td>".$row["AssetTagNo"]."</td>
		<td>".$row["HostName"]."</td>
		<td>".$row["AssetType"]."</td>
		<td>".$row["Brand"]."</td>
		<td>".$row["Model"]."</td>
		<td>".$row["SerialNo"]."</td>
		<td>".$row["AssociatedDevices"]."</td>
		<td>".$row["AssoDevSNo"]."</td>
		<td>".$row["HardDisk"]."</td>
		<td>".$row["Memory"]."</td>
		<td>".$row["Processor"]."</td>
		<td>".$row["OS"]."</td>
		<td>".$row["PurchasedOn"]."</td>
		<td>".$row["InvoiceDetails"]."</td>
		<td>".$row["VendorDetails"]."</td>
		<td>".$row["WarrentyExp"]."</td>
		<td>".$row["DateofIssue"]."</td>
		<td>".$row["ContactNo"]."</td>
		<td>".$row["EMailID"]."</td>
		<td>".$row["Remarks"]."</td>
       	</tr>";
	}
    echo "</table>
		</body>
		</html>";

	mysqli_close($connect);
?>