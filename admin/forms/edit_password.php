<a class="btn btn-primary" data-toggle="modal" href='#modal-edit-password'><span class="fa fa-cogs" aria-hidden="true"></span> Edit password</a>
<div class="modal fade" id="modal-edit-password">
	<div class="modal-dialog well well-lg">
	<form action="db/edit_password.php" method="POST" role="form">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
			<h4 class="modal-title">Edit password</h4>
		</div>
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
			<label for="oldPassWord">Current password</label>
			<input type="password" name="oldPassWord" id="oldPassWord" class="form-control" required="required" title="current password">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
			<label for="oldPassWord">New password</label>
			<input type="password" name="newPassWord" id="newPassWord" class="form-control" required="required" title="new password">
		</div>
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 form-group float-label-control">
			<label for="oldPassWord">Retype password</label>
			<input type="password" name="reNewPassWord" id="reNewPassWord" class="form-control" required="required" title="retype new password">
		</div>
		<script>
			$(document).ready(function() {
			  $("#reNewPassWord").keyup(validate);
			});

			function validate() {
			  var password1 = $("#newPassWord").val();
			  var password2 = $("#reNewPassWord").val();

			    
			 
			    if(password1 == password2) {
			       $("#edit_password").show(); 
			       $("#validate-status").text("matched");
			    }
			    else {
			        $("#validate-status").text("not match");  
			        $("#edit_password").hide(); 
			    }
			    
			}
			</script>

			<p id="validate-status"></p>
			<div class="modal-footer" >
				<div style="float: right; ">
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
					<button type="submit" name ="edit_password" id="edit_password" name="addMember" style="display: none" class="btn btn-primary">Save</button>
				</div>
			</div>
		</form>
	</div>
</div>
