<?php 
@ob_start();
session_start();
  include 'dbconnect.php'; 
  if (isset($_POST['editstudent'])) {
  
    $id= mysqli_real_escape_string($conn, $_POST['id']);
		$grade= mysqli_real_escape_string($conn, $_POST['grade']);
        $firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
        $middlename = mysqli_real_escape_string($conn, $_POST['middlename']);		
        $lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
        $contactno = mysqli_real_escape_string($conn, $_POST['contactno']);		
        $address = mysqli_real_escape_string($conn, $_POST['address']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);		
        $opeusername = mysqli_real_escape_string($conn, $_POST['username']);
        $opepassword = mysqli_real_escape_string($conn, $_POST['password']);
		$date = date('Y-m-d H:i:s');

        if(!empty($_POST["username"])) {
            $check=mysqli_query($conn,"select * from student where opeusername='" . $_POST["username"] . "' AND id <> '$id' ");
           $erow=mysqli_fetch_array($check);
            if($erow>0) {
                    // $_SESSION["username_taken"]="duplicate";
                    //  
                    $_SESSION["error"]="error";
                    header('location:student.php');
                      }      
            }

                if (!mysqli_query($conn, "UPDATE student set gradesection='$grade',firstname='$firstname',middlename='$middlename',lastname='$lastname',contact='$contactno',email='$email',address='$address',opeusername='$opeusername',opepassword='$opepassword' where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["studentedited"]="edit";
                      header('location:student.php');
                      
                }

  }
 

  if (isset($_POST['editgradevel'])) {
  
    $id= mysqli_real_escape_string($conn, $_POST['id']);
		$grade= mysqli_real_escape_string($conn, $_POST['grade']);    
    $section= mysqli_real_escape_string($conn, $_POST['section']);  

        if(!empty($_POST["grade"])) {
            $check=mysqli_query($conn,"select * from gradelevel where gradelevel='" . $_POST["grade"] . "' AND section='" . $_POST["section"] . "' AND id <> '$id' ");
           $erow=mysqli_fetch_array($check);
            if($erow>0) {
                    // $_SESSION["username_taken"]="duplicate";
                    //  
                    $_SESSION["error"]="error";
                    header('location:gradelevel.php');
                      }      
            }
               

                if (!mysqli_query($conn, "UPDATE gradelevel set gradelevel='$grade',section='$section' where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["gradeleveledited"]="edit";
                      header('location:gradelevel.php');
                      
                }

  }


  
  if (isset($_POST['editexam'])) {
  
    $id= mysqli_real_escape_string($conn, $_POST['idedit']);
    $dateexam= mysqli_real_escape_string($conn, $_POST['dateexam']);
		$grade= mysqli_real_escape_string($conn, $_POST['grade']);
        $examtimelimit = mysqli_real_escape_string($conn, $_POST['examtimelimit']);
        $questiontimelimit = mysqli_real_escape_string($conn, $_POST['questiontimelimit']);		
        $examtitle = mysqli_real_escape_string($conn, $_POST['examtitle']);
        $examdescription = mysqli_real_escape_string($conn, $_POST['examdescription']);	

        if(!empty($_POST["grade"])) {
            $check=mysqli_query($conn,"select * from gradelevel where examdate='" . $_POST["dateexam"] . "' AND id <> '$id' ");
           $erow=mysqli_fetch_array($check);
            if($erow>0) {
              $_SESSION["error_remarks"]="Cannot be saved, found exam date duplication";
                 
                    $_SESSION["error"]="error";
                    header('location:exam.php');
                    exit();
                      }      
            }
               

                if (!mysqli_query($conn, "UPDATE exam set examdate='$dateexam',grade='$grade',examtimelimit='$examtimelimit',questiontimelimit='$questiontimelimit',examtitle='$examtitle',examdescription='$examdescription' where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["examedited"]="edit";
                      header('location:exam.php');
                      
                }

  }
 
 
  
  
  if (isset($_POST['editquiz'])) {
  
    $id= mysqli_real_escape_string($conn, $_POST['idedit']);
    $dateexam= mysqli_real_escape_string($conn, $_POST['datequiz']);
		$grade= mysqli_real_escape_string($conn, $_POST['grade']);
        $examtimelimit = mysqli_real_escape_string($conn, $_POST['quiztimelimit']);
        $questiontimelimit = mysqli_real_escape_string($conn, $_POST['questiontimelimit']);		
        $examtitle = mysqli_real_escape_string($conn, $_POST['quiztitle']);
        $examdescription = mysqli_real_escape_string($conn, $_POST['examdescription']);	

        if(!empty($_POST["grade"])) {
            $check=mysqli_query($conn,"select * from quiz where quizdate='" . $_POST["datequiz"] . "' AND id <> '$id' ");
           $erow=mysqli_fetch_array($check);
            if($erow>0) {
              $_SESSION["error_remarks"]="Cannot be saved, found quiz date duplication";
                 
                    $_SESSION["error"]="error";
                    header('location:quiz.php');
                    exit();
                      }      
            }
               

                if (!mysqli_query($conn, "UPDATE quiz set quizdate='$dateexam',grade='$grade',quiztimelimit='$examtimelimit',questiontimelimit='$questiontimelimit',quiztitle='$examtitle',quizdescription='$examdescription' where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["quizedited"]="edit";
                      header('location:quiz.php');
                      
                }

  }

?>