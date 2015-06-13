<?php
	require_once('auth.php');
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
<p align="center" class="style1">Login successfully </p>
<p align="center">This page is the home, you can put some stuff here......</p>
<p align="center">
	<table align="center">
		<tr>
		<td>
			<form method='get' action='input_page.php'>
    			<button type='submit'>Insert</button>
			</form>
		</td>
		<td>
			<form method='get' action='display.php'>
    			<button type='submit'>Display</button>
			</form>
		</td>
		<td>
			<form method='get' action='index.php'>
    			<button type='submit'>Logout</button>
			</form>
		</td>
		</tr>
	</table>
</p>
</body>
</html>