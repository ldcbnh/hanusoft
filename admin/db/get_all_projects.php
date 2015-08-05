
<?php 
	$query_all_project = "SELECT * FROM projects";
    $rs_all_projects = mysql_query($query_all_project) or die("Query to get data from firsttable failed: " . mysql_error());
 ?>
