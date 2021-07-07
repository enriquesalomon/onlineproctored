<!-- Add New -->
<div class="modal fade" id="add-gradelevel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    
                <h4 class="modal-title" id="myModalLabel">Add New Grade Level</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST"  enctype="multipart/form-data">			
					
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Grade Level:</label>
						</div>
						<div class="col-lg-8">
                            <select name="grade" id="grade" class="form-control custom-select">
                            <option disabled>Select one</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            </select>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Section:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="section"required>
						</div>
					</div>				
					
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit" name="save" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
   
                </div>
                </form>
				
            </div>
        </div>
    </div>
    <?php
  // If upload button is clicked ...
  if (isset($_POST['save'])) {
 
    include 'dbconnect.php';

 
  	// Get image name

        $grade = mysqli_real_escape_string($conn, $_POST['grade']);
        $section = mysqli_real_escape_string($conn, $_POST['section']);

        if(!empty($_POST["section"])) {
            $check=mysqli_query($conn,"select * from gradelevel where section='" . $_POST["section"] . "'");
           $erow=mysqli_fetch_array($check);
            if($erow>0) {
                    // $_SESSION["username_taken"]="duplicate";
                    //  
                    $_SESSION["error"]="error";
                    header('location:gradelevel.php');
                      }      
            }

        $sql = "INSERT INTO gradelevel VALUES (DEFAULT,'$grade','$section')";   
        if (!mysqli_query($conn, $sql)) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["gradeleveladded"]="add";
                      header('location:gradelevel.php');
                      
                }

  }
 
?>
   
