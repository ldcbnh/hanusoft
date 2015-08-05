<?php 
	$query = "SELECT * FROM users";
    $rs_all_members = mysql_query($query) or die("Query to get data from firsttable failed: " . mysql_error());
 ?>
