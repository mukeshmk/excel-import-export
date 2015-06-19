<?php
	require_once('../login/auth.php');
?>
<html>
	<head>
		<title>Input</title>
		<meta charset='utf-8'>
   		<meta name='viewport' content='width=device-width, initial-scale=1'>
  		<link rel='stylesheet' href='../bootstrap-3.3.5-dist/css/bootstrap.min.css'>
		<script src='../bootstrap-3.3.5-dist/jquery.min.js'></script>
  		<script src='../bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
	</head>
	
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<div class="navbar-header">
      			<a class="navbar-brand" href="http://www.hitachi.co.in/" target="_blank">Hitachi Solutions</a>
    		</div>
    		<div>
      			<ul class="nav navbar-nav">
        			<li><a href="../home.php">Home</a></li>
        			<li class="active"><a href="input_page.php">Insert</a></li>
        			<li><a href="../display/disp.php">Display</a></li>
					<li><a href="../search/search.php">Search</a></li>
					<li><a href="../update/update.php">Update</a></li>
					<li><a href="../delete/del_disp.php">Delete</a></li>
      			</ul>
				<ul class="nav navbar-nav navbar-right">
        			<li><a href='../index.php'><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>
	
	<h1 align="center">Fill out these fields:</h1>
    <body>
        <form action="ip_php.php" method="post" autocomplete="off">
			<table style="width:0%" align="center">
			<tr>
				
			<td>
			<table style="width:0%" align="center">
				<tr>
					<td>S.No:-</td>						
					<td><input type="text" name="sno" required></td>
				</tr>
				<tr>
					<td>Employee ID:-</td>
					<td><input type="text" name="EmpID" required></td>
				</tr>
				<tr>
					<td>Location:-</td>
					<td>
						<select name="Loc" required>
							<option value="">Select...</option>
							<option value="Chennai">Chennai</option>
							<option value="Hyderabad">Hyderabad</option>
							<option value="Pune">Pune</option>
							<option value="Bangalore">Bangalore</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Status:-</td>
					<td>
						<select name="status" required>
							<option value="">Select...</option>
							<option value="Active">Active</option>
							<option value="Unassigned">Unassigned</option>
							<option value="Stock">Stock</option>
							<option value="Faulty">Faulty</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Host Name:-</td>						
					<td><input type="text" name="HostNm" required></td>
				</tr>
				<tr>
					<td>Brand:-</td>						
					<td><input type="text" name="Brand" required></td>
				</tr>
				<tr>
					<td>Serial No:-</td>						
					<td><input type="text" name="SrlNo" required></td>
				</tr>
				<tr>
					<td>Associated Devices S.No:-</td>						
					<td><input type="text" name="ADSNo" required></td>
				</tr>
				<tr>
					<td>Memory:-</td>						
					<td><input type="text" name="Mem" required></td>
				</tr>
				<tr>
					<td>Operating System:-</td>						
					<td><input type="text" name="OS" required></td>
				</tr>
				<tr>
					<td>Invoice Details:-</td>						
					<td><input type="text" name="Inv" required></td>
				</tr>
				<tr>
					<td>Warrenty Expiry:-</td>						
					<td><input type="date" name="Wrty" required></td>
				</tr>
				<tr>
					<td>Contact No:-</td>						
					<td><input type="text" name="CNo" required></td>
				</tr>	
				<tr>
					<td>Remarks:-</td>						
					<td><input type="text" name="Rmks" required></td>
				</tr>
			</table>
			</td>
				
			<td></td><td></td><td></td><td></td><td></td><td></td><td></td>
				
			<td>
			<table style="width:0%" align="right">
				<tr>
					<td>Seat No:-</td>
					<td><input type="text" name="SeatNo" required></td>
				</tr>
				<tr>
					<td>Employee Name:-</td>
					<td><input type="text" name="EmpNm" required></td>
				</tr>
				<tr>
					<td>Floor/Block:-</td>						
					<td><input type="text" name="fb" required></td>
				</tr>
				<tr>
					<td>Asset Tag No:-</td>						
					<td><input type="text" name="atn" required></td>
				</tr>
				<tr>
					<td>Asset Type:-</td>
					<td>
						<select name="Asstyp" required>
							<option value="">Select...</option>
							<option value="Desktop">Destop</option>
							<option value="Laptop">Laptop</option>
							<option value="Printer">Printer</option>
							<option value="Scanner">Scanner</option>
							<option value="Switch">Switch</option>
							<option value="Router">Router</option>
							<option value="FireWall">Fire Wall</option>
							<option value="AccessPoint">Access Point</option>
							<option value="SurfaceTablet">Surface Tablet</option>
							<option value="Projector">Projector</option>
							<option value="Others">Others</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Model:-</td>						
					<td><input type="text" name="Model" required></td>
				</tr>
				<tr>
					<td>Associtated Devices:-</td>
					<td>
						<select name="AssDev" required>
							<option value="">Select...</option>
							<option value="Monitor">Monitor</option>
							<option value="Mouse">Mouse</option>
							<option value="Keyboard">Keyboard</option>
							<option value="SmartCardReader">SmartCardReader</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Hard Disk:-</td>						
					<td><input type="text" name="HDD" required></td>
				</tr>
				
				<tr>
					<td>Processor:-</td>						
					<td><input type="text" name="Proc" required></td>
				</tr>
				<tr>
					<td>Purchased On:-</td>						
					<td><input type="date" name="PurchOn" required></td>
				</tr>
				<tr>
					<td>Vendor Details:-</td>						
					<td><input type="text" name="Vend" required></td>
				</tr>
				<tr>
					<td>Date of Issue:-</td>						
					<td><input type="date" name="DoI" required></td>
				</tr>
				<tr>
					<td>EMail ID:-</td>						
					<td><input type="email" name="EMail" required></td>
				</tr>
			</table>
			</td>
			</tr>
			</table>
			<div class="row"><p><br></p></div>
			<div class="row">
				<div class="col-sm-6"></div>
				<div class="col-sm-1">
					<button type="submit" class="btn btn-info">
						<span class="glyphicon glyphicon-plus-sign"></span> Insert
					</button>	
				</div>
				<div class="col-sm-5"></div>
			</div>
        </form>
    </body>
</html>