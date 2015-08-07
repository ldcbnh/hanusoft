<a class="btn btn-primary" data-toggle="modal" href='#modal-edit-avatar'><span class="fa fa-user" aria-hidden="true"></span> Change avatar</a>
<div class="modal fade" id="modal-edit-avatar">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Up load an image</h4>
			</div>
			<div class="mid-section">
				<form action="db/edit_avatar.php" enctype="multipart/form-data" method="POST" role="form">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="avatarFile">Avatar</label>
		        <input name="file" type="file" id="file" required="required"/>
			    </div>
	        <div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        	<button type="submit" name="edit_avatar" id="edit_avatar" class="btn btn-primary">Submit</button>
	        </div>
				</form>
			</div>
		</div>
	</div>
</div>
