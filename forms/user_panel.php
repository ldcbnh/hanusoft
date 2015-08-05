<?php 
	echo '
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="caption">
			<table>
				<caption><h4 style="color: #025C13">User panel</h4></caption>
				<tbody>
					<tr>
						<td class="well">';
						include 'forms/edit_avatar.php';
						echo '</td>
						<td class="well">';
						include 'forms/edit_profile.php';
						echo'</td>
						<td class="well">';
							include 'forms/edit_password.php';
						echo'</td>
					</tr>
				</tbody>
			</table>
		</div>
		</div>
	';
 ?>
