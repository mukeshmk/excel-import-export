<?php
	require_once('../login/auth.php');
?>
<html>
	<head>
		<title>Delete Selection</title>
		<meta charset='utf-8'>
   		<meta name='viewport' content='width=device-width, initial-scale=1'>
  		<link rel='stylesheet' href='../bootstrap-3.3.5-dist/css/bootstrap.min.css'>
		<script src='../bootstrap-3.3.5-dist/jquery.min.js'></script>
  		<script src='../bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
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
					<li><a href="../update/update.php">Update</a></li>
					<li class="active"><a href="del_disp.php">Delete</a></li>
      			</ul>
				<ul class="nav navbar-nav navbar-right">
        			<li><a href='../index.php'><span class="glyphicon glyphicon-off"></span> Log Out</a></li>
      			</ul>
    		</div>
  		</div>
	</nav>
	<br><br><br>
	<body>
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
		
<?php
	if(isset($_POST['formSubmit'])) 
	{
		$aFields = $_POST['formFields'];
		
		if(!isset($aFields)) 
		{
			echo("<p>You didn't select any Fields!</p>\n");
		} 
		else 
		{
			$nFields = count($aFields);
			
			echo("<p align='center'>You selected $nFields Fields: ");
			for($i=0; $i < $nFields; $i++)
			{
				echo($aFields[$i] . " ");
			}
			echo("</p>");
			
			
			$connect=mysqli_connect("localhost","root","");
			if (mysqli_connect_errno()) 
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			$c="USE my_intern;";
			$c1=mysqli_query($connect,$c);
	
			$k="";
			$k=$k.$aFields[0	];
			for($i=1; $i < $nFields; $i++)
			{
				$k=$k.",".$aFields[$i];
			}

			$d="SELECT ".$k." FROM Assets;";
			
			$d1=mysqli_query($connect,$d);
			echo("<head>
				<style>
					table, th, td 
					{
     					border: 1px solid black;
					}
				</style>
				</head>
				<body>");
	
			echo("<table align='center'>");
			echo("<tr>");
			for($i=0; $i < $nFields; $i++)
			{	
				echo("<th>");
				echo($aFields[$i] . " ");
				echo("</th>");
			}
			echo("</tr>");
    		// output data of each row
    		while($row=mysqli_fetch_array($d1)) 
			{
				echo("<tr>");
				for($i=0; $i < $nFields; $i++)
				{
					echo("<td>".$row[$aFields[$i]]."</td>");
				}
       			echo ("</tr>");
			}
			echo "</table>";
		
		}
	}
?>
	<br><br>
	<p align='center'>To delete a record Contact Super User</p>
	<form action="del_php.php" method="post" autocomplete="off">
		<table id='t1' align='center'>
			<tr id='t2'>
				<td id='t3'>
					<p>Enter SNo to be deleted.</p>
				</td>
			</tr>
			<tr id='t2'>
				<td id='t3'>
					<input type="text" name="del"required>
				</td>
				<td id='t3'>
					<button type="submit" class="btn btn-danger" disabled>
						<span class="glyphicon glyphicon-edit"></span> Delete
					</button>	
				</td>
			</tr>
		</table>
	</form>
	</body>
</html>