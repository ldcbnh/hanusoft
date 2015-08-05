<a class="btn btn-primary" data-toggle="modal" href='#modal-edit'><span class="fa fa-pencil-square" aria-hidden="true"></span> Edit Profile</a>
<div class="modal fade" id="modal-edit">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">Edit profile details</h4>
			</div>
			<div class="mid-section">
				<form action="db/edit_profile.php" method="POST" role="form">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="">Username</label>
						<input type="text" name="username" id="username" class="form-control" disabled value="<?php echo $username ?>">
					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="txtDisplayName">Display name</label>
						<input type="text" class="form-control" name="txtDisplayName" id="txtDisplayName" value="<?php echo $name ?>" required="required" placeholder="eg: Your Name">
					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="inputEmail">Email</label>
						<input type="email" name="txtEmail" id="txtEmail" class="form-control" required="required" value="<?php echo $user_email ?>" placeholder="eg: mail@example.com" >
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="txtClass">Class</label>
						<input type="text" class="form-control" name="txtClass" id="txtClass" required="required" value="<?php echo $class ?>" placeholder="eg: 7C12">
					</div>
					
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
						<label for="txtDescription">Description</label>
						<textarea name="txtDescription" id="txtDescription" class="form-control" placeholder="<?php echo $description; ?>" onfocus='this.select()' rows="3"><?php echo htmlspecialchars($description); ?></textarea>
						
					</div>
					<script>
					// $(function() {
					//   $("#txtDob" ).datepicker();
					// });
					</script>
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="txtDob">Birthday</label>
						<input type="date" name="txtDob" id="txtDob" class="form-control"  title="Birthday" required="required" value="<?php echo $birthday; ?>" placeholder="eg:yyyy-mm-dd">
					</div>

					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
					<label for="txtGender">Gender</label>
						<div class="radio">
							<label>
								<input type="radio" name="txtGender" id="txtGender" value="Male" <?php if($gender=='Male') echo 'checked="checked"'; ?> >
								Male
							</label>	
							<label>
								<input type="radio" name="txtGender" id="txtGender" value="Female" <?php if($gender=='Female') echo 'checked="checked"'; ?>>
								Female
							</label>
							<label>
								<input type="radio" name="txtGender" id="txtGender" value="Other" <?php if($gender=='Other') echo 'checked="checked"'; ?>>
								Other
							</label>
						</div>
					</div>
					
			        </div>
			        <div class="modal-footer">
			        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        	<button type="submit" name="edit_profile" id="edit_profile" class="btn btn-primary">Submit</button>
			        </div>
				</form>
			</div>
			
		</div>
	</div>
</div>
