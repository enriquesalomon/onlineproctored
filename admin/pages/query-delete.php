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
?>