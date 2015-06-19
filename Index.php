<?php require 'create_db.php' ?>
<?php
	//Start session
	session_start();	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_FIRST_NAME']);
	unset($_SESSION['SESS_LAST_NAME']);
?>

<html>
	<head>
		<title>Hitachi Solutions</title>
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="bootstrap-3.3.5-dist/css/bootstrap.min.css">
		<script src="bootstrap-3.3.5-dist/jquery.min.js"></script>
  		<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	</head>
<body>
	<div class="container">
		<div class="row">           
			<div style="text-align: right;" class="col-sm-8">
				<a href="http://www.hitachi.co.in/" target="_blank">
  					<img src="assets/Hitachi%20Logo.jpg" alt="Hitachi Logo" style="border:0">
				</a>	
			</div>
			<div class="col-sm-3"></div>
			<div class="col-sm-1">
       			<form method='post' action='create_user/create_user.html' align="center" role="form">									
					<button type='submit' class=' btn btn-primary'>
						<span class="glyphicon glyphicon-user"></span>
					Create User</button>
				</form>
    		</div> 
		</div>
		<form name="loginform" action="login/login_exec.php" method="post" autocomplete="off" role="form">
    		<div class="row">		
				<div class="col-sm-4"></div>   
      			<div class="col-sm-offset-0 col-sm-4">
        			 <?php
						if(isset($_SESSION['ERRMSG_ARR'])&&is_array($_SESSION['ERRMSG_ARR'])&&count($_SESSION['ERRMSG_ARR'])>0) 
						{
							echo('<div class="alert alert-danger">');
							echo '<ul class="err">';
							foreach($_SESSION['ERRMSG_ARR'] as $msg) 
							{
								echo '<li><strong>Error! </strong>',$msg,'</li>'; 
							}
							echo '</ul>';
							unset($_SESSION['ERRMSG_ARR']);
							echo('</div>');
						}
					?>
				<div class="col-sm-4"></div>
      			</div>
			</div>	
			<div class="row">
				<div class="col-sm-4"></div>
      			<label class="control-label col-sm-1" for="email">Username:</label>
   				<div class="col-sm-3">
        			<input type="text" class="form-control" name="username" placeholder="Enter User Name">
      			</div>
				<div class="col-sm-4"></div>
    		</div>	
			<div class="row">
				<div class="col-sm-4"></div>
				<label class="control-label col-sm-1" for="pwd">Password:</label>
      			<div class="col-sm-3">          
        			<input type="password" class="form-control" name="password" placeholder="Enter password">
      			</div>
				<div class="col-sm-4"></div>
    		</div>	
			<div class="row">        
      			<div class="col-sm-offset-5 col-sm-7">
       				<button name="" type="submit" class="btn btn-success">
						<span class="glyphicon glyphicon-log-in"></span>
					Log In</button>
				</div>
    		</div>
  		</form>
		
	</div>
</body>
</html>