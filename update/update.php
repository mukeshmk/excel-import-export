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
		<title>Update</title>
	</head>
	<nav class="navbar navbar-inverse navbar-fixed-top">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="http://www.hitachi.co.in/" target="_blank">Hitachi Solutions</a>
    		</div>
    		<div>
      			<ul class="nav navbar-nav">
        			<li><a href="../home.php">Home</a></li>
        			<li><a href="../insert/input_page.php">Insert</a></li>
        			<li><a href="../display/disp.php">Display</a></li>
					<li><a href="../search/search.php">Search</a></li>
					<li class="active"><a href="update.php">Update</a></li>
					<li><a href="../delete/del_disp.php">Delete</a></li>
      			</ul>
				<ul class="nav navbar-nav navbar-right">
        			<li><a href='../index.php'><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>
	<br><br><br>
<?php require('../display/display.php'); ?>
<body>
<div class="container">
<form action="update_php.php" method="post" align="center">
	<label for='formFields[]'></label><br>
	<h3 align="center">Enter SNo of the recoed to be updated:-</h3>
	<p><input type='text' name='sno' autocomplete="off" required></input></p>
	<h3 align='center'>Select the Fields that you want to Update</h3>
	<style>
	table, th, td 
	{
    	border: 0px solid black;
	}
</style>
	<?php 
		if($_SESSION['SU']==TRUE)
		{
			echo'
		<table align="center">
		<tr>
		<td>
		<table align="left" class="table table-hover table-bordered table-condensed">
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
		<td>
		<table align="right"class="table table-hover table-bordered table-condensed">
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
			<tr><td><input type="checkbox" name="" value=""></td><td></td></tr>
		</table>
			';
		}
		else
		{
			echo'
	<p>To Update the Disabled Fields contact Super User</p>
	<table align="center">
		<tr>
		<td>
		<table align="left" class="table table-hover table-bordered table-condensed">
			<tr><td><input type="checkbox" name="formFields[]" value="SNo" checked></td><td>S.No</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="EmployeeID"></td><td>Employee ID</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Location"></td><td>Location</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Status"></td><td>Status</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="HostName"></td><td>Host Name</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Brand" disabled></td><td>Brand</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="SerialNo" disabled></td><td>Serial No.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="AssoDevSNo"></td><td>Associated Decvice Serial No.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Memory"></td><td>Memory</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="OS"></td><td>Operating System</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="InvoiceDetails" disabled></td><td>Invoice Dectials</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="WarrentyExp"></td><td>Warrenty Expiry</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="ContactNo"></td><td>Contact No.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Remarks"></td><td>Remarks</td></tr>
		</table>
		</td>	
		<td>
		<table align="right"class="table table-hover table-bordered table-condensed">
			<tr><td><input type="checkbox" name="formFields[]" value="SeatNo"></td><td>Seat No.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="EmployeeName"></td><td>Employee Name</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Floor"></td><td>Floor/Block</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="AssetTagNo"></td><td>Asset Tag No</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="AssetType"></td><td>Asset Type</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Model" disabled></td><td>Model</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="AssociatedDevices"></td><td>Associated Devices</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="HardDisk"></td><td>Hard Disk</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="Processor"></td><td>Processor</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="PurchasedOn" disabled></td><td>Purchased On.</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="VendorDetails" disabled></td><td>Vendor Details</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="DateofIssue"></td><td>Date of Issue</td></tr>
			<tr><td><input type="checkbox" name="formFields[]" value="EMailID"></td><td>EMail ID</td></tr>
			<tr><td><input type="checkbox" name="" value="" disabled></td><td></td></tr>
		</table>
		';
		}
	?>
		</td>
		</tr>
	</table>
	<br>
		<div class="row">
			<div class="col-sm-5"></div>
			<div class="col-sm-1">
				<button type="submit" name="formSubmit" align='center' class="btn btn-danger">
					<span class="glyphicon glyphicon-edit"></span>Update
				</button>
			</div>
			<div class="col-sm-6"></div>
		</div>
	</div>
</form>

</body>
</html>