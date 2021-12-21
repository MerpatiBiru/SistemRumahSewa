<?php
include "db_connect.php";

$uname=$_POST['username'];
$email=$_POST['email'];
$pass=$_POST['password'];
$phone=$_POST['telephone'];

 if (empty($uname)) {
    header("Location: sign_up.php?error=Username is required");
     exit();
 }
  else if (empty($pass)) {
    header("Location: sign_up.php?error=Password is required");
     exit();
  }
    else if (empty($phone)) {
    header("Location: sign_up.php?error=Telephone number is required");
     exit();
  }
    else if (empty($email)) {
    header("Location: sign_up.php?error=Email is required");
     exit();
 }else{
    $sql = "SELECT * FROM users WHERE username='$uname' OR email='$email'";       
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) > 0) {
	    $row = mysqli_fetch_assoc($result);
        if ($row['username'] === $uname) {
          header("Location: sign_up.php?error=Username already taken");
	        exit();
	      }
        else if ($row['email'] === $email) {
          header("Location: sign_up.php?error=Email already taken");
          exit();
        }
    }else{
	    $input=mysqli_query($connect,"INSERT INTO users (username,email,password,
	    phoneNum,level_id)VALUES('$uname','$email','$pass','$phone','2')");
	
	    if($input){
		   header("Location: sign_up.php?sucess=Success");
		   exit();
	    }
    }
 }
?>
