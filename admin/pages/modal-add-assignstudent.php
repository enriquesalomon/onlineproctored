<!-- Add New -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    
                <h4 class="modal-title" id="myModalLabel">Assign Student to Class</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST"  enctype="multipart/form-data">				
                <div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Class Name:</label>
						</div>
						<div class="col-lg-8">
                            <select name="classname"  class="form-control custom-select" required>
                            <option selected value="" disabled>Select Class</option>
                          <?php
                                  include('dbconnect.php'); 
                          $query = mysqli_query($conn,"SELECT * FROM class");

                          while ($result = mysqli_fetch_array($query)) {
                          echo "<option value="  .$result['id']. ">" .$result['classname']."</option>";
                          }
                          ?>
                          </select>
						</div>
					</div>
					
					<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Student Name:</label>
						</div>
						<div class="col-lg-8">
                            <select name="studentname" id="" class="form-control custom-select" required>
                            <option selected value="" disabled>Select Class</option>
                          <?php
                                  include('dbconnect.php'); 
                          $query = mysqli_query($conn,"SELECT * FROM student");

                          while ($result = mysqli_fetch_array($query)) {
                          echo "<option value="  .$result['id']. ">" .$result['firstname'].' '.$result['middlename'].' ' .$result['lastname']."</option>";
                          }
                          ?>
                          </select>
						</div>
					</div>
					
					<div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Control No:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="controlno" required>
						</div>
					</div>				

					
					<div style="height:10px;"></div>			
					
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
    
 date_default_timezone_set('Asia/Manila');
 $date = date('Y-m-d H:i:s');
  // If upload button is clicked ...
  if (isset($_POST['save'])) {
 
    include 'dbconnect.php';

 
  	// Get image name

        $studentnameid = mysqli_real_escape_string($conn, $_POST['studentname']);
        $classnameid = mysqli_real_escape_string($conn, $_POST['classname']);
        $controlno = mysqli_real_escape_string($conn, $_POST['controlno']);

        $getrow1=mysqli_query($conn,"SELECT * FROM student where id='$studentnameid'");
        $getrow1=mysqli_fetch_array($getrow1);
         $studentname=$getrow1['firstname'] . ' ' . $getrow1['middlename'] . ' '.$getrow1['lastname'];
        
         $getrow2=mysqli_query($conn,"SELECT * FROM class where id='$classnameid'");
         $getrow2=mysqli_fetch_array($getrow2);
          $classname=$getrow2['classname'] ;
         

        if(!empty($_POST["studentname"])) {
            $check=mysqli_query($conn,"select * from studentclass where classname='".$classname."' and studentname='".$studentname."' and controlno='".$controlno."' and status='Active' ");
           $erow=mysqli_fetch_array($check);
            if($erow>0) {
                $_SESSION["error_remarks"]="Record duplication found!. Cannot be saved.";
                    //  
                    $_SESSION["error"]="error";
                    header('location:assignstudent.php');
                    exit();
                      }      
            }

        $sql = "INSERT INTO studentclass VALUES (DEFAULT,'$controlno','$studentnameid','$studentname','$classnameid','$classname','$date','Active')";   
        if (!mysqli_query($conn, $sql)) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["added"]="add";
                      header('location:assignstudent.php');
                      
                }

  }
 
?>
   
