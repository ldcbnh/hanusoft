<?php 
	include 'db_connect.php';
	if(isset($_POST['edit_profile'])){
		
		$query = "UPDATE `users`
		SET display_name = '".$_POST['txtDisplayName'].
		"', email = '".$_POST['txtEmail'].
		"', gender = '".$_POST['txtGender'].
		"', dob = '".$_POST['txtDob'].
		"', class = '".$_POST['txtClass'].
		"', description = '".$_POST['txtDescription'].
		"', last_updated = CURRENT_TIMESTAMP WHERE username='".$_SESSION['myusername']."'";

		$result = mysql_query($query) or die("Query to get data from firsttable failed: " . mysql_error());
		if($result==1){
			echo "Profile Changed! Automatic return after 2 seconds!";

        	header("refresh:2; url=../profile.php");
		}else{
			echo "Error! Automatic return after 2 seconds!";
			header("refresh:2; url=../profile.php");
		}
        
	}

		
 ?>

