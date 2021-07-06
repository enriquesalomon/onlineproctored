<!-- Add New -->
<div class="modal fade" id="add-quiz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    
                <center><h4 class="modal-title" id="myModalLabel">Add New Quiz</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="student.php"enctype="multipart/form-data">				
					
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Select Grade Level:</label>
						</div>
						<div class="col-lg-8">
                        <select id="inputStatus" class="form-control custom-select">
                            <option disabled>Select one</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            </select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Quiz Time Limit:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="firstname"required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Question Limit to display:</label>
						</div>
							<div style="height:10px;"></div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="middlename"required>
						</div>
					</div>
						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Quiz Title:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="contactno"required>
                           
						</div>
					</div>
								<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Quiz Description:</label>
						</div>
						<div class="col-lg-8">
                        <textarea id="inputDescription" class="form-control" rows="4">Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terr.</textarea>
         
						</div>
					</div>
									
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
