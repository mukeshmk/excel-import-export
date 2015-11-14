<?php
	require_once('../login/auth.php');
?>
<html>
	<head>
		<title>Update Selection</title>
		<meta charset='utf-8'>
   		<meta name='viewport' content='width=device-width, initial-scale=1'>
  		<link rel='stylesheet' href='../bootstrap-3.3.5-dist/css/bootstrap.min.css'>
		<script src='../bootstrap-3.3.5-dist/jquery.min.js'></script>
  		<script src='../bootstrap-3.3.5-dist/js/bootstrap.min.js'></script>
		<style>
			table, th, td 
			{
     			border: 1px solid black;
			}
			#t1
			{
				border: 0px;
			}
		</style>
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
<body>
	<br><br><br>
	<div class="container">
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
			echo("<h1 align='center'>Enter new values to be updated :</h1>
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
			echo("<form action='update_qry.php' method='post' required");
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
					echo("<td id='t1'>");
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
					else if($aFields[$i]=='Status')
					{
						echo("<select name='subFields[]' required>
							<option value=''>Select...</option>
							<option value='Active'>Active</option>
							<option value='Unassigned'>Unassigned</option>
							<option value='Stock'>Stock</option>
							<option value='Faulty'>Faulty</option>
						</select>");
					}
					else if($aFields[$i]=='AssetType')
					{
						echo("<select name='subFields[]' required>
							<option value=''>Select...</option>
							<option value='Desktop'>Destop</option>
							<option value='Laptop'>Laptop</option>
							<option value='Printer'>Printer</option>
							<option value='Scanner'>Scanner</option>
							<option value='Switch'>Switch</option>
							<option value='Router'>Router</option>
							<option value='FireWall'>Fire Wall</option>
							<option value='AccessPoint'>Access Point</option>
							<option value='SurfaceTablet'>Surface Tablet</option>
							<option value='Projector'>Projector</option>
							<option value='Others'>Others</option>
						</select>");
					}
					else if($aFields[$i]=='AssociatedDevices')
					{
						echo("<select name='subFields[]' required>
							<option value=''>Select...</option>
							<option value='Monitor'>Monitor</option>
							<option value='Mouse'>Mouse</option>
							<option value='Keyboard'>Keyboard</option>
							<option value='SmartCardReader'>SmartCardReader</option>
						</select>");
					}
					else if($aFields[$i]=='EMailID')
					{
						echo("<input type='email' name='subFields[]' required>");
					}
					else if($aFields[$i]=='WarrentyExp')
					{
						echo("<input type='date' name='subFields[]' required>");
					}
					else if($aFields[$i]=='PurchasedOn')
					{
						echo("<input type='date' name='subFields[]' required>");
					}
					else if($aFields[$i]=='DateofIssue')
					{
						echo("<input type='date' name='subFields[]' required>");
					}
					else if($aFields[$i]=='EMailID')
					{
						echo("<input type='email' name='subFields[]' required>");
					}
					else
					{
						echo("<input type='text' name='subFields[]' autocomplete='off' required></input>");
					}
					echo("</td>");
				}
				echo("</tr>");
			}

			echo "</table>";
		
		}
	}
?>
		<br>
		<div class="row">
			<div class="col-sm-5"></div>
			<div class="col-sm-1">
				<button action='submit' align='center' class="btn btn-danger"><span class="glyphicon glyphicon-edit"></span>Update</button>
			</div>
			<div class="col-sm-6"></div>
		</div>
	</div>	
	</body>
</html>