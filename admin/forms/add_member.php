
<a class="btn btn-primary" data-toggle="modal" href='#modal-add-member'><span class="fa fa-user-plus" aria-hidden="true"></span> New Member</a>
<div class="modal fade" id="modal-add-member">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h4 class="modal-title">New Member</h4>
			</div>

			<div class="mid-section">
				<form action="db/add_new_member_check.php" method="POST" role="form">
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
							<label for="txtNewUsername">Username</label>
							<input type="text" class="form-control" name="txtNewUsername" id="txtNewUsername" required="required" placeholder="username">
						</div>	

						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
							<label for="">Display name</label>
							<input type="text" class="form-control" name="txtDisplayName" id="txtDisplayName" required="required" placeholder="Display name">
						</div>
						
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
							<label for="">Class</label>
							<input type="text" class="form-control" name="txtClass" id="txtClass" required="required" placeholder="Class">
						</div>

						

						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
							<label for="">Birthday</label>
							<input type="date" name="txtDob" id="txtDob" class="form-control" required="required" title="Birthday" placeholder="eg:yyyy/mm/dd">
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
							<label for="">Email</label>
							<input type="email" name="txtEmail" id="txtEmail" class="form-control" placeholder="email" required="required" title="Email">
						</div>
						
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="">Gender</label>
							<div class="radio">
								<label>
									<input type="radio" name="txtGender" id="txtGender" value="Male" checked="checked">
									Male
								</label>
								<label>
									<input type="radio" name="txtGender" id="txtGender" value="Female">
									Female
								</label>
								<label>
									<input type="radio" name="txtGender" id="txtGender" value="Other">
									Other
								</label>
							</div>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 form-group float-label-control">
						<label for="">Role</label>
							<div class="radio">
								<label>
									<input type="radio" name="userRole" id="userRole" value="1" checked="checked">
									Member
								</label>
								<label>
									<input type="radio" name="userRole" id="userRole" value="0" >
									Admin
								</label>
								
							</div>
						</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
						<label for="txtDescription">Description</label>
						<textarea name="txtDescription" id="txtDescription" class="form-control" placeholder=""  rows="3"></textarea>
						
					</div>
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div style="float: right;">
							<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
							<button type="submit" id="addMember" name="addMember" class="btn btn-primary">Save</button>
						</div>
							
						</div>
						<div class="modal-footer">
							
						</div>
				</form>
			</div>

			
		</div>
	</div>
</div>


