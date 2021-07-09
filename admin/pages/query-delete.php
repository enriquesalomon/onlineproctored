<?php 
@ob_start();
session_start();
  include 'dbconnect.php'; 
  if (isset($_POST['deletestudent'])) {
  
    $id= mysqli_real_escape_string($conn, $_POST['iddelete']);

        if(!empty($_POST["iddelete"])) {           
                if (!mysqli_query($conn, "DELETE from student where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["studentdeleted"]="delete";
                      header('location:student.php');
                      
                }

  }
}

if (isset($_POST['deletegradelevel'])) {
  
  $id= mysqli_real_escape_string($conn, $_POST['iddelete']);

      if(!empty($_POST["iddelete"])) { 
        
          // check if has 1-1 relationship to other table
          $check=mysqli_query($conn,"select * from student where gradesection='" . $id . "'");
          $erow=mysqli_fetch_array($check);
           if($erow>0) {
                    $_SESSION["error_remarks"]="Cannot be deleted, found existing record to student records";
                   //  
                   $_SESSION["error"]="error";
                   header('location:gradelevel.php');
                   exit();
                     }      
           

              if (!mysqli_query($conn, "DELETE from gradelevel where id='$id'")) {
          echo("Error description: " . mysqli_error($conn));
              }else{
                    $_SESSION["gradeleveldeleted"]="delete";
                    header('location:gradelevel.php');
                    
              }

}
}



if (isset($_POST['deleteexam'])) {
  
  $id= mysqli_real_escape_string($conn, $_POST['iddelete']);

      if(!empty($_POST["iddelete"])) { 
        
          // check if has 1-1 relationship to other table
          $check=mysqli_query($conn,"select * from examresult where id='" . $id . "'");
          $erow=mysqli_fetch_array($check);
           if($erow>0) {
                    $_SESSION["error_remarks"]="Cannot be deleted, found existing record to exam result";
                   //  
                   $_SESSION["error"]="error";
                   header('location:exam.php');
                   exit();
                     }      
           

              if (!mysqli_query($conn, "DELETE from exam where id='$id'")) {
          echo("Error description: " . mysqli_error($conn));
              }else{
                    $_SESSION["examdeleted"]="delete";
                    header('location:exam.php');
                    
              }

}
}



if (isset($_POST['deletequiz'])) {
  
  $id= mysqli_real_escape_string($conn, $_POST['iddelete']);

      if(!empty($_POST["iddelete"])) { 
        
          // check if has 1-1 relationship to other table
          $check=mysqli_query($conn,"select * from quizresult where id='" . $id . "'");
          $erow=mysqli_fetch_array($check);
           if($erow>0) {
                    $_SESSION["error_remarks"]="Cannot be deleted, found existing record to quiz result";
                   //  
                   $_SESSION["error"]="error";
                   header('location:quiz.php');
                   exit();
                     }      
           

              if (!mysqli_query($conn, "DELETE from quiz where id='$id'")) {
          echo("Error description: " . mysqli_error($conn));
              }else{
                    $_SESSION["quizdeleted"]="delete";
                    header('location:quiz.php');
                    
              }

}
}
?>