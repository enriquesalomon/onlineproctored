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
		$classname= mysqli_real_escape_string($conn, $_POST['classname']);    

        if(!empty($_POST["classname"])) {
            $check=mysqli_query($conn,"select * from class where classname='".$classname."' AND id <> '$id' ");
           $erow=mysqli_fetch_array($check);
            if($erow>0) {
              $_SESSION["error_remarks"]="Cannot be saved, found class name duplication";
                    //  
                    $_SESSION["error"]="error";
                    header('location:classes.php');
                    exit();
                      }      
            }
               

                if (!mysqli_query($conn, "UPDATE class set classname='$classname' where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["edited"]="edit";
                      header('location:classes.php');
                      
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


  

  if (isset($_POST['editsubject'])) {
  
    $id= mysqli_real_escape_string($conn, $_POST['idedit']);
		$subject= mysqli_real_escape_string($conn, $_POST['subject']);    

        if(!empty($_POST["subject"])) {
            $check=mysqli_query($conn,"select * from subjects where subjectname='" . $_POST["subject"] . "'  AND id <> '$id' ");
           $erow=mysqli_fetch_array($check);
            if($erow>0) {
                    // $_SESSION["username_taken"]="duplicate";
                    //  
                    $_SESSION["error"]="error";
                    header('location:subject.php');
                      }      
            }
               

                if (!mysqli_query($conn, "UPDATE subjects set subjectname='$subject' where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["edited"]="edit";
                      header('location:subject.php');
                      
                }

  }

  

  if (isset($_POST['editassignsubject'])) {
  
    $id= mysqli_real_escape_string($conn, $_POST['idedit']);
		$subjectnameid= mysqli_real_escape_string($conn, $_POST['subjectname']);  
    $classnameid= mysqli_real_escape_string($conn, $_POST['classname']);    

    $getrow1=mysqli_query($conn,"SELECT * FROM class where id='$classnameid'");
    $getrow1=mysqli_fetch_array($getrow1);
     $classname=$getrow1['classname'];

     $getrow2=mysqli_query($conn,"SELECT * FROM subjects where id='$subjectnameid'");
     $getrow2=mysqli_fetch_array($getrow2);
      $subjectname=$getrow2['subjectname'];

    if(!empty($_POST["classname"])) {
        $check=mysqli_query($conn,"select * from subjectclass where classid='".$classnameid."' and subjectid='".$subjectnameid."' ");
       $erow=mysqli_fetch_array($check);
        if($erow>0) {
            $_SESSION["error_remarks"]="Record duplication found!. Cannot be saved.";
                //  
                $_SESSION["error"]="error";
                header('location:assignsubject.php');
                exit();
                  }      
        }


                if (!mysqli_query($conn, "UPDATE subjectclass set classid='$classnameid',classname='$classname',subjectid='$subjectnameid',subjectname='$subjectname' where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["edited"]="edit";
                      header('location:assignsubject.php');
                      
                }

  }
  
  if (isset($_POST['editassignstudent'])) {
  
    $id= mysqli_real_escape_string($conn, $_POST['idedit']);
		$classnameid= mysqli_real_escape_string($conn, $_POST['classnameedit']);  
    $studentnameid= mysqli_real_escape_string($conn, $_POST['studentnameedit']);  
     $controlno= mysqli_real_escape_string($conn, $_POST['controlnoedit']);  

    $getrow1=mysqli_query($conn,"SELECT * FROM class where id='$classnameid'");
    $getrow1=mysqli_fetch_array($getrow1);
     $classname=$getrow1['classname'];

     $getrow2=mysqli_query($conn,"SELECT * FROM student where id='$studentnameid'");
     $getrow2=mysqli_fetch_array($getrow2);
      $studentname=$getrow2['firstname'].' '.$getrow2['middlename'].' '.$getrow2['lastname']  ;

    if(!empty($_POST["classname"])) {
        $check=mysqli_query($conn,"select * from studentclass where controlno='".$controlno."' and studentid='".$studentnameid."' and classid='".$classnameid."' WHERE id <> '".$id."'");
       $erow=mysqli_fetch_array($check);
        if($erow>0) {
            $_SESSION["error_remarks"]="Record duplication found!. Cannot be saved.";
                //  
                $_SESSION["error"]="error";
                header('location:assignstudent.php');
                exit();
                  }      
        }


                if (!mysqli_query($conn, "UPDATE studentclass set controlno='$controlno',studentid='$studentnameid',studentname='$studentname',classid='$classnameid',classname='$classname' where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["edited"]="edit";
                      header('location:assignstudent.php');
                      
                }

  }
  
  
?>