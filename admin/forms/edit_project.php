<a class="btn btn-primary" data-toggle="modal" href='#modal-edit-project'><span class="fa fa-pencil-square-o" aria-hidden="true"></span> Edit Project</a>
<div class="modal fade " id="modal-edit-project">
	<div class="modal-dialog">
		<div class="modal-content well">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit Project</h4>
			</div>
				<form action="db/edit_project.php" enctype="multipart/form-data" method="POST" role="form">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="txtID">ID</label>
						<input type="text" class="form-control" name="txtID" id="txtID" required="required" placeholder="Project ID">
					</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
							<label for="txtName">Name</label>
							<input type="text" class="form-control" name="txtName" id="txtName" required="required" placeholder="Project Name">
						</div>	
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="">Status</label>
							<div class="radio">
								<label>
									<input type="radio" name="txtStatus" id="txtStatus" value="On going" checked="checked">
									On going
								</label>
								<label>
									<input type="radio" name="txtStatus" id="txtStatus" value="Suspended">
									Suspended
								</label>
								<label>
									<input type="radio" name="txtStatus" id="txtStatus" value="Completed">
									Completed
								</label>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="avatarFile">Source code</label>
				        <input type="file" name="file"  id="file"/>
				    	</div>
						
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
							<label for="">Description</label>
							<textarea name="txtDescription" id="txtDescription" class="form-control" placeholder=""  rows="3"></textarea>
						</div>

						<div class="modal-footer">
							<div style="float: right;">
								<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
								<button type="submit" id="addProject" name="addProject" class="btn btn-primary">Save</button>
							</div>
						</div>
				</form>
		</div>
	</div>
</div> 
