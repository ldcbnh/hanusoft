<?php 
	$title = "Hanusoft's Projects";
	include 'header.php';

	include 'db/get_all_projects.php';
	
 ?>


<?php 
	while ($row_project = mysql_fetch_array($rs_all_projects)) {
        $name = $row_project["name"];
        $project_id = $row_project["id"];
        $project_status =$row_project["status"];
        $project_des = $row_project["description"];

 	echo '
			<div class="col-md-12">
				<h4><a href="selected_project.php?id='.$project_id.'" title="">'.$name.'</a></h4>
			</div>
			<div class="col-md-12">
				<h6>Status: '.$project_status.'</h6>
				
			</div>
			<div class=" col-md-12">
				<h5>Description:'.$project_des.'</h5>
				
			</div>
 	';
    }
?>
<?php 
	include 'footer.php';
 ?>
