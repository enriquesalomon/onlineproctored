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
                    header('location:gradelevel.php');
                      }      
            }

                if (!mysqli_query($conn, "UPDATE student set gradesection='$grade',firstname='$firstname',middlename='$middlename',lastname='$lastname',contact='$contactno',email='$email',address='$address',opeusername='$opeusername',opepassword='$opepassword' where id='$id'")) {
            echo("Error description: " . mysqli_error($conn));
                }else{
                      $_SESSION["studentedited"]="edit";
                      header('location:student.php');
                      
                }

  }
 
?>