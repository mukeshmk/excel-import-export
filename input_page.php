<html>
	<h1 align="center">Fill it up man</h1>
    <body>
        <form action="p1.php" method="post" autocomplete="off">
			<table style="width:0%" align="center">
				<tr>
					<td>S.No:-</td>						
					<td><input type="text" name="sno" required></td>
				</tr>
				<tr>
					<td>Seat No:-</td>
					<td><input type="text" name="lnm" required></td>
				</tr>
				<tr>
					<td>Employee ID:-</td>
					<td><input type="text" name="fnm" required></td>
				</tr>
				<tr>
					<td>Employee Name:-</td>
					<td><input type="text" name="add" required></td>
				</tr>
				<tr>
					<td>Location:-</td>
					<td>
						<select name="city" required>
							<option value="">Select...</option>
							<option value="Chennai">Chennai</option>
							<option value="Hyderabad">Hyderabad</option>
							<option value="Pune">Pune</option>
							<option value="Bangalore">Bangalore</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Floor/Block:-</td>						
					<td><input type="text" name="fb" required></td>
				</tr>
				<tr>
					<td>Status:-</td>
					<td>
						<select name="status" required>
							<option value="">Select...</option>
							<option value="ACtive">Active</option>
							<option value="Unassigned">Unassigned</option>
							<option value="Stock">Stock</option>
							<option value="Faulty">Faulty</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Asset Tag No:-</td>						
					<td><input type="text" name="atn" required></td>
				</tr>
				<tr>
					<td>Host Name:-</td>						
					<td><input type="text" name="HostName" required></td>
				</tr>
				<tr>
					<td>Asset Type:-</td>
					<td>
						<select name="status" required>
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
					<td>Brand:-</td>						
					<td><input type="text" name="Brand" required></td>
				</tr>
				<tr>
					<td>Model:-</td>						
					<td><input type="text" name="Model" required></td>
				</tr>
				<tr>
					<td>Serial No:-</td>						
					<td><input type="text" name="SerialNo" required></td>
				</tr>
				<tr>
					<td>Associtated Devices:-</td>
					<td>
						<select name="status" required>
							<option value="">Select...</option>
							<option value=""></option>
							
						</select>
					</td>
				</tr>
				<tr>
					<td>Gender:-</td>
					<td>
						<input type="radio" name="gender" value="M" required>M
						<input type="radio" name="gender" value="F" required>F
					</td>
				</tr>
				<tr>
					<td><button type="submit" >Submit</button></td>
				</tr>
			</table>
        </form>
    </body>
</html>