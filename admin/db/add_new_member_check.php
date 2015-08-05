<?php 
	include 'db_connect.php';
	if(isset($_POST['addMember'])){
		$query = "INSERT INTO `users`( username, password, role, display_name, email, gender, dob, class, description, created_date) 
		VALUES ('".$_POST['txtNewUsername'].
			"','hanu', '".$_POST['userRole'].
			"', '".$_POST['txtDisplayName'].
			"', '".$_POST['txtEmail'].
			"', '".$_POST['txtGender'].
			"', '".$_POST['txtDob'].
			"', '".$_POST['txtClass'].
			"', '".$_POST['txtDescription'].
			"', CURRENT_TIMESTAMP)";
		$result = mysql_query($query) or die("Query to get data from firsttable failed: " . mysql_error());
		if($result==1){
			echo "Added! Automatic return after 2 seconds!";
        	header("refresh:2; url=../profile.php");
		}else{
			echo "Error! Automatic return after 2 seconds!";
		}
	}
 ?>
