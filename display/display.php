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
	
	$d="SELECT * FROM Assets;";
	$d1=mysqli_query($connect,$d);

	$_SESSION['qur']=$d;

	echo"<html>
		<head>
			<meta charset='utf-8'>
   			<meta name='viewport' content='width=device-width, initial-scale=1'>
  			<link rel='stylesheet' href='../bootstrap-3.3.5-dist/css/bootstrap.min.css'>
			<script src='../bootstrap-3.3.5-dist/jquery.min.js'></script>
  			<script src='../bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
			<style>
			table, th, td 
			{
     			border: 1px solid black;
				white-space:nowrap
			}
			</style>
		</head>
		<body>";

	echo("<form action='../export/export.php' method='get'>
			<button type='submit' class='btn btn-success'><span class='glyphicon glyphicon-file'></span> Export Table</button>
			</form>");

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
?>