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
  		<script src="bootstrap-3.3.5-dist/js/bootstrap.min.js"></script>
	</head>
<body>
	<div class="container">
		<div style="text-align: center;">
			<a href="http://www.hitachi.co.in/" target="_blank">
  				<img src="assets/Hitachi%20Logo.jpg" alt="Hitachi Logo" style="border:0">
			</a>	
		</div>
		<div class="row">
  			<div class="col-sm-4"></div>
  			<div class="col-sm-4">
	  			<form name="loginform" action="login/login_exec.php" method="post" autocomplete="off">
  					<table align="center" class="table table-hover table-condensed">
  						<tr>
    						<td>
								<!--the code bellow is used to display the message of the input validation-->
								 <?php
									if(isset($_SESSION['ERRMSG_ARR'])&&is_array($_SESSION['ERRMSG_ARR'])&&count($_SESSION['ERRMSG_ARR'])>0) 
									{
										echo '<ul class="err">';
										foreach($_SESSION['ERRMSG_ARR'] as $msg) 
										{
											echo '<li>',$msg,'</li>'; 
										}
										echo '</ul>';
										unset($_SESSION['ERRMSG_ARR']);
									}
								?>
							</td>
  						</tr>
  						<tr>
    						<td><div align="right">Username</div></td>
    						<td><input name="username" type="text" /></td>
  						</tr>
  						<tr>
    						<td><div align="right">Password</div></td>
    						<td><input name="password" type="password" /></td>
  						</tr>
  						<tr>
    						<td><div align="center"></div></td>
    						<td><input name="" type="submit" value="login" /></td>
  						</tr>
						<tr>
							<td></td>
							<td>
								<form method='get' action='create_user/create_user.html' align="center">
									<button type='submit'>Create User</button>
								</form>
							</td>
						</tr>
					</table>
				</form>
  			</div>
  			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
</html>
