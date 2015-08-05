
<?php
$title = 'Profile details';
include 'header.php';
include 'db/get_current_user_info.php';
$_SESSION['avatar'] =$avatar;
if($_SESSION['login'] = false){
	echo '<center>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<div class="panel panel-info">
				  <div class="panel-heading"><h3 class="panel-title">You must login to view this page</h3></div>
				  <div class="panel-body"><a href="index.php" ><button type="button" class="btn btn-success">Return to homepage</button></a></div>
				</div>
			</div>
		</center>
	';
}
?>
	<div class="col-xs-12 col-sm-3 col-md-3">
		<div class="well">
			<img class="img-responsive" src=<?php 
				if(is_null($avatar)){echo '"img/avatars/default.jpg"';}
				else{echo '"img/avatars/'.$avatar.'"';}
			 ?> alt="">
			</div>
			<div class="col-xs-12 col-sm-12 col-md-12 well"><center><h4 style="color: #11A5CA"><?php echo $name ?></h4></center></div>
	</div>
		
	<div class="col-xs-12 col-sm-9 col-md-9 well">
	<?php 
	if(isset($_SESSION['login']) && $_SESSION['login'] = true){
		include 'forms/user_panel.php';
	 	}
	 ?>
	
		<div class="col-xs-12 col-sm-3 col-md-3"><h4>Username: </h4></div>
		<div class="col-xs-12 col-sm-9 col-md-9"><h4><?php echo $username ?></h4></div>
		<div class="col-xs-12 col-sm-3 col-md-3"><h4>User Role:</h4></div>
		<div class="col-xs-12 col-sm-9 col-md-9"><h4><?php if($role==1){ echo 'Member';} else{ echo 'Admin'; }?></h4></div>
		<div class="col-xs-12 col-sm-3 col-md-3"><h4>Gender: </h4></div>
		<div class="col-xs-12 col-sm-9 col-md-9"><h4><?php echo $gender; ?></h4></div>
		<div class="col-xs-12 col-sm-3 col-md-3"><h4>Class: </h4></div>
		<div class="col-xs-12 col-sm-9 col-md-9"><h4><?php echo $class; ?></h4></div>
		<div class="col-xs-12 col-sm-3 col-md-3"><h4>Birthday:</h4></div>
		<div class="col-xs-12 col-sm-9 col-md-9"><h4><?php echo $birthday; ?></h4></div>
		<div class="col-xs-12 col-sm-3 col-md-3"><h4>Email:</h4></div>
		<div class="col-xs-12 col-sm-9 col-md-9"><h4><?php echo $user_email; ?></h4></div>
		<div class="col-xs-12 col-sm-3 col-md-3"><h4>Last update:</h4></div>
		<div class="col-xs-12 col-sm-9 col-md-9"><h4><?php echo $lastupdate; ?></h4></div>
		<div class="col-xs-12 col-sm-3 col-md-3"><h4>Bio</h4></div>
		<div class="col-xs-12 col-sm-9 col-md-9">
			<textarea style="resize: none; border: none; background: white; width:100%;" rows="6" disabled><?php echo $description ?></textarea>
		</div>
<?php 
		echo'
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><h4>Group</h4></div>';
			$result1=mysql_query("SELECT * FROM group_assignments WHERE user_id ='".$id."'");
			if (mysql_num_rows($result1) > 0) {
				while ($row1=mysql_fetch_array($result1)){
					$groupID = $row1['group_id'];
					$result1s = mysql_query("SELECT * FROM groups WHERE id ='".$groupID."'");
					while ($row1s=mysql_fetch_array($result1s)){
						$groupName = $row1s['name'];
						echo '
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><h4>'. $groupName .'</h4></div>';
					}
				}
			}else{
				echo'
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><h4>Not added to any group.</h4></div>
				';
			}

						echo'
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"><h4>Joined Project</h4></div>';
			$result2=mysql_query("SELECT * FROM project_assignments WHERE user_id ='".$id."'");
			if (mysql_num_rows($result2) > 0) {
				echo '
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
					<table>
						<tbody>
					';
							while ($row2=mysql_fetch_array($result2)){
								$projectID = $row2['project_id'];
								$result1s = mysql_query("SELECT * FROM projects WHERE id ='".$projectID."'");

								while ($row1s=mysql_fetch_array($result1s)){
									$projectName = $row1s['name'];
									echo '
									<tr>
										<td> <h4>'. $projectName .'</h4></td>
									</tr>';
								}
							}
					echo '
						</tbody>
					</table>
				</div>';
			}else{
				echo'
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9"><h4>Not joined to any project.</h4></div>
				';
			}
  	 ?>
		<?php 
		if(isset($_SESSION['login']) && $_SESSION['login'] = true){
			include 'forms/adminpanel.php';
		 	}
		 ?>
	</div>


<?php 
	include 'footer.php';
 ?>

