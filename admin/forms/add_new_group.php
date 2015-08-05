<a class="btn btn-primary" data-toggle="modal" href='#modal-add-group'><span class="fa fa-users" aria-hidden="true"></span> New Group</a>
<div class="modal fade " id="modal-add-group">
	<div class="modal-dialog">
		<div class="modal-content well">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">New Group</h4>
			</div>
				<form action="db/add_page.php" enctype="multipart/form-data" method="POST" role="form">
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
						<label for="txtName">Code</label>
						<input type="text" class="form-control" name="txtCode" id="txtCode" required="required" placeholder="Project Name">
					</div>	
					
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
						<label for="">Content</label>
						<textarea name="txtContent" id="txtContent" class="form-control" placeholder=""  rows="3"></textarea>
					</div>

					<div class="modal-footer">
						<div style="float: right;">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<button type="submit" id="addProject" name="addProject" class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
		</div>
	</div>
</div> 
