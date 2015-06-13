<html>
	<title>Search Results</title>
	<body>
		
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
			
			echo("<p>You selected $nFields Fields: ");
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

			$d="SELECT ".$k." FROM Persons;";
			echo($d);
			
			
		
		}
	}
?>
		
	</body>
</html>