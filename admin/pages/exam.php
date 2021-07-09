<?php
@ob_start();
session_start();
if ( isset( $_SESSION['username'])) {
$username=$_SESSION['username'];

} else {
    header('location: index.php');
}
include('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Online Proctored Web App | Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  



  <style>



    .main-sidebar { background-color: rgb(65,177,91) !important }
   .nav-header {
    background-color: inherit;
    color: #FFFFFF !important;
    
   }
   .d-block{
    background-color: inherit;
    color: #FFFFFF !important;
    
   }
   .nav-item p {
    background-color: inherit;
    color: #FFFFFF !important;
    
   }
   .brand-text{
    background-color: inherit;
    color: #FFFFFF !important;
    
   }


   [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:focus, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:hover {
    color: #f8f9fa !important;
    background-color: rgb(50 143 232 / 90%) !important;

}



  </style>
<style>
.datepicker{
z-index:6000 !important;
}
</style>
<!--date picker-->
<link rel="stylesheet" href="../assets/css/bootstrap-datepicker.css" />
<script src="../assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap.js" type="text/javascript"></script>
<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>


</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<?php 
include('../includes/topbar.php');
?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="../assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="../assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo ( $_SESSION['nickname']);?></a>
        </div>
      </div>

     
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
               
              </p>
            </a>
           
          </li>
         
          
         
          <li class="nav-header">MANAGEMENT</li>         
          <li class="nav-item">
            <a href="student.php" class="nav-link">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Student
              </p>
            </a>
          </li>

          
          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                OPE
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./exam.php" class="nav-link active">
                  <i class="far fa-file nav-icon"></i>
                  <p>Exam</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./quiz.php" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>Quiz</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/materials.php" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>Materials for Study</p>
                </a>
              </li>
            </ul>
          </li>
         
         
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user-circle"></i>
              <p>
                Admission
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="student.php" class="nav-link">
                  <i class="far fa-user-circle nav-icon"></i>
                  <p>Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="gradelevel.php" class="nav-link">
                  <i class="far fa-file nav-icon"></i>
                  <p>Grade Level</p>
                </a>
              </li>
             
            </ul>
          </li>
         
        
          <li class="nav-header">Exit</li>
          <li class="nav-item">
            <a href="../login.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
         
        
         
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Manage Exam</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Exam List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
if ( isset( $_SESSION['examadded']) ) {
include('toast-add.php');
}
if ( isset( $_SESSION['examedited']) ) {
  include('toast-edited.php');
  }
if ( isset( $_SESSION['examdeleted']) ) {
include('toast-deleted.php');
}


if ( isset( $_SESSION['error']) ) {
  include('toast-error.php');
  }

unset($_SESSION['examadded']);
unset($_SESSION['examedited']);
unset($_SESSION['examdeleted']);
unset($_SESSION['error']);
unset($_SESSION['error_remarks']);


?> 
 <!-- Main content -->
    
 <?php include 'modal-add-exam.php'?>
 <section class="content">
       <div class="container-fluid">
       <button class="btn btn-success"style="margin-bottom: 15px;"data-toggle="modal" data-target="#add-exam">Add Student</button>

        <div class="row">
          <div class="col-12">
           

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Id</th>
                  <th>Exam Date</th>
                  <th hidden>IDGradeSection</th>
                    <th>Grade & Section</th>
                    <th>Time Limit</th>
                    <th>Question Limit(secs)</th>
                    <th>Exam Title</th>
                    <th>Exam Description</th>
                    <th>Date Added</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                <?php
                include('dbconnect.php');                           
                $query=mysqli_query($conn," select *  from exam");                                            
                while($getrow=mysqli_fetch_array($query)){
                ?>
                <?php 
                $id=$getrow['id'];   
                $examdate=$getrow['examdate'];             
                $gradesectionid=$getrow['grade'];       

                $examtimelimit=$getrow['examtimelimit'];     
                $questiontimelimit=$getrow['questiontimelimit'];
                $examtitle=$getrow['examtitle'];   
                $examdescription=$getrow['examdescription']; 
                $dateadded=$getrow['dateaddedd'];  

                $getrow1=mysqli_query($conn,"SELECT * FROM gradelevel where id='$gradesectionid'");
                $getrow1=mysqli_fetch_array($getrow1);
                 $gradesection=$getrow1['gradelevel'].' '.$getrow1['section'];
                
                ?>             
                <tr>
                <td><?php echo $id; ?></td>
                <td><?php echo $examdate; ?></td>
                <td hidden><?php echo $gradesectionid; ?></td> 
                <td><?php echo $gradesection; ?></td>                
                <td><?php echo $examtimelimit; ?></td>   
                <td><?php echo $questiontimelimit; ?></td>
                <td><?php echo $examtitle; ?></td>
                <td><?php echo $examdescription; ?></td>  
                <td><?php echo $dateadded; ?></td>       
                <td><?php 
                    echo ' <button type="button" class="btn btn-block bg-gradient-info btn-xs editbtn">Edit</button>';
                    echo ' <button type="button" class="btn btn-block bg-gradient-danger btn-xs deletebtn" name="deletegradelevel">Delete</button>';
                   
                   ?>
               </td>                  
                </tr> 
<?php
}                      
?>                                            
                    </tbody>                     
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; Online Proctored Exam</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../assets/plugins/jszip/jszip.min.js"></script>
<script src="../assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="../assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="../assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->

<script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>



<script>


$(document).ready(function(){
  $('.editbtn').on('click', function(){

      $('#editmodal').modal('show');

        $tr =$(this).closest('tr');

        var data=$tr.children("td").map(function(){
          return $(this).text();
        }).get();

        $('#id').val(data[0]);     
        $('#dateexam1').val(data[1]);   
        $('#gradeedit').val(data[2]);         
        $('#timelimit').val(data[4]);    
        $('#questionlimit').val(data[5]);      
        $('#examtitle').val(data[6]);         
        $('#examdescription').val(data[7]);   
   

  });
});

$(document).ready(function(){
  $('.deletebtn').on('click', function(){

      $('#deletemodal').modal('show');

        $tr =$(this).closest('tr');

        var data=$tr.children("td").map(function(){
          return $(this).text();
        }).get();

        $('#iddelete').val(data[0]);  
        $('#exam').val(data[1] +' ' +data[6]);       
       
  });
});


</script>

   

  
<!-- Edit -->
<div class="modal fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    
                    <center><h4 class="modal-title" id="myModalLabel">Edit Exam</h4></center>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
				<div class="container-fluid">
				<form method="POST" action="query-edit.php" enctype="multipart/form-data">
        <div class="row">
                                    <div class="col-lg-4">
                                      <label class="control-label" style="position:relative; top:7px;">Date of Exam</label>
                                    </div>
                                <div class="col-lg-8">
                                    <div class="input-group">
                                    <div class="input-group-prepend">
                                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                    </div>
                              
                  
                                <input id="dateexam1" class="form-control"  name="dateexam" placeholder="mm/dd/yyyy" type="calendar" readonly  />
                                </div>
                               </div>
                      </div>			
					  <div style="height:10px;"></div>	 
				<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Grade & Section:</label>
						</div>
						<div class="col-lg-8">
            <input type="hidden" class="form-control" id="id" name="idedit" required >
                            <select name="grade" id="gradeedit" class="form-control custom-select" required>
                            <option selected value="" disabled>Select Grade & Section</option>
                          <?php
                                  include('dbconnect.php'); 
                          $query = mysqli_query($conn,"SELECT * FROM gradelevel");

                          while ($result = mysqli_fetch_array($query)) {
                          echo "<option value=" .$result['id']. ">" .$result['gradelevel'].' '.$result['section']."</option>";
                          }
                          ?>
                          </select>
						</div>
					</div>
					
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Exam Time Limit:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="timelimit" name="examtimelimit"required>
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Question Limit to display:</label>
						</div>
							<div style="height:10px;"></div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="questionlimit" name="questiontimelimit"required>
						</div>
					</div>
						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Exam Title:</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" id="examtitle" name="examtitle"required>
                           
						</div>
					</div>
								<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Exam Description:</label>
						</div>
						<div class="col-lg-8">
                        <textarea  class="form-control" rows="4" id="examdescription" name="examdescription"></textarea>
         
						</div>
					</div>

        

									
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit"name="editexam" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    	
				</form>
                </div>
				
            </div>
        </div>
    </div>

<script type="text/javascript">
$('#dateexam1').datepicker();
$('.datepicker').datepicker({
weekStart:1,
color: 'red'
});
</script>


</body>
</html>


<!--modal delete  -->
<div id="deletemodal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
<div class="modal-dialog modal-md" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLabel">Delete Confirmation</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<form action="query-delete.php" method="POST">
<div class="modal-body">
 <center><h6>Are you sure you want to delete Exam Schedule?</h6> </center>
<input type="hidden" name="iddelete" id="iddelete">
<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Exam:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" id="exam" class="form-control" name="" required readonly>
						</div>
					</div>
					<div style="height:10px;"></div>
</div>


<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
<button type="submit" name="deleteexam" class="btn btn-primary">Yes</button>
</div>       
</form>


</div>
</div>
</div>



 
    