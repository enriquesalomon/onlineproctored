<!-- Add New -->
    <div class="modal fade" id="add-student" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <center><h4 class="modal-title" id="myModalLabel">Add New Student</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="student.php"enctype="multipart/form-data">				
					
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Lastname:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="lastname"required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Firstname:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="firstname"required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Middle:</label>
						</div>
							<div style="height:10px;"></div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="middlename"required>
						</div>
					</div>
						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Contact:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="contactno"required>
						</div>
					</div>
								<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Email:</label>
						</div>
						<div class="col-lg-8">
							<input type="email" class="form-control" name="email"required>
						</div>
					</div>
									<div style="height:10px;"></div>				
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Address:</label>
						</div>
						<div class="col-lg-8">
							<textarea id="address" class="form-control" rows="2" name="address"required>Complete Address</textarea>
						</div>
					</div>
								<div style="height:10px;"></div>
				
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">OPE Username:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="username"required>
						</div>
					</div>

									<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">OPE Password:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="password"required>
						</div>
					</div>
					   <div style="height:10px;"></div>                     
                
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit"name="save" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    	
				</form>
                </div>
				
            </div>
        </div>
    </div>
