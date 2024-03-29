<?php
@ob_start();
session_start();
if ( isset( $_SESSION['username'])) {
$username=$_SESSION['username'];

} else {
    header('location: ../index.php');
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
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets/plugins/summernote/summernote-bs4.min.css">
   
    <!-- DataTables -->
    <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="../toastr/css/toastr.min.css">
  <!----->



  
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="../assets/plugins/daterangepicker/daterangepicker.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="../assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="../assets/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="../assets/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <style>

.main-sidebar { background-color: rgb(165,42,42) !important }

/**
.main-sidebar { background-color: rgb(67 144 85) !important }
 */
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

</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
<?php 
include('../includes/pagetopbar.php');
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
          <!-- newwww  -->
         
          <li class="nav-item">
            <a href="classes.php" class="nav-link ">
              <i class="nav-icon fas fa-columns"></i>
              <p>
                Classes
              </p>
            </a>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-user-circle"></i>
              <p>
                Subject
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./subject.php" class="nav-link ">
                <i class="far fas-file nav-icon"></i>
                  <p>Subject</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./assignsubject.php" class="nav-link ">
                <i class="far fas-file nav-icon"></i>
                  <p>Assign Subject</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item ">
            <a href="#" class="nav-link">
            <i class="nav-icon far fa-user-circle"></i>
              <p>
                Student
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./student.php" class="nav-link ">
                <i class="far fas-file nav-icon"></i>
                  <p>Student</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./assignstudent.php" class="nav-link">
                <i class="far fas-file nav-icon"></i>
                  <p>Assign Student</p>
                </a>
              </li>
             
            </ul>
          </li>

          <li class="nav-item menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
              Assessment
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./exam.php" class="nav-link active">
                <i class="far fas-file nav-icon"></i>
                  <p>Exam</p>
                </a>
              </li>
             <!-- <li class="nav-item">
                <a href="./examsubject.php" class="nav-link">
                <i class="far fas-file nav-icon"></i>
                  <p>Exam Subject</p>
                </a>
              </li> -->
              <li class="nav-item">
                <a href="./question.php" class="nav-link">
                  <i class="far fas-file nav-icon"></i>
                  <p>Question</p>
                </a>
              </li>
            </ul>
          </li>

        
          <li class="nav-header">Exit</li>
          <li class="nav-item">
          <a href="#" class="nav-link "data-toggle="modal" data-target="#logoutModal">
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
            <h1>Exam Details</h1> 
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <?php
if ( isset( $_SESSION['added']) ) {
include('toast-add.php');
}
if ( isset( $_SESSION['edited']) ) {
  include('toast-edited.php');
  }
if ( isset( $_SESSION['deleted']) ) {
include('toast-deleted.php');
}


if ( isset( $_SESSION['error']) ) {
  include('toast-error.php');
  }

unset($_SESSION['added']);
unset($_SESSION['edited']);
unset($_SESSION['deleted']);
unset($_SESSION['error']);
unset($_SESSION['error_remarks']);


?> 
<?php include 'modal-add-exam-subject.php'?>
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <div class="col-12">
          <?php
             $examcategoryid = $_GET['examcategoryid'];
             $classnameid = $_GET['classnameid'];
             $eid = $_GET['id'];
             $sy = $_GET['sy'];
             
              include('dbconnect.php');  
              
                if(!empty($_GET["examcategoryid"]) && !empty($_GET["classnameid"]) && !empty($_GET["id"]) && !empty($_GET["sy"])) {
                    $check=mysqli_query($conn,"select * from exam where id='" .$eid . "'");
                    $erow=mysqli_fetch_array($check);
                    if($erow>0) {              
                    }else{
                    header('location:exam.php');
                    exit();
                    }   
                    $check=mysqli_query($conn,"select * from exam where sy='" .$sy . "'");
                    $erow=mysqli_fetch_array($check);
                    if($erow>0) {              
                    }else{
                    header('location:exam.php');
                    exit();
                    }   
                    $check=mysqli_query($conn,"select * from class where id='" .$classnameid . "'");
                    $erow=mysqli_fetch_array($check);
                    if($erow>0) {              
                    }else{
                    header('location:exam.php');
                    exit();
                    }   
                    $check=mysqli_query($conn,"select * from examcategory where id='" .$examcategoryid . "'");
                    $erow=mysqli_fetch_array($check);
                    if($erow>0) {              
                    }else{
                    header('location:exam.php');
                    exit();
                    }   
                  

                }else{
                    header('location:exam.php');
                }

           $getrow1=mysqli_query($conn,"SELECT * FROM examcategory where id='$examcategoryid'");
           $getrow1=mysqli_fetch_array($getrow1);
            $examcat=$getrow1['examcategoryname'];
            $getrow1=mysqli_query($conn,"SELECT * FROM class where id='$classnameid'");
            $getrow1=mysqli_fetch_array($getrow1);
             $classname=$getrow1['classname'];
          ?>



          <div class="callout callout-info">
              <h5><i class="far fa-file-alt"></i> Examination Details:</h5> 
              <?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Periodical Exam: '. $examcat; ?></br>
              <?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Class: '. $classname; ?></br>
              <?php echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; SY: '. $sy; ?></br> 
        
            </div>
           
       
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
             
              <div class="col-12">
              <a  href="./exam.php"><button class="btn btn-info"style="margin-bottom: 15px;"data-toggle="modal" ><i class="fas fa-angle-double-left"></i> Back to Exam </button></a>
                <button class="btn btn-success"style="margin-bottom: 15px;"data-toggle="modal" data-target="#add-exam-subject"><i class="fa fa-plus" aria-hidden="true"></i>New Subject</button>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
            
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>ID</th>
                      <th>Subject</th>
                      <th>Date & Time of Exam</th>
                      <th>Total Question</th>
                      <th>Total Points</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                include('dbconnect.php');                           
                $query=mysqli_query($conn," select *  from examsubject where examid='".$eid."'");                                            
                while($getrow=mysqli_fetch_array($query)){
                ?>
                <?php 
                $id=$getrow['id'];   
                $examnameid=$getrow['examid'];             
                $subjectid=$getrow['subjectid'];    
                $examdatetime=$getrow['examdatetime'];      
                $totalquestion=$getrow['totalquestion'];        
               

                $getrow1=mysqli_query($conn,"SELECT * FROM subjects where id='$subjectid'");
                $getrow1=mysqli_fetch_array($getrow1);
                 $subjectname=$getrow1['subjectname'];   
                 
                 $examcatid = $_GET['examcategoryid'];
                 $classnameid = $_GET['classnameid'];
                 $eid = $_GET['id'];
                 $sy = $_GET['sy'];
                 
                ?>  
                    <tr>
                      <td><?php echo $id; ?></td>
                      <td><?php echo $subjectname; ?></td>
                      <td><?php echo $examdatetime; ?></td>
                      <td><?php echo $totalquestion; ?></td>
                      <td>0</td>
                      <td ><?php                  
                        echo ' <a class="btn btn-info btn-sm editbtn" href="#"><i class="fas fa-pencil-alt"></i></a>&nbsp';
                        echo '<a class="btn btn-danger btn-sm deletebtn" href="#"><i class="fas fa-trash"></i></a>&nbsp';
                        echo "<a href='examsubjquestion.php?examsubjectid=".$id."&examcategoryid=".$examcatid."&classnameid=".$classnameid."&id=".$id."&sy=".$sy."' class='btn btn-sm btn-success'> <i class='fas fa-folder'></i>Manage Questions</a>";
                    
                   ?>
                     </td>   
                     <td hidden><?php echo $subjectid; ?></td>                    

                    </tr>
                    <?php
}                      
?>       
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

         
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </section>
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

<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->

<script src="	https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>




<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
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

<!-- date-range-picker -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="../assets/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="../assets/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../assets/plugins/moment/moment.min.js"></script>
<script src="../assets/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../assets/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../assets/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../assets/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../assets/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets/dist/js/demo.js"></script>
<!-- Page specific script -->

<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker for modal add
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });
    //Date and time picker for modal edit
    $('#reservationdatetimes').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })


  })
</script>

<script>
  
 function validate(evt) {
  var theEvent = evt || window.event;

  // Handle paste
  if (theEvent.type === 'paste') {
      key = event.clipboardData.getData('text/plain');
  } else {
  // Handle key press
      var key = theEvent.keyCode || theEvent.which;
      key = String.fromCharCode(key);
  }
  var regex = /[0-9]|\./;
  if( !regex.test(key) ) {
    theEvent.returnValue = false;
    if(theEvent.preventDefault) theEvent.preventDefault();
  }
}

  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<script>


$(document).ready(function(){
  $('.editbtn').on('click', function(){

      $('#editmodal').modal('show');

        $tr =$(this).closest('tr');

        var data=$tr.children("td").map(function(){
          return $(this).text();
        }).get();

        $('#id').val(data[0]);     
        $('#examdatetimeedit').val(data[2]);   
        $('#subjectidedit').val(data[6]);   
        $('#totalquestionedit').val(data[3]);       
       
   

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
        $('#examnamedelete').val(data[1]); 
        $('#classnamedelete').val(data[2]); 
        $('#schoolyeardelete').val(data[3]); 
              
       
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
        <input type="hidden" class="form-control" id="id" name="idedit" required >

 

     <input type="hidden" class="form-control" name="eid" value="<?php echo$_GET['id']; ?>" required >
     <input type="hidden" class="form-control" name="classnameid" value="<?php echo $_GET['classnameid']; ?>" required >
     <input type="hidden" class="form-control" name="sy" value="<?php echo $_GET['sy']; ?>" required >
     <input type="hidden" class="form-control" name="examcategoryid" value="<?php echo $_GET['examcategoryid']; ?>" required >


        <div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Date and Time</label>
						</div>
                        <div class="col-lg-8">
                            <div class="input-group date" id="reservationdatetimes" data-target-input="nearest">
                                <input type="text" id="examdatetimeedit" name="examdatetime" class="form-control datetimepicker-input" data-target="#reservationdatetimes" required/>
                                <div class="input-group-append" data-target="#reservationdatetimes" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                            </div>
                        </div> 
                    </div>                
             
				    <div style="height:10px;"></div>
                    <div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Subject</label>
						</div>
						<div class="col-lg-8">
                            <select name="subjectnameid" id="subjectidedit" class="form-control custom-select" required>
                            <option selected value="" disabled>Select Subject</option>
                          <?php
                                  include('dbconnect.php'); 
                          $query = mysqli_query($conn,"SELECT * FROM subjects");

                          while ($result = mysqli_fetch_array($query)) {
                          echo "<option value="  .$result['id']. ">" .$result['subjectname']."</option>";
                          }
                          ?>
                          </select>
						</div>
					</div>
					
						<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Total Question</label>
						</div>
						<div class="col-lg-8">
							<input type="text" class="form-control" name="totalquestion" id="totalquestionedit" onkeypress='validate(event)' required>
                           
						</div>
					</div>
									
        
									
                </div> 
				</div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                    <button type="submit"name="editexamsubject" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Save</a>
                    	
				</form>
                </div>
				
            </div>
        </div>
    </div>



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
 <center><h6>Are you sure you want to delete this Exam Subject ?</h6> </center>

					<div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Exam Name</label>
						</div>
						<div class="col-lg-8">
<input type="hidden" name="iddelete" id="iddelete">           
<input type="hidden" class="form-control" name="eid" value="<?php echo$_GET['id']; ?>" required >
<input type="hidden" class="form-control" name="classnameid" value="<?php echo $_GET['classnameid']; ?>" required >
<input type="hidden" class="form-control" name="sy" value="<?php echo $_GET['sy']; ?>" required >
<input type="hidden" class="form-control" name="examcategoryid" value="<?php echo $_GET['examcategoryid']; ?>" required >

							<input type="text" id="examnamedelete" class="form-control" name="" required readonly>
						</div>
					</div>
					<div style="height:10px;"></div>
          <div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">Class Name</label>
						</div>
						<div class="col-lg-8">
							<input type="text" id="classnamedelete" class="form-control" name="" required readonly>
						</div>
					</div>
          <div style="height:10px;"></div>
          <div class="row">
						<div class="col-lg-4">
							<label class="control-label" style="position:relative; top:7px;">School Year</label>
						</div>
						<div class="col-lg-8">
							<input type="text" id="schoolyeardelete" class="form-control" name="" required readonly>
						</div>
					</div>

          
</div>


<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
<button type="submit" name="deleteexamsubjects" class="btn btn-primary">Yes</button>
</div>       
</form>


</div>
</div>
</div>

<?php 
include 'modal-logout.php';
?>





 
    