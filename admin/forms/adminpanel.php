
<?php 
	if($role==0){
		echo '
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="caption">
				<h4 style="color: #025C13">Admin panel</h4>';
				include 'add_member.php';
				include 'add_new_project.php';
				include 'add_new_group.php';
				include 'add_page.php';
				include 'edit_project.php';
				include 'edit_a_group.php';
				include 'delete_a_member.php';
				echo '
			</div>
		</div>
		';
	}
 ?>

