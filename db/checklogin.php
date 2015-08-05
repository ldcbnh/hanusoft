<?php

include 'db_connect.php';

// Define $myusername and $mypassword
if(isset($_POST['submit'])){
	$myusername = $_POST['inputUsername'];
	$mypassword = $_POST['inputPassword'];

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = stripslashes($myusername);
	$mypassword = stripslashes($mypassword);
	$myusername = mysql_real_escape_string($myusername);
	$mypassword = mysql_real_escape_string($mypassword);

	$sql="SELECT * FROM users WHERE username='$myusername' and password='$mypassword'";
	$result=mysql_query($sql);

	// Mysql_num_row is counting table row
	$count=mysql_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count==1){
		while ($row=mysql_fetch_array($result)){
			$userRole = $row['role'];
			if($userRole == 0){
				$SESSION['admin'] = true;
			}
		}
		// Register $myusername, $mypassword and redirect to file "login_success.php"
		$_SESSION['login'] = true;
		$_SESSION['myusername'] = $myusername;
		$_SESSION['mypassword'] = $mypassword;
		header("location:../profile.php");
	}
	else {
		
    session_destroy();
    $_SESSION['login'] = false;
		echo '
		<!DOCTYPE html>
		<html>
		<head>
			<title>Login fails</title>
			<!-- Latest compiled and minified CSS & JS -->
			<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
			<script src="//code.jquery.com/jquery.js"></script>
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		</head>
		<body>

		<center>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-info">
					  <div class="panel-heading">
							<h3 class="panel-title">Invalid username or passsword!</h3>
					  </div>
					  <div class="panel-body">
							<a href="../index.php" ><button type="button" class="btn btn-success">Return to homepage</button></a>
					  </div>
					</div>
				</div>
				
			
		</center>
		</body>
		</html>


		';
	}
}
?>
