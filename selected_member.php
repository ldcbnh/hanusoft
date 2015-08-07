<?php 
$title = "Detail profile";
include 'header.php';
$slUserID = $_GET['id'];
$result=mysql_query("SELECT * FROM users WHERE id ='".$slUserID."'");


if (mysql_num_rows($result) > 0) {
	while ($row=mysql_fetch_array($result)){
		$name = $row["display_name"];
		$id = $row["id"];
		$password = $row["password"];
		$role = $row["role"];
		$user_email = $row["email"];
		$class = $row["class"];
		$gender = $row["gender"];
		$birthday = $row["dob"];     
		$userDescription = $row['description'];
		$avatar = $row["avatar"];
		$lastupdate = $row['last_updated'];
		echo'
		<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
      <div class="well">
        <div class="thumbnail">
        	<img src='; 
        		if(is_null($avatar)){echo '"img/avatars/default.jpg"';}
        		else{echo '"img/avatars/'.$avatar.'"';}
        	 echo' alt="">
        	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
        		<h4 style="color: #11A5CA">'.$name.'</h4>
        		<p>
        		</p>
        	</div>
		            				
	     </div>
			</div>
		</div>
			
		<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9 well">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<h4>Gender: </h4>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<h4>'.$gender.'</h4>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<h4>Class: </h4>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<h4>'. $class.'</h4>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<h4>Birthday:</h4>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<h4>'. $birthday.'</h4>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<h4>Email:</h4>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<h4>'. $user_email.'</h4>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				<h4>Last update:</h4>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				<h4>'. $lastupdate.'</h4>
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			     <h4>Bio</h4>
			</div>
			<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
			     <textarea style="resize: none; border: none; background: white; width:100%;" rows="8" disabled>'. $userDescription .'</textarea>
			</div>
		
		';
		echo'
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			     <h4>Group</h4>
			</div>';
			$result1=mysql_query("SELECT * FROM group_assignments WHERE user_id ='".$slUserID."'");
			if (mysql_num_rows($result1) > 0) {
				while ($row1=mysql_fetch_array($result1)){
					$groupID = $row1['group_id'];
					$result1s = mysql_query("SELECT * FROM groups WHERE id ='".$groupID."'");
					while ($row1s=mysql_fetch_array($result1s)){
						$groupName = $row1s['name'];
						echo '
						<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						     <h4>'. $groupName .'</h4>
						</div>';
					}
				}
			}else{
				echo'
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				     <h4>Not added to any group.</h4>
				</div>
				';
			}

			echo'
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
			     <h4>Joined Project</h4>
			</div>';
			$result2=mysql_query("SELECT * FROM project_assignments WHERE user_id ='".$slUserID."'");
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
				<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
				     <h4>Not joined to any project.</h4>
				</div>
				';
			}
			echo '</div>';
  	} 
	}else {               
    echo '
		<div class="alert alert-warning">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		    <center>
		    	<strong>Warning!</strong> you entered an invalid link.
			</center>
		</div>
    ';
	}



 ?>



<?php 
      include 'footer.php';
 ?>
