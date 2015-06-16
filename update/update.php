<?php
	require_once('../login/auth.php');
?>
<html>
<head>
	<title>Update</title>
	<p align='right'>
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
	</p>
<!-- define some style elements-->
<style>
	label,a 
	{
		font-family : Arial, Helvetica, sans-serif;
		font-size : 12px; 
	}
	table, th, td 
	{
 		border: 1px solid black;
		white-space:nowrap
	}
	table#t1
	{
		border: None
	}
	tr#t2
	{
		border: None
	}
	td#t3
	{
		border: None
	}
</style>	
</head>
<?php require('../display/display.php'); ?>
<body>
<h3 align='center'>Select the Fields that you want data to be Update</h3>
<form action="update_php.php" method="post" align="center">
	<label for='formFields[]'></label><br>
	<p align="center">enter sno of the data to be updated:-</p>
	<p><input type='text' name='sno' autocomplete="off" required></input></p>
	<table id="t1"align='center'>
		<tr id="t2">
		<td id="t3">
		<table align='left'>
			<tr><td><input type="checkbox" name="formFields[]" value="SNo" checked></td><td>S.No</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="EmployeeID"></td><td>Employee ID</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Location"></td><td>Location</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Status"></td><td>Status</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="HostName"></td><td>Host Name</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Brand"></td><td>Brand</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="SerialNo"></td><td>Serial No.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="AssoDevSNo"></td><td>Associated Decvice Serial No.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Memory"></td><td>Memory</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="OS"></td><td>Operating System</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="InvoiceDetails"></td><td>Invoice Dectials</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="WarrentyExp"></td><td>Warrenty Expiry</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="ContactNo"></td><td>Contact No.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Remarks"></td><td>Remarks</td></tr>
		</table>
		</td>
			
		<td id="t3">
		<table align='right'>
			<tr><td><input type="checkbox" name="formFields[]" value="SeatNo"></td><td>Seat No.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="EmployeeName"></td><td>Employee Name</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Floor"></td><td>Floor/Block</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="AssetTagNo"></td><td>Asset Tag No</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="AssetType"></td><td>Asset Type</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Model"></td><td>Model</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="AssociatedDevices"></td><td>Associated Devices</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="HardDisk"></td><td>Hard Disk</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Processor"></td><td>Processor</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="PurchasedOn"></td><td>Purchased On.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="VendorDetails"></td><td>Vendor Details</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="DateofIssue"></td><td>Date of Issue</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="EMailID"></td><td>EMail ID</td></tr>
		</table>
		</td>
		</tr>
	</table>
	<br>
	<input type="submit" name="formSubmit" value="Update" >
</form>

</body>
</html>