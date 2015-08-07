<?php 
	include 'db_connect.php';
	if(isset($_POST['edit_password'])){
		$queryCheckPassWord = "SELECT password from `users` WHERE username='".$_SESSION['myusername']."'";
		$resultCheck = mysql_query($queryCheckPassWord) or die("Query to get data from firsttable failed: " . mysql_error());
		while ($rowCheck = mysql_fetch_array($resultCheck)) {
			$pass = $rowCheck['password'];
			if($pass == $_POST['oldPassWord']){
				if($_POST['newPassWord'] == $_POST['reNewPassWord'] ){
					$query = "UPDATE `users`
								SET password = '".$_POST['newPassWord'].
								"' WHERE username='".$_SESSION['myusername']."'";
						$result = mysql_query($query) or die("Query to get data from firsttable failed: " . mysql_error());
						if($result==1){
							echo "Password Changed! Automatic return after 2 seconds!";

				        	header("refresh:2; url=../profile.php");
						}else{
							echo "Error!";

							echo '<a href="../index.php" title="">Return to homepage</a>';
						}
				}else{
					echo 'Retyped new password didnt match!';

				echo '<a href="../index.php" title="">Return to homepage</a>';
				}
			}else{
				echo 'Wrong current password!<<br>';
				echo '<a href="../index.php" title="">Return to homepage</a>';
			}
		}
	}
 ?>
