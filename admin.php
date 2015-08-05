<?php
$title = 'Admin panel';
include 'header.php';
if (isset($SESSION['admin']) && $SESSION['admin'] == true) {

} else {
	echo '<center>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<div class="panel panel-info">
					  <div class="panel-heading">
							<h3 class="panel-title">You dont have permission to view this page</h3>
					  </div>
					  <div class="panel-body">
							<a href="index.php" ><button type="button" class="btn btn-success">Return to homepage</button></a>
					  </div>
					</div>
				</div>
			</center>
		';
}

include 'footer.php';
?>
