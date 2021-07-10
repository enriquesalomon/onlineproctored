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
  
  $classname= mysqli_real_escape_string($conn, $_POST['classname']);
  

      if(!empty($_POST["iddelete"])) { 
        
          // check if has 1-1 relationship to other table
          $check=mysqli_query($conn,"select * from subjectclass where classname='" . $classname . "'");
          $erow=mysqli_fetch_array($check);
           if($erow>0) {
                    $_SESSION["error_remarks"]="Cannot be deleted, found existing record to Subject Class";
                   //  
                   $_SESSION["error"]="error";
                   header('location:classes.php');
                   exit();
                     }      
           

              if (!mysqli_query($conn, "DELETE from class where id='$id'")) {
          echo("Error description: " . mysqli_error($conn));
              }else{
                    $_SESSION["deleted"]="delete";
                    header('location:classes.php');
                    
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



if (isset($_POST['deletesubject'])) {
  
  $id= mysqli_real_escape_string($conn, $_POST['iddelete']);
  $subjectname= mysqli_real_escape_string($conn, $_POST['subjectname']);
  

      if(!empty($_POST["iddelete"])) { 
        
          // check if has 1-1 relationship to other table
          $check=mysqli_query($conn,"select * from subjectclass where subjectname='$subjectname' ");
          $erow=mysqli_fetch_array($check);
           if($erow>0) {
                    $_SESSION["error_remarks"]="Cannot be deleted, found existing record to Subject Class";
                   //  
                   $_SESSION["error"]="error";
                   header('location:subject.php');
                   exit();
                     }      
         

              if (!mysqli_query($conn, "DELETE from subjects where id='$id'")) {
          echo("Error description: " . mysqli_error($conn));
              }else{
                    $_SESSION["deleted"]="delete";
                    header('location:subject.php');
                    
              }

}
}


if (isset($_POST['deleteassignsubject'])) {
  
  $id= mysqli_real_escape_string($conn, $_POST['iddelete']);
  

      if(!empty($_POST["iddelete"])) { 
        
          // check if has 1-1 relationship to other table
        //  $check=mysqli_query($conn,"select * from subjectclass where subjectname='$subjectname' ");
        //  $erow=mysqli_fetch_array($check);
        // If   if($erow>0) {
          //          $_SESSION["error_remarks"]="Cannot be deleted, found existing record to Subject Class";
                   //  
            //       $_SESSION["error"]="error";
             //      header('location:subject.php');
             //      exit();
             //        }      
         

              if (!mysqli_query($conn, "DELETE from subjectclass where id='$id'")) {
          echo("Error description: " . mysqli_error($conn));
              }else{
                    $_SESSION["deleted"]="delete";
                    header('location:assignsubject.php');
                    
              }

}
}


if (isset($_POST['deleteassignstudent'])) {
  
  $id= mysqli_real_escape_string($conn, $_POST['iddelete']);
  

      if(!empty($_POST["iddelete"])) { 
        
          // check if has 1-1 relationship to other table
        //  $check=mysqli_query($conn,"select * from subjectclass where subjectname='$subjectname' ");
        //  $erow=mysqli_fetch_array($check);
        // If   if($erow>0) {
          //          $_SESSION["error_remarks"]="Cannot be deleted, found existing record to Subject Class";
                   //  
            //       $_SESSION["error"]="error";
             //      header('location:subject.php');
             //      exit();
             //        }      
         

              if (!mysqli_query($conn, "DELETE from studentclass where id='$id'")) {
          echo("Error description: " . mysqli_error($conn));
              }else{
                    $_SESSION["deleted"]="delete";
                    header('location:assignstudent.php');
                    
              }

}
}
?>