<?php
	require_once('login/auth_parent.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Home</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
</head>
	
<body>
<p align='right'>
	<form method='get' action='index.php' align='right'>
    	<button type='submit'>Logout</button>
	</form>
</p>
<p align="center" class="style1">Login successfully </p>
<p align="center">This page is the home, you can put some stuff here......</p>
<p align="center">
	<table align="center">
		<tr>
		<td>
			<form method='get' action='insert/input_page.php'>
    			<button type='submit'>Insert</button>
			</form>
		</td>
		<td>
			<form method='get' action='display/disp.php'>
    			<button type='submit'>Display</button>
			</form>
		</td>
		<td>
			<form method="get" action="search/search.php">
				<button type="submit">Search</button>
			</form>
		</td>
		<td>
			<form method="get" action="update/update.php">
				<button type="submit">Update</button>
			</form>
		</td>
		<td>
			<form method="get" action="delete/del_disp.php">
				<button type="submit">Delete</button>
			</form>
		</td>
		</tr>
	</table>
</p>
</body>
</html>