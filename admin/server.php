
<?php
@ob_start();
session_start();
// LOGIN USER
$username = "";
$errors = array();

$db = mysqli_connect('localhost', 'user', '123456');

if (isset($_POST['admin_login'])) {

$username = mysqli_real_escape_string($db, $_POST['username']);

$password = mysqli_real_escape_string($db, $_POST['password']);

if (empty($username)) {

array_push($errors, "Username is required.");

}

if (empty($password)) {

array_push($errors, "Password is required.");

}

if (count($errors) == 0) {

$password = $password;

$query = "SELECT * FROM franchisees WHERE username='$username' AND password='$password'";

$results = mysqli_query($db, $query);
if (mysqli_num_rows($results) == 1) {
    

$_SESSION['username'] = $username;
$_SESSION['success'] = " ".$username."!";


$get1row=mysqli_query($db,"select * from franchisees where username='$username' and password='$password'");
$get1row=mysqli_fetch_array($get1row);


$usertype=$get1row['user_type'];
$status=$get1row['status'];


if($usertype=="OUTLET"){
   
    $_SESSION['user_type_outlet']=$get1row['user_type'];
     $_SESSION['outletid'] =$get1row['franchiseeid']; 
      $_SESSION['franchiseeid'] =$get1row['from_franchisee_head_id']; 
  if($status=="ACTIVE"){ header('location: home_outlet.php');}else{header('location: login.php');}
       
   
}elseif($usertype=="FRANCHISEE"){
    $_SESSION['user_type_franchisee']="FRANCHISEE";
     $_SESSION['outletid']=0;
    $_SESSION['franchiseeid'] =$get1row['franchiseeid']; 
    header('location: home.php');
}

}else {

array_push($errors, "Wrong username/password combination!");

}

}

}
?>