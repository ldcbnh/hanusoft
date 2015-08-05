
<?php 
	if($role==0){
		echo '
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				';
				echo'<table>
					<caption><h4 style="color: #025C13">Admin panel</h4></caption>
					<tbody>
						<tr>
							<td class="well">';include 'add_member.php';
							echo '</td>
							<td class="well">
							<a class="btn btn-primary" data-toggle="modal" href="forms/delete_member_select.php"><span class="fa fa-user-times" aria-hidden="true"></span> Delete a member</a>
							</td>
							<td></td>
						</tr>

						<tr>
							<td class="well">';
								include 'add_new_group.php';
							echo '</td>
							<td class="well">
									<a class="btn btn-primary" href="forms/edit_group_select.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span> Edit Group</a>
							</td>
							<td class="well">
								<a class="btn btn-primary" href="forms/select_group_assignment.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span> Edit Group Assignment</a>
							</td>
							<td class="well">
								<a class="btn btn-primary" href="forms/delete_group_select.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span> Delete Group</a>
							</td>
						</tr>

						<tr>
							<td class="well">';
								include 'add_new_project.php';
							echo'</td>
							<td class="well">
								<a class="btn btn-primary" href="forms/select_project.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span> Edit A Project</a>
							</td>
							<td class="well" >
								<a class="btn btn-primary" href="forms/edit_project_assignment_select.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span> Edit Project Assignment</a>
							</td>
							<td class="well" >
								<a class="btn btn-primary" href="forms/delete_project_select.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span> Delete a Project</a>
							</td>
						</tr>

						<tr>
							<td class="well">
								<a class="btn btn-primary" href="forms/add_page.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span> New Page</a>
							</td>
							<td class="well">
								<a class="btn btn-primary" href="forms/select_page_to_edit.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span> Edit a page</a>
							</td>
							<td class="well">
								<a class="btn btn-primary" href="forms/delete_page_select.php"><span class="fa fa-newspaper-o" aria-hidden="true"></span> Delete a page</a>
							</td>
						</tr>
					</tbody>
				</table>
				

			</div>
		</div>
		';
	}
 ?>

