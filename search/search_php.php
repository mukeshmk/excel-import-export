<?php
	require_once('../login/auth.php');
?>
<html>
	<title>Search Results</title>
	<body>
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
	</p>
		
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
	<form method='get' action='../home.php' align='center'>
    	<button type='submit'>Home</button>
	</form>	
	</body>
</html>