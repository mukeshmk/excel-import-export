<?php
	require_once('../login/auth.php');
?>
<html>
	<title>Update Selection</title>
	<body>
	<p>
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
	$sno=$_POST['sno'];
	$_SESSION['sno']=$sno;
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
						
			$connect=mysqli_connect("localhost","root","");
			if (mysqli_connect_errno()) 
			{
				echo "Failed to connect to MySQL: " . mysqli_connect_error();
			}
			
			$c="USE my_intern;";
			$c1=mysqli_query($connect,$c);
	
			$_SESSION['fieldlist']=$aFields;
			
			$k="";
			$k=$k.$aFields[0	];
			for($i=1; $i < $nFields; $i++)
			{
				$k=$k.",".$aFields[$i];
			}

			$d="SELECT ".$k." FROM Assets Where SNo=$sno;";

			$_SESSION['qur']=$d;
			
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
			echo("<form action='update_qry.php' method='post'");
    		while($row=mysqli_fetch_array($d1)) 
			{
				echo("<tr>");
				for($i=0; $i < $nFields; $i++)
				{
					echo("<td>".$row[$aFields[$i]]."</td>");
				}
       			echo ("</tr>");
				echo("<tr>");
				for($i=0; $i < $nFields; $i++)
				{	
					echo("<td>");
					if($aFields[$i]=="Location")
					{
						echo("<select name='subFields[]' required>
							<option value=''>Select...</option>
							<option value='Chennai'>Chennai</option>
							<option value='Hyderabad'>Hyderabad</option>
							<option value='Pune'>Pune</option>
							<option value='Bangalore'>Bangalore</option>
						</select>");					
					}
					else
					{
						echo("<input type='text' name='subFields[]'] autocomplete='off'></input>");
					}
					echo("</td>");
				}
				echo("</tr>");
			}
			echo"<button action='submit' align='center'>Update</button>";
			echo "</table>";
		
		}
	}
?>
	</body>
</html>