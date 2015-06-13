<?php
	require_once('../login/auth.php');
?>
<html>
	<title>Input</title>
	<p align="right">
		<table>
		<tr>
		<td>
			<form method='get' action='../home.php'>
    			<button type='submit'>Home</button>
			</form>
		</td>
		<td>
			<form method='get' action='../index.php'>
    			<button type='submit'>Logout</button>
			</form>
		</td>
		<tr>
		</table>
	</p>
	<h1 align="center">Fill it up man</h1>
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
					<td><input type="text" name="EMail" required></td>
				</tr>
			</table>
			</td>
			</tr>
			</table>
			<p align="center"><button type="submit">Submit</button></p>
        </form>
    </body>
</html>